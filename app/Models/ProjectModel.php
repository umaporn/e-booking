<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\Utility;
use App\Models\FileEbook;

class ProjectModel extends Model
{
    /** @var string Table name */
    protected $table = 'project_management';

    public function getUpdate( $limit = 5 )
    {
        $result = $this->where( 'status', '!=', '' )
                       ->orderBy( 'created_at', 'DESC' )
                       ->offset( 0 )->take( $limit )
                       ->get();

        return $this->transformContent( $result );
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

        }

        return $content;
    }
}
