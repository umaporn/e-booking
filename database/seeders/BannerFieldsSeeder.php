<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banner_fileds = config( 'database_fields.banner' );

        foreach( $banner_fileds as $item_banner ){
            DB::table( 'directus_fields' )->insert( $item_banner );
        }
    }
}
