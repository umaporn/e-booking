<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
/**
 * Class SpaController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function homepage()
    {
        return view('home');
    }
}
