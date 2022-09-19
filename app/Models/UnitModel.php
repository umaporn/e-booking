<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FileEbook;
use App\Libraries\Utility;
use App\Libraries\Search;
use App\Models\ProjectModel;
use App\Models\ProjectTypeModel;
use Illuminate\Http\Request;

class UnitModel extends Model
{
    /** @var string Table name */
    protected $table = 'unit';

    public function unitLabel()
    {
        return $this->belongsTo( 'App\Models\UnitLabelModel', 'select_unit_label' );
    }

    public function project()
    {
        return $this->belongsTo( 'App\Models\projectModel', 'project_id' );
    }

    /**
     * Get last update
     *
     * @param int $limit
     *
     * @return mixed
     */
    public function getUpdate( $limit = 4 )
    {
        $result = $this->with( [ 'project', 'unitLabel' ] )
                       ->where( 'status', '=', 'publish' )
                       ->whereRaw( " DATE_FORMAT(publish_date,'%Y-%m-%d') <= '" . date( 'Y-m-d' ) . "'" )
                       ->whereRelation( 'project', 'status', '=', 'publish' )
                       ->offset( 0 )
                       ->take( $limit )
                       ->orderBy( 'created_at', 'DESC' )
                       ->get();

        return $this->transformContent( $result );

    }

    /**
     * Get Unit property
     *
     * @param $project
     *
     * @return mixed
     */
    public function getUnitProperty( $project )
    {
        $result = $this->with( [ 'unitLabel' ] )
                       ->where( 'project_id', $project->id )
                       ->where( 'status', 'publish' )
                       ->whereRaw( " DATE_FORMAT(publish_date,'%Y-%m-%d') <= '" . date( 'Y-m-d' ) . "'" )
                       ->where( 'feature_property', 'yes' )
                       ->orderby( 'publish_date', 'DESC' )
                       ->offset( 0 )->take( 2 )->get();

        return $this->transformContent( $result );
    }

    /**
     * Get Unit list
     *
     * @param object $project
     * @param int    $limit
     *
     * @return mixed
     */
    public function getUnitList( Request $request, $project, $limit = 5 )
    {

        $builder = $this->with( [ 'unitLabel' ] )
                        ->where( 'project_id', '=', $project->id )
                        ->where( 'status', 'publish' )
                        ->whereRaw( " DATE_FORMAT(publish_date,'%Y-%m-%d') <= '" . date( 'Y-m-d' ) . "'" );
        $data    = Search::search( $builder, 'unit', $request, [], $limit );

        return $this->transformContent( $data );

    }

    /**
     * Get relate unit detail pge
     *
     * @param     $unit
     * @param     $project
     * @param int $limit
     *
     * @return mixed
     */
    public function getUnitRelate( $unit, $project, $limit = 5 )
    {

        $result = $this->with( [ 'unitLabel' ] )
                       ->where( 'id', '!=', $unit )
                       ->where( 'status', 'publish' )
                       ->whereRaw( " DATE_FORMAT(publish_date,'%Y-%m-%d') <= '" . date( 'Y-m-d' ) . "'" )
                       ->offset( 0 )->take( $limit )->get();

        return $this->transformContent( $result );
    }

    /**
     * Get Unit list ,Unit list page
     *
     * @param Request $request
     * @param int     $limit
     *
     * @return mixed
     */
    public function getList( Request $request, $limit = 5 )
    {
        $builder = $this->with( [ 'unitLabel' ] )
                        ->whereRaw( " DATE_FORMAT(publish_date,'%Y-%m-%d') <= '" . date( 'Y-m-d' ) . "'" )
                        ->where( 'status', 'publish' );
        $data    = Search::search( $builder, 'unit', $request, [], $limit );

        return $this->transformContent( $data );

    }

