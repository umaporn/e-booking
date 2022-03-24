<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitLabelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_label', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'name_english', 255 );
            $table->string( 'name_thai', 255 );
            $table->string( 'color', 255 );
            $table->string( 'font_color', 255 );
            $table->string( 'icon', 255 );
            $table->datetime( 'publish_date' );
            $table->string( 'status', 255 );
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
        Schema::dropIfExists('unit_label');
    }
}
