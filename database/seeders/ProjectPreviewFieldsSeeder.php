<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectPreviewFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_preview_fileds = config( 'database_fields.project_preview' );

        foreach( $project_preview_fileds as $item_project_preview ){
            DB::table( 'directus_fields' )->insert( $item_project_preview );
        }
    }
}