    /**
     * Get Unit info
     *
     * @param $id
     *
     * @return mixed
     */
    public function getUnitInfo( $id )
    {
        $unit = $this->with( [ 'unitLabel' ] )
                     ->selectRaw( '*,360_video_link as video_link' )
                     ->where( 'status', 'publish' )
                     ->where( 'id', $id )->get();

        return $this->transformContent( $unit );
    }

    /**
     * Get unit list for search
     *
     * @param Request $request
     */
    public function getUnitSearch( Request $request )
    {
        $builder = $this->with( [ 'unitLabel', 'project' ] )
                        ->whereRelation( 'project', 'status', '=', 'publish' )
                        ->where( 'status', 'publish' )
                        ->whereRaw( " DATE_FORMAT(publish_date,'%Y-%m-%d') <= '" . date( 'Y-m-d' ) . "'" );

        /**
         * Check condition
         * project slug
         * project type
         * project location
         * project Unit Type
         * Unit total price
         */
        if( $request->project != 'all' ){
            $builder->whereRelation( 'project', 'slug_english', '=', $request->project );
            $builder->OrwhereRelation( 'project', 'slug_thai', '=', $request->project );
        }

        if( $request->type != 'all' ){
            $projectType = ProjectTypeModel::getTypeId( $request->type );
            if( isset( $projectType->id ) ){
                $builder->whereRelation( 'project', 'project_type', '=', $projectType->id );
            }
        }

        if( $request->location != 'all' ){
            $location = ProjectLocationModel::getLocationId( $request->location );
            if( isset( $location->id ) ){
                $builder->whereRelation( 'project', 'project_location', '=', $location->id );
            }
        }

        if( $request->unit != 'all' ){
            $builder->whereRelation( 'project', 'project_unit_info', 'like', '%' . $request->unit . '%' );
        }

        if( $request->price != 'all' ){

            if( $request->price == '0' ){
                $builder->whereRaw( '(0+total_price) BETWEEN 0 and 4.99 ' );
            } else if( $request->price == '5' ){
                $builder->whereRaw( '(0+total_price) BETWEEN 5 and 9.99 ' );
            } else if( $request->price == '10' ){
                $builder->whereRaw( '(0+total_price) >= 10 ' );
            }

        }

        $unitList = $builder->get();

        return $this->transformContent( $unitList );

    }

    /**
     * Transform Unit data
     *
     * @param $content
     *
     * @return mixed
     */
    private function transformContent( $content )
    {

        foreach( $content as $list ){

            $list->setAttribute( 'unit_name', Utility::getLanguageFields( 'unit_name', $list ) );
            $list->setAttribute( 'unit_detail', Utility::getLanguageFields( 'unit_detail', $list ) );
            $list->setAttribute( 'slug', Utility::getLanguageFields( 'slug', $list ) );
            $list->setAttribute( 'unit_floor', Utility::getLanguageFields( 'unit_floor', $list ) );
            $list->setAttribute( 'unit_sqm', Utility::getLanguageFields( 'unit_sqm', $list ) );
            $list->setAttribute( 'unit_facing', Utility::getLanguageFields( 'unit_facing', $list ) );
            $list->setAttribute( 'images', FileEbook::getFile( $list->unit_image ) );
            $list->setAttribute( 'images_unit_layout', FileEbook::getFile( $list->unit_layout_upload_file ) );
            $list->setAttribute( 'images_floor_layout', FileEbook::getFile( $list->floor_layout_upload_file ) );

            if( isset( $list->unit_gallery ) ){
                $list->setAttribute( 'gallery_files', GalleryModel::gallery( $list->unit_gallery ) );
            }

            if( isset( $list->project_id ) ){
                $list->setAttribute( 'project_info', ProjectModel::getProjectInfo( $list->project_id ) );
            }

            if( isset( $list->unitLabel ) ){
                $list->setAttribute( 'unit_label_title', Utility::getLanguageFields( 'name', $list->unitLabel ) );
            }

        }

        return $content;
    }

}
