<?php
/**
 * Promotion controller
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PromotionController extends Controller
{
    /**
     * Show how to promotion page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to promotion page
     */
    public function index()
    {
        return view( 'promotion' );
    }

    /**
     * Show how to promotion detail page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to promotion detail page
     */
    public function detail()
    {
        return view( 'promotion_detail' );
    }
}
