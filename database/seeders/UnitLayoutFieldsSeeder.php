<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitLayoutFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit_layout_fileds = config( 'database_fields.unit_layout' );

        foreach( $unit_layout_fileds as $item_unit_layout ){
            DB::table( 'directus_fields' )->insert( $item_unit_layout );
        }
    }
}
