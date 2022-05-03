<?php
/**
 * Promotion controller
 */

namespace App\Http\Controllers;

use App\Models\PromotionModel;
use Illuminate\Http\Request;
use App\Libraries\Utility;

class PromotionController extends Controller
{
    private $promotion;
    Private $access_token;

    public function __construct( PromotionModel $promotionModels )
    {
        $this->promotion    = $promotionModels;
        $this->access_token = Utility::getAccessToken();
    }

    /**
     * Show how to promotion page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to promotion page
     */
    public function index( Request $request )
    {
        $token     = isset( $this->access_token['data']['access_token'] ) ? $this->access_token['data']['access_token'] : '';
        $promotion = $this->promotion->getPromotionList( $request );

        if( $request->ajax() ){
            return response()->json( [
                                         'data' => view( 'partials.promotion.list', compact( 'promotion', 'token' ) )->render(),
                                     ] );
        }

        return view( 'promotion', compact( 'promotion', 'token' ) );
    }

    /**
     * Show how to promotion detail page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to promotion detail page
     */
    public function detail( Request $request )
    {
        $token  = isset( $this->access_token['data']['access_token'] ) ? $this->access_token['data']['access_token'] : '';
        $single = $this->promotion->getSingle( $request );

        return view( 'promotion_detail', compact( 'single', 'token' ) );
    }
}
