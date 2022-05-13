<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_management', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'sale_id', 255 );
            $table->string( 'name_english', 255 );
            $table->string( 'lastname_english', 255 );
            $table->string( 'name_thai', 255 );
            $table->string( 'lastname_thai', 255 );
            $table->string( 'project_id', 10 );
            $table->string( 'email', 10 );
            $table->string( 'cc_email', 10 );
            $table->date( 'date' );
            $table->string( 'sales_status', 255 );
            $table->timestamp( 'updated_at' )->nullable();
            $table->timestamp( 'created_at' )->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_management');
        DB::table( 'directus_fields' )->where( 'collection', 'sale_management' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'sale_management' )->delete();
    }
}
