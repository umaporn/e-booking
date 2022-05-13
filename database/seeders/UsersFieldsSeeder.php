<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_fileds = config( 'database_fields.users' );

        foreach( $users_fileds as $item_users ){
            DB::table( 'directus_fields' )->insert( $item_users );
        }
    }
}
