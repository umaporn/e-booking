<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Libraries\Utility;

class HowToBookModel extends Model
{
    /** @var string Table name */
    protected $table = 'how_to_booking';

    public function getLast()
    {
        $howTo = $this->where( 'status', 'publish' )
                      ->orderBy( 'created_at', 'DESC' )
                      ->first();

        if( $howTo ){
            $howTo->setAttribute( 'title', Utility::getLanguageFields( 'name', $howTo ) );
            $howTo->setAttribute( 'description', Utility::getLanguageFields( 'display_text', $howTo ) );
        }

        return $howTo;
    }
}
