<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\Utility;
use App\Models\FileEbook;
use Illuminate\Http\Request;
use App\Libraries\Search;

class ProjectModel extends Model
{
    /** @var string Table name */
    protected $table = 'project_management';

    public function projectType()
    {
        return $this->belongsTo( 'App\Models\ProjectTypeModel', 'project_type' );
    }

    public function projectStatus()
    {
        return $this->belongsTo( 'App\Models\ProjectStatusModel', 'project_status' );
    }

    public function projectLocation()
    {
        return $this->belongsTo( 'App\Models\ProjectLocationModel', 'project_location' );
    }

    public function getUpdate( $limit = 5 )
    {
        $result = $this->with( [ 'projectType', 'projectStatus', 'projectLocation' ] )
                       ->where( 'status', '!=', '' )
                       ->orderBy( 'created_at', 'DESC' )
                       ->offset( 0 )->take( $limit )
                       ->get();

        return $this->transformContent( $result );
    }

    /**
     * Get Single project information
     *
     * @param $project_id
     *
     * @return \Illuminate\Database\Eloquent\Builder|Model|null|object
     */
    public static function getProjectInfo( $project_id )
    {
        $projectInfo = ProjectModel::with( [ 'projectType', 'ProjectStatus', 'projectLocation' ] )
                                   ->where( 'id', $project_id )
                                   ->where( 'status', 'publish' )
                                   ->first();
        if( $projectInfo ){
            $projectInfo->setAttribute( 'project_type_title', Utility::getLanguageFields( 'name', $projectInfo->projectType ) );
            $projectInfo->setAttribute( 'project_status_title', Utility::getLanguageFields( 'name', $projectInfo->ProjectStatus ) );
            $projectInfo->setAttribute( 'project_location_title', Utility::getLanguageFields( 'location_name', $projectInfo->projectLocation ) );
        }

        return $projectInfo;

    }

    /**
     * Get Project property list
     *
     * @return mixed
     */
    public function project_property()
    {
        $result = $this->with( [ 'projectType', 'ProjectStatus', 'projectLocation' ] )
                       ->where( 'status', 'publish' )
                       ->where( 'feature_property', 'yes' )
                       ->orderby( 'publish_date', 'DESC' )
                       ->get();

        return $this->transformContent( $result );
    }

    /**
     * Get option for search
     *
     * Location list
     * project name list
     * Unit info list
     *
     * @return array
     */
    public function getSearchOption()
    {
        $result = $this->with( [ 'projectLocation' ] )
                       ->where( 'status', 'publish' )
                       ->get();

        //Array key | project id
        $option['location'] = [];
        $option['project']  = [];
        $option['unitType'] = [];

        foreach( $result as $list ){

            //get publish project
            $option['project'][ $list->id ] = Utility::getLanguageFields( 'project_name', $list );

            //get location uesed
            if( $list->projectLocation ){
                if( array_key_exists( $list->projectLocation->id, $option['location'] ) == false ){
                    $option['location'][ $list->projectLocation->id ] = Utility::getLanguageFields( 'location_name', $list->projectLocation );
                }
            }

            //get Unit type [en]
            if( $list->project_unit_info ){

                $unit = json_decode( $list->project_unit_info, true );
                foreach( $unit as $itemUnit ){
                    $option['unitType'][ $list->id ] = $itemUnit;
                }
            }
        }

        return $option;
    }

    /**
     * Get project page
     *
     * @param Request $request
     */
    public function getList( Request $request )
    {
        $builder = $this->with( [ 'projectType', 'ProjectStatus', 'projectLocation' ] )
                        ->where( 'status', 'publish' );
        $data    = Search::search( $builder, 'project', $request );
        dd( $data );
    }

    /**
     * Transform Project data
     *
     * @param $content
     *
     * @return mixed
     */
    private function transformContent( $content )
    {

        foreach( $content as $list ){

            $list->setAttribute( 'project_name', Utility::getLanguageFields( 'project_name', $list ) );
            $list->setAttribute( 'slug', Utility::getLanguageFields( 'slug', $list ) );
            $list->setAttribute( 'project_detail', Utility::getLanguageFields( 'project_detail', $list ) );
            $list->setAttribute( 'project_location', '' );
            $list->setAttribute( 'project_thumbnail', FileEbook::getFile( $list->thumbnail ) );
            $list->setAttribute( 'project_logo', FileEbook::getFile( $list->logo ) );

            if( isset( $list->ProjectStatus ) ){
                $list->setAttribute( 'project_status_title', Utility::getLanguageFields( 'name', $list->ProjectStatus ) );
            }

            if( isset( $list->projectType ) ){
                $list->setAttribute( 'project_type_title', Utility::getLanguageFields( 'name', $list->projectType ) );
            }

            if( isset( $list->projectLocation ) ){
                $list->setAttribute( 'project_location_title', Utility::getLanguageFields( 'location_name', $list->projectLocation ) );
            }
        }

        return $content;
    }
}
