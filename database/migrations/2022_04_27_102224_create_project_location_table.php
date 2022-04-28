<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_location', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'location_name_english', 255 );
            $table->string( 'location_name_thai', 255 );
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
        Schema::dropIfExists('project_preview');
        DB::table( 'directus_fields' )->where( 'collection', 'project_preview' )->delete();
        DB::table( 'directus_relations' )->delete();
    }
}
