<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTypeFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_type_fileds = config( 'database_fields.project_type' );

        foreach( $project_type_fileds as $item_project_type ){
            DB::table( 'directus_fields' )->insert( $item_project_type );
        }
    }
}
