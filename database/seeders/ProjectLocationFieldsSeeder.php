<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectLocationFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_location_fileds = config( 'database_fields.project_location' );

        foreach( $project_location_fileds as $item_project_location ){
            DB::table( 'directus_fields' )->insert( $item_project_location );
        }
    }
}
