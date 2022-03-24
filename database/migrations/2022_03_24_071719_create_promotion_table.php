<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'name_english', 255 );
            $table->string( 'name_thai', 255 );
            $table->string( 'upload_image_desktop', 255 );
            $table->string( 'upload_image_mobile', 255 );
            $table->string( 'display_text_english', 255 );
            $table->string( 'display_text_thai', 255 );
            $table->string( 'alt_image_text_english', 255 );
            $table->string( 'alt_image_text_thai', 255 );
            $table->string( 'link_english', 255 );
            $table->string( 'link_thai', 255 );
            $table->datetime( 'publish_date' );
            $table->string( 'expired_status', 255 );
            $table->datetime( 'expired_date' );
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
        Schema::dropIfExists('promotion');
    }
}
