<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotion_fileds = config( 'database_fields.promotion' );

        foreach( $promotion_fileds as $item_promotion ){
            DB::table( 'directus_fields' )->insert( $item_promotion );
        }
    }
}
