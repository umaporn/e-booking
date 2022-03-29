<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery_fileds = config( 'database_fields.gallery' );

        foreach( $gallery_fileds as $item_gallery ){
            DB::table( 'directus_fields' )->insert( $item_gallery );
        }
    }
}
