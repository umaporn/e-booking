<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectStatusFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_status_fileds = config( 'database_fields.project_status' );

        foreach( $project_status_fileds as $item_project_status ){
            DB::table( 'directus_fields' )->insert( $item_project_status );
        }
    }
}
