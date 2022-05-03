<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileEbook extends Model
{
    /** @var string Table name */
    protected $table = 'directus_files';

    /**
     * Get File
     *
     * @param $id
     *
     * @return string
     */
    public static function getFile( $id )
    {

        if( $id ){
            $filesUrl = env( 'BACKEND_URL_FILES' ) . $id;
        } else {
            $filesUrl = null;
        }

        return $filesUrl;
    }

}
