<?php
/**
 * How to book controller
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HowtoBookController extends Controller
{
    /**
     * Show how to book page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to book page
     */
    public function index()
    {
        return view( 'how_to_book' );
    }
}
