<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relation_fields = config( 'database_relation' );

        foreach( $relation_fields as $relation ){
            DB::table( 'directus_relations' )->insert( $relation );
        }
    }
}
