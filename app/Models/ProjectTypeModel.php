<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\Utility;

class ProjectTypeModel extends Model
{
    /** @var string Table name */
    protected $table = 'project_type';

    public function project()
    {
        return $this->hasMany( 'App\Models\ProjectModel', 'project_type' );
    }

    /**
     * Get project type list
     *
     * @return mixed
     */
    public function getTypeList()
    {
        $result = $this->where( 'status', 'publish' )->get();

        return $this->transformContent( $result );
    }

    /**
     * Transform Type data
     *
     * @param $content
     *
     * @return mixed
     */
    private function transformContent( $content )
    {
        foreach( $content as $list ){
            $list->setAttribute( 'title', Utility::getLanguageFields( 'name', $list ) );
        }

        return $content;
    }

    /**
     * Get id for search box
     *
     * @param string $type
     *
     * @return mixed
     */
    public static function getTypeId( string $type )
    {
        return ProjectTypeModel::where( 'name_english', $type )
                               ->orWhere( 'name_thai', $type )->first( 'id' );
    }
}
