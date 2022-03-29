<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'name_english', 255 );
            $table->string( 'name_thai', 255 );
            $table->integer( 'gallery_image' );
            $table->string( 'status', 255 );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('gallery');
        DB::table( 'directus_fields' )->where( 'collection', 'gallery' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'gallery' )->delete();
    }
}
