<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
/**
 * Class SpaController
 * @package App\Http\Controllers
 */
class ThemeController extends Controller
{
    public function fullpage()
    {
        return view('theme.fullpage');
    }
}
