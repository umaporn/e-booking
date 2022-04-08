<?php
/**
 * faq controller
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class QuestionsController extends Controller
{
    /**
     * Show how to faq page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to fap page
     */
    public function index()
    {
        return view( 'faq' );
    }
}
