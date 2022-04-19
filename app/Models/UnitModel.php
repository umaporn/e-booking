<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FileEbook;
use App\Libraries\Utility;

class UnitModel extends Model
{
    /** @var string Table name */
    protected $table = 'unit';

    public function getUpdate( $limit = 4 )
    {
        $result = $this->where( 'status', '!=', '' )
                       ->offset( 0 )
                       ->take( $limit )
                       ->orderBy( 'created_at', 'DESC' )
                       ->get();

        return $this->transformContent( $result );

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

        }

        return $content;
    }

}
