<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Libraries\Utility;
use App\Libraries\Search;
use App\Models\FileEbook;
use Illuminate\Pagination\LengthAwarePaginator;

class FaqModel extends Model
{
    /** @var string Table name */
    protected $table = 'faq';

    public function getList( Request $request )
    {
        $builder = $this->where( 'status', 'publish' )
                        ->orderBy( 'created_at', 'DESC' );
        $result  = Search::search( $builder, 'faq', $request );

        return $this->transformContent( $result );
    }

    /**
     * Tranfrom content data
     *
     * @param LengthAwarePaginator $content
     *
     * @return LengthAwarePaginator
     */
    private function transformContent( LengthAwarePaginator $content )
    {
        foreach( $content as $list ){
            $list->setAttribute( 'q', Utility::getLanguageFields( 'question_text', $list ) );
            $list->setAttribute( 'a', Utility::getLanguageFields( 'answer_text', $list ) );
        }

        return $content;
    }

}
