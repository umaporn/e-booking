<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingLayoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_layout', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'building_layout_name_english', 255 );
            $table->string( 'building_layout_name_thai', 255 );
            $table->string( 'building_layout_image', 255 );
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
        Schema::dropIfExists('building_layout');
        DB::table( 'directus_fields' )->where( 'collection', 'building_layout' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'building_layout' )->delete();
    }
}
