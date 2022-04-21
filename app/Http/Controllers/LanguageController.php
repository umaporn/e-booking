<?php
/**
 * Language controller
 */

namespace App\Http\Controllers;

use App\Libraries\Utility;
use Illuminate\Http\Request;

/**
 * Language Controller
 * @package App\Http\Controllers
 */
class LanguageController extends Controller
{
    /**
     * change language
     *
     * @param Request $request
     * @param string  $languageCode
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function changeLanguage( Request $request, string $languageCode )
    {

        $redirectedUrl = Utility::getRedirectedUrl( $languageCode );

        $request->session()->put( 'url.intended', $redirectedUrl );

        return redirect( $redirectedUrl );
    }
}
