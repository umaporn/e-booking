<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleManagementFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sale_management_fileds = config( 'database_fields.sale_management' );

        foreach( $sale_management_fileds as $item_sale_management ){
            DB::table( 'directus_fields' )->insert( $item_sale_management );
        }
    }
}
