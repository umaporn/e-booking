<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit_fileds = config( 'database_fields.unit' );

        foreach( $unit_fileds as $item_unit ){
            DB::table( 'directus_fields' )->insert( $item_unit );
        }
    }
}
