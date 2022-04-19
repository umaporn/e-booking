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
        if( !$id ){
            return null;
        }

        $file     = FileEbook::where( 'id', $id )->get();
        $filename = $file[0]->filename_disk;
        $filesUrl = env( 'BACKEND_URL_FILES' ) . $filename;

        return $filesUrl;
    }

}
