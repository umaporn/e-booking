<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingLayoutFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $building_layout_fileds = config( 'database_fields.building_layout' );

        foreach( $building_layout_fileds as $item_building_layout ){
            DB::table( 'directus_fields' )->insert( $item_building_layout );
        }
    }
}
