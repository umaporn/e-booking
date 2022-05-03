<?php
/**
 * How to book controller
 */

namespace App\Http\Controllers;

use App\Models\HowToBookModel;

class HowtoBookController extends Controller
{
    private $howToBook;

    public function __construct( HowToBookModel $howToBookModel )
    {
        $this->howToBook = $howToBookModel;
    }

    /**
     * Show how to book page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View how to book page
     */
    public function index()
    {
        $howToBook = $this->howToBook->getLast();

        return view( 'how_to_book', compact( 'howToBook' ) );
    }
}
