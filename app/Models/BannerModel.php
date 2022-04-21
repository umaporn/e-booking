<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\Utility;
use App\Models\FileEbook;

class BannerModel extends Model
{
    /** @var string Table name */
    protected $table = 'banner';

    /**
     * Get Banner for home page
     *
     * @return mixed
     */
    public function getBanner()
    {
        $result = $this->whereRaw( "case expired_status 
        when 'yes'  then  DATE_FORMAT(expired_date,'%Y-%m-%d') >= '" . date( 'Y-m-d' ) . "'
        else  DATE_FORMAT(publish_date,'%Y-%m-%d') <= '" . date( 'Y-m-d' ) . "' end" )
                       ->where( 'banner_status', 'publish' )
                       ->get();

        return $this->transformContent( $result );
    }

    /**
     * Transform Banner data
     *
     * @param $content
     *
     * @return mixed
     */
    private function transformContent( $content )
    {

        foreach( $content as $list ){
            $list->setAttribute( 'name', Utility::getLanguageFields( 'banner_name', $list ) );
            $list->setAttribute( 'title', Utility::getLanguageFields( 'display_text', $list ) );
            $list->setAttribute( 'alt', Utility::getLanguageFields( 'alt_image_text', $list ) );
            $list->setAttribute( 'url', Utility::getLanguageFields( 'link', $list ) );
            $list->setAttribute( 'images', FileEbook::getFile( $list->image_desktop ) );
            $list->setAttribute( 'images-m', FileEbook::getFile( $list->image_mobile ) );

        }

        return $content;
    }
}
