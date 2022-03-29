<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentGatewayFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment_gateway_fileds = config( 'database_fields.payment_gateway' );

        foreach( $payment_gateway_fileds as $item_payment_gateway ){
            DB::table( 'directus_fields' )->insert( $item_payment_gateway );
        }
    }
}
