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

    public function building()
    {
        return $this->belongsTo( 'App\Models\BuildingModel', 'building_layout_id' );
    }

    /**
     * Get Last update
     *
     * @param int $limit
     *
     * @return mixed
     */
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
     * Get Relate project
     *
     * @param $project
     *
     * @return mixed
     */
    public function getRelate( $project )
    {
        $result = $this->with( [ 'projectType', 'projectStatus', 'projectLocation' ] )
                       ->where( 'id', '!=', $project->id )
                       ->where( 'status', '!=', '' )
                       ->orderBy( 'created_at', 'DESC' )
                       ->offset( 0 )->take( 3 )
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

    public function getProjectDetail( $slug )
    {
        $projectInfo = ProjectModel::with( [ 'projectType', 'ProjectStatus', 'projectLocation', 'building' ] )
                                   ->selectRaw( '*,360_video_link as video_link' )
                                   ->where( 'status', 'publish' )
                                   ->where( 'slug_english', $slug )
                                   ->orWhere( 'slug_thai', $slug )->first();

        if( $projectInfo ){
            $projectInfo->setAttribute( 'project_name', Utility::getLanguageFields( 'project_name', $projectInfo ) );
            $projectInfo->setAttribute( 'slug', Utility::getLanguageFields( 'slug', $projectInfo ) );
            $projectInfo->setAttribute( 'project_detail', Utility::getLanguageFields( 'project_detail', $projectInfo ) );
            $projectInfo->setAttribute( 'building_number', Utility::getLanguageFields( 'total_building', $projectInfo ) );
            $projectInfo->setAttribute( 'floor_number', Utility::getLanguageFields( 'total_floor', $projectInfo ) );
            $projectInfo->setAttribute( 'unit_number', Utility::getLanguageFields( 'total_unit', $projectInfo ) );
            $projectInfo->setAttribute( 'project_area', Utility::getLanguageFields( 'total_project_area', $projectInfo ) );

            $projectInfo->setAttribute( 'facility', Utility::getLanguageFields( 'facility_detail', $projectInfo ) );
            $projectInfo->setAttribute( 'nearby', Utility::getLanguageFields( 'nearby_detail', $projectInfo ) );

            $projectInfo->setAttribute( 'project_thumbnail', FileEbook::getFile( $projectInfo->thumbnail ) );
            $projectInfo->setAttribute( 'project_logo', FileEbook::getFile( $projectInfo->logo ) );
            $projectInfo->setAttribute( 'gallery_files', GalleryModel::images( $projectInfo->project_gallery ) );

            $projectInfo->setAttribute( 'project_type_title', Utility::getLanguageFields( 'name', $projectInfo->projectType ) );
            $projectInfo->setAttribute( 'project_status_title', Utility::getLanguageFields( 'name', $projectInfo->ProjectStatus ) );
            $projectInfo->setAttribute( 'project_location_title', Utility::getLanguageFields( 'location_name', $projectInfo->projectLocation ) );

            if( isset( $projectInfo->building ) ){
                $projectInfo->building->setAttribute( 'title', Utility::getLanguageFields( 'building_layout_name', $projectInfo->building ) );
                $projectInfo->building->setAttribute( 'image', FileEbook::getFile( $projectInfo->building_layout_image ) );
            }

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
    public function getSearchOption( $project = null, $type = null, $unit = null, $location = null )
    {
        $option['location']    = [];
        $option['project']     = [];
        $option['unitType']    = [];
        $option['projectType'] = [];

        $builder = $this->join( 'project_type', 'project_management.project_type', '=', 'project_type.id' )
                        ->join( 'project_location', 'project_management.project_location', '=', 'project_location.id' );

        if( $type != null && $type != 'all' ){
            $getTypeId = ProjectTypeModel::getTypeId( $type );
            $builder->where( 'project_type', $getTypeId->id );
        }

        if( $location != null && $location != 'all' ){
            $getLocationId = ProjectLocationModel::getLocationId( $location );
            $builder->where( 'project_location', $getLocationId->id );
        }

        if( $project != null && $project != 'all' ){
            $builder->where( 'slug_english', $project )
                    ->orWhere( 'slug_english', $project );
        }

        $result = $builder->get();

        foreach( $result as $key => $list ){
            //get publish project
            $option['project'][ $key ]['title'] = Utility::getLanguageFields( 'project_name', $list );
            $option['project'][ $key ]['slug']  = Utility::getLanguageFields( 'slug', $list );
            //get location uesed
            if( $list->project_location ){
                if( array_key_exists( $list->project_location, $option['location'] ) == false ){
                    $option['location'][ $list->project_location ] = Utility::getLanguageFields( 'location_name', $list );
                }
            }
            //get Unit type [en]
            if( $list->project_unit_info ){
                $unit = json_decode( $list->project_unit_info, true );
                foreach( $unit as $itemUnit ){
                    $option['unitType'][ $list->id ] = $itemUnit;
                }
            }
            //Project type
            if( $list->project_type ){
                if( array_key_exists( $list->project_type, $option['projectType'] ) == false ){
                    $option['projectType'][ $list->project_type ] = Utility::getLanguageFields( 'name', $list );
                }
            }
        }

        return $option;
    }

    /**
     * Get project list
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function getList( Request $request )
    {
        $builder = $this->with( [ 'projectType', 'ProjectStatus', 'projectLocation' ] )
                        ->where( 'status', 'publish' );
        $data    = Search::search( $builder, 'project', $request, [], 3 );

        return $this->transformContent( $data );
    }

    /**
     * Get filter data project
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function getProjectFilter( Request $request )
    {
        $project       = $request->project;
        $location      = $request->location;
        $projectStatus = $request->projectStatus;

        $builder = $this->with( [ 'projectType', 'ProjectStatus', 'projectLocation' ] )
                        ->where( 'status', 'publish' );

        if( $project != 'all' ){
            $builder->where( 'slug_english', $project )
                    ->orWhere( 'slug_english', $project );
        }

        if( $location != 'all' ){
            $getLocationId = ProjectLocationModel::getLocationId( $location );
            $builder->where( 'project_location', $getLocationId->id );
        }

        if( $projectStatus == '1' ){
            $strStatus        = 'Ready  to move';
            $getProjectStatus = ProjectStatusModel::getStatusID( $strStatus );
            $builder->where( 'project_status', $getProjectStatus->id );
        }

        $data = Search::search( $builder, 'project', $request, [], 3 );

        return $this->transformContent( $data );
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
