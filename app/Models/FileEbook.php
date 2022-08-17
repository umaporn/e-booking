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

    public function getFileInfo( $id )
    {
        $result = FileEbook::where( 'id', $id )->first();

        return [ 'file_url' => env( 'BACKEND_URL_FILES' ) . $id, 'title' => $result->title, 'filename_disk' => $result->filename_disk, 'filename_download' => $result->filename_download ];

    }

}
