<?php
/**
 * Unit controller
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Show how to unit page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to unit page
     */
    public function index()
    {
        return view( 'unit' );
    }

    /**
     * Show how to unit detail page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to unit detail page
     */
    public function detail()
    {
        return view( 'unit_detail' );
    }
}
