<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingHistoryFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booking_history_fileds = config( 'database_fields.booking_history' );

        foreach( $booking_history_fileds as $item_booking_history ){
            DB::table( 'directus_fields' )->insert( $item_booking_history );
        }
    }
}
