<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HowToBookingFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $how_to_booking_fileds = config( 'database_fields.how_to_booking' );

        foreach( $how_to_booking_fileds as $item_how_to_booking ){
            DB::table( 'directus_fields' )->insert( $item_how_to_booking );
        }
    }
}
