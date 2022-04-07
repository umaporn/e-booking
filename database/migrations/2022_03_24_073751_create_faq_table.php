<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'name_english', 255 );
            $table->string( 'name_thai', 255 );
            $table->text( 'question_text_english', 255 );
            $table->text( 'question_text_thai', 255 );
            $table->text( 'answer_text_english', 255 );
            $table->text( 'answer_text_thai', 255 );
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
        Schema::dropIfExists('faq');
        DB::table( 'directus_fields' )->where( 'collection', 'faq' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'faq' )->delete();
    }
}
