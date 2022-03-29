<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitLayoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_layout', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'unit_layout_name_english', 255 );
            $table->string( 'unit_layout_name_thai', 255 );
            $table->string( 'unit_layout_image', 255 );
            $table->string( 'floor_layout_link', 255 );
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
        Schema::dropIfExists('unit_layout');
        DB::table( 'directus_fields' )->where( 'collection', 'unit_layout' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'unit_layout' )->delete();
    }
}
