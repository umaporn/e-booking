<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\Utility;
use App\Models\FileEbook;

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

    public function getUpdate( $limit = 5 )
    {
        $result = $this->with( [ 'projectType', 'ProjectStatus' ] )
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
        $projectInfo = ProjectModel::with( [ 'projectType', 'ProjectStatus' ] )
                                   ->where( 'id', $project_id )
                                   ->where( 'status', 'publish' )
                                   ->first();
        if( $projectInfo ){
            $projectInfo->setAttribute( 'project_type_title', Utility::getLanguageFields( 'name', $projectInfo->projectType ) );
            $projectInfo->setAttribute( 'project_status_title', Utility::getLanguageFields( 'name', $projectInfo->ProjectStatus ) );
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
        $result = $this->with( [ 'projectType', 'ProjectStatus' ] )
                       ->where( 'status', 'publish' )
                       ->where( 'feature_property', 'yes' )
                       ->orderby( 'publish_date', 'DESC' )
                       ->get();

        return $this->transformContent( $result );
    }

    /**
     * Get project type and location for search
     *
     * @return mixed
     */
    public function getSearchOption()
    {
        $searchOption = $this->where( 'status', 'publish' )
                             ->get( [ 'project_location_english', 'project_location_thai', 'project_name_english', 'project_name_thai' ] );

        foreach( $searchOption as $list ){
            $list->setAttribute( 'project_title', Utility::getLanguageFields( 'project_name', $list ) );
            $list->setAttribute( 'location', Utility::getLanguageFields( 'project_location', $list ) );
        }

        return $searchOption;
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
            $list->setAttribute( 'project_location', Utility::getLanguageFields( 'project_location', $list ) );
            // $list->setAttribute( 'project_thumbnail', FileEbook::getFile( $list->thumbnail ) );

            if( isset( $list->ProjectStatus ) ){
                $list->setAttribute( 'project_status_title', Utility::getLanguageFields( 'name', $list->ProjectStatus ) );
            }

            if( isset( $list->projectType ) ){
                $list->setAttribute( 'project_type_title', Utility::getLanguageFields( 'name', $list->projectType ) );
            }
        }

        return $content;
    }
}
