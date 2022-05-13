<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FloorLayoutFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $floor_layout_fileds = config( 'database_fields.floor_layout' );

        foreach( $floor_layout_fileds as $item_floor_layout ){
            DB::table( 'directus_fields' )->insert( $item_floor_layout );
        }
    }
}
