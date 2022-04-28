<?php
/**
 * Promotion controller
 */

namespace App\Http\Controllers;

use App\Models\PromotionModels;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    private $promotion;

    public function __construct( PromotionModels $promotionModels )
    {
        $this->promotion = $promotionModels;
    }

    /**
     * Show how to promotion page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to promotion page
     */
    public function index( Request $request )
    {
        $promotion = $this->promotion->getPromotionList( $request );

        if( $request->ajax() ){
            return response()->json( [
                                         'data' => view( 'partials.promotion.list', compact( 'promotion' ) )->render(),
                                     ] );
        }

        return view( 'promotion', compact( 'promotion' ) );
    }

    /**
     * Show how to promotion detail page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to promotion detail page
     */
    public function detail( Request $request )
    {
        $single = $this->promotion->getSingle( $request );

        return view( 'promotion_detail', compact( 'single' ) );
    }
}
