<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'users', function( Blueprint $table ){
            $table->increments( 'id' );
            $table->string( 'firstname', 255 );
            $table->string( 'lastname', 255 );
            $table->string( 'mobile', 10 );
            $table->string( 'email', 254 );
            $table->string( 'password', 15 );
            $table->string( 'id_number', 15 );
            $table->date( 'date_of_birth' );
            $table->string( 'home_phone', 10 );
            $table->string( 'work_phone', 10 );
            $table->string( 'gender', 255 );
            $table->string( 'nationality', 255 );
            $table->text( 'address' );
            $table->string( 'sub_district', 255 );
            $table->string( 'district', 255 );
            $table->string( 'city',255 );
            $table->string( 'country', 255 );
            $table->string( 'postal_code', 10 );
            $table->text( 'contact_address' );
            $table->string( 'contact_sub_district', 255 );
            $table->string( 'contact_district', 255 );
            $table->string( 'contact_city',255 );
            $table->string( 'contact_country', 255 );
            $table->string( 'contact_postal_code', 10 );
            $table->string( 'status', 10 );
            $table->timestamp( 'updated_at' );
            $table->timestamp( 'created_at' )->useCurrent();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'users' );
    }
}
