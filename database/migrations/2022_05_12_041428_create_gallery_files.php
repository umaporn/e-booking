<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'gallery_files', function( Blueprint $table ){
            $table->increments( 'id' );
            $table->integer( 'gallery_gallery_id' );
            $table->string( 'directus_files_id' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'gallery_files' );
        DB::table( 'directus_fields' )->where( 'collection', 'gallery_files' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'gallery_files' )->delete();

    }
}
