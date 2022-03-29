<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectManagementFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_management_fileds = config( 'database_fields.project_management' );

        foreach( $project_management_fileds as $item_project_management ){
            DB::table( 'directus_fields' )->insert( $item_project_management );
        }
    }
}
