<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryModel extends Model
{
    /** @var string Table name */
    protected $table = 'gallery_files';

    /**
     * Get gallery images list
     *
     * @param $gallery
     *
     * @return array|null
     */
    public static function images( $gallery )
    {
        $imagesList = null;
        if( $gallery != null ){
            $images = GalleryModel::where( 'gallery_gallery_id', $gallery )->orderby( 'id', 'desc' )->get();
            if( $images != null ){
                foreach( $images as $item ){
                    $imagesList[] = FileEbook::getFile( $item['directus_files_id'] );
                }
            }
        }

        return $imagesList;
    }

    /**
     * Gallery image and files info
     *
     * @param $gallery
     *
     * @return array|null
     */
    public static function gallery( $gallery )
    {
        $imagesList = null;
        if( $gallery != null ){
            $images = GalleryModel::where( 'gallery_gallery_id', $gallery )->orderby( 'id', 'desc' )->get();

            if( $images != null ){
                foreach( $images as $item ){
                    $imagesList[] = FileEbook::getFileInfo( $item['directus_files_id'] );
                }
            }
        }

        return $imagesList;
    }

}
