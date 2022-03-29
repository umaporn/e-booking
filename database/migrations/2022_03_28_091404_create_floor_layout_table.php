<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloorLayoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floor_layout', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'floor_layout_name_english', 255 );
            $table->string( 'floor_layout_name_thai', 255 );
            $table->string( 'floor_layout_image', 255 );
            $table->string( 'building_layout_link', 255 );
            $table->timestamp( 'updated_at' );
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
        Schema::dropIfExists('floor_layout');
        DB::table( 'directus_fields' )->where( 'collection', 'floor_layout' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'floor_layout' )->delete();
    }
}
