<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\Utility;
use App\Models\FileEbook;

class PreviewModel extends Model
{
    /** @var string Table name */
    protected $table = 'project_preview';

    public function getUpdate( $limit = 4 )
    {
        $result = $this->where( 'status', '=', 'publish' )
                       ->whereRaw( "DATE_FORMAT(publish_date,'%Y-%m-%d') <='" . date( 'Y-m-d' ) . "'" )
                       ->orderBy( 'created_at', 'DESC' )
                       ->offset( 0 )->take( $limit )
                       ->get();

        return $this->transformContent( $result );
    }

    /**
     * Transform Preview data
     *
     * @param $content
     *
     * @return mixed
     */
    private function transformContent( $content )
    {

        foreach( $content as $list ){

            $list->setAttribute( 'preview_title', iconv_substr( strip_tags( Utility::getLanguageFields( 'name', $list ) ), 0, 100, 'UTF-8' ) );
            $list->setAttribute( 'preview_type', Utility::getLanguageFields( 'project_preview_type', $list ) );
            $list->setAttribute( 'description', iconv_substr( strip_tags( Utility::getLanguageFields( 'description', $list ) ), 0, 250, 'UTF-8' ) );
            $list->setAttribute( 'preview_thumbnail', FileEbook::getFile( $list->thumbnail ) );

        }

        return $content;
    }

}
