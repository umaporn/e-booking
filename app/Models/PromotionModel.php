<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Libraries\Search;
use App\Libraries\Utility;
use Illuminate\Pagination\LengthAwarePaginator;

class PromotionModel extends Model
{
    /** @var string Table name */
    protected $table = 'promotion';

    /**
     * Get promotion list
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function getPromotionList( Request $request )
    {
        $builder = $this->where( 'status', 'publish' );
        $result  = Search::search( $builder, 'promotion', $request );

        return $this->transformContent( $result );

    }

    public function getSingle( Request $request )
    {
        $promotion = $this->where( 'id', $request->id )
                          ->where( 'status', 'publish' )
                          ->first();

        if( $promotion ){
            $promotion->setAttribute( 'promotion_title', Utility::getLanguageFields( 'name', $promotion ) );
            $promotion->setAttribute( 'promotion_detail', Utility::getLanguageFields( 'display_text', $promotion ) );
            $promotion->setAttribute( 'image_title', Utility::getLanguageFields( 'alt_image_text', $promotion ) );
            $promotion->setAttribute( 'url', Utility::getLanguageFields( 'link', $promotion ) );
            $promotion->setAttribute( 'images', FileEbook::getFile( $promotion->upload_image_desktop ) );
        }

        return $promotion;

    }

    /**
     * Tranfrom content data
     *
     * @param LengthAwarePaginator $content
     *
     * @return LengthAwarePaginator
     */
    private function transformContent( LengthAwarePaginator $content )
    {
        foreach( $content as $list ){
            $list->setAttribute( 'promotion_title', Utility::getLanguageFields( 'name', $list ) );
            $list->setAttribute( 'promotion_detail', Utility::getLanguageFields( 'display_text', $list ) );
            $list->setAttribute( 'image_title', Utility::getLanguageFields( 'alt_image_text', $list ) );
            $list->setAttribute( 'url', Utility::getLanguageFields( 'link', $list ) );
            $list->setAttribute( 'images', FileEbook::getFile( $list->upload_image_desktop ) );
            $list->setAttribute( 'images_m', FileEbook::getFile( $list->upload_image_mobile ) );
            $list->setAttribute( 'promotion_exp_date', date( 'd', strtotime( $list->expired_date ) ) );
            $list->setAttribute( 'promotion_exp_month', date( 'M Y', strtotime( $list->expired_date ) ) );
        }

        return $content;
    }

}
