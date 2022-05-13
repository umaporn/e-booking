<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cart_fileds = config( 'database_fields.cart' );

        foreach( $cart_fileds as $item_cart ){
            DB::table( 'directus_fields' )->insert( $item_cart );
        }
    }
}
