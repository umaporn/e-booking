<?php
/**
 * Projects controller
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Show how to project page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to project page
     */
    public function index()
    {
        return view( 'projects' );
    }

    /**
     * Show how to project detail page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to project detail page
     */
    public function detail()
    {
        return view( 'project_detail' );
    }
}
