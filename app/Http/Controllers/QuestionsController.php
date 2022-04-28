<?php
/**
 * faq controller
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FaqModel;

class QuestionsController extends Controller
{
    private $Faq;

    public function __construct( FaqModel $faqModel )
    {
        $this->Faq = $faqModel;
    }

    /**
     * Show how to faq page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to fap page
     */
    public function index( Request $request )
    {
        $faq = $this->Faq->getList( $request );
        
        if( $request->ajax() ){
            return response()->json( [
                                         'data' => view( 'partials.faq.list', compact( 'faq' ) )->render(),
                                     ] );
        }

        return view( 'faq', compact( 'faq' ) );
    }
}
