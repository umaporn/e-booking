<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectPreviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_preview', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'name_english', 255 );
            $table->string( 'name_thai', 255 );
            $table->text( 'project_preview_type_english' );
            $table->text( 'project_preview_type_thai' );
            $table->string( 'description_english', 255 );
            $table->string( 'description_thai', 255 );
            $table->string( 'thumbnail', 255 );
            $table->datetime( 'publish_date' );
            $table->string( 'status', 255 );
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
    }
}
