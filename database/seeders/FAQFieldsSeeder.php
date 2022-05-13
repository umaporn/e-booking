<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FAQFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faq_fileds = config( 'database_fields.faq' );

        foreach( $faq_fileds as $item_faq ){
            DB::table( 'directus_fields' )->insert( $item_faq );
        }
    }
}
