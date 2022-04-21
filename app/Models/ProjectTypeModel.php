<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\Utility;
use App\Models\FileEbook;

class ProjectTypeModel extends Model
{
    /** @var string Table name */
    protected $table = 'project_type';

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
            // $list->setAttribute( 'images', FileEbook::getFile( $list->icon ) );
        }

        return $content;
    }
}
