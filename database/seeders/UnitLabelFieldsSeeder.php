<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitLabelFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit_label_fileds = config( 'database_fields.unit_label' );

        foreach( $unit_label_fileds as $item_unit_label ){
            DB::table( 'directus_fields' )->insert( $item_unit_label );
        }
    }
}
