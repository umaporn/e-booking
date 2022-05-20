<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\Utility;

class FloorModel extends Model
{
    /** @var string Table name */
    protected $table = 'floor_layout';

    public function project()
    {
        return $this->belongsTo( 'App\Models\ProjectModel', 'floor_layout_id' );
    }

    public function unitLayout()
    {
        return $this->hasMany( 'App\Models\UnitLayoutModel', 'floor_layout_link' );
    }

    public function getFloor( $project )
    {
        $result = $this->with( [ 'unitLayout' ] )
                       ->where( 'building_layout_link', $project->building_layout_id )
                       ->get();

        return $this->transformContent( $result );
    }

    private function transformContent( $content )
    {
        foreach( $content as $list ){

            $list->setAttribute( 'floor_title', Utility::getLanguageFields( 'floor_layout_name', $list ) );
            $list->setAttribute( 'images', FileEbook::getFile( $list->floor_layout_image ) );

            if( isset( $list->unitLayout ) ){

                foreach( $list->unitLayout as $item ){
                    if( $item != '' ){
                        $item->setAttribute( 'unit_title', Utility::getLanguageFields( 'unit_layout_name', $item ) );
                        $item->setAttribute( 'images', FileEbook::getFile( $item->unit_layout_image ) );
                    }
                }
            }

        }

        return $content;
    }
}
