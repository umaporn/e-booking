<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'unit_name_english', 255 );
            $table->string( 'unit_name_thai', 255 );
            $table->string( 'slug_english', 255 );
            $table->string( 'slug_thai', 255 );
            $table->string( 'unit_image', 255 );
            $table->string( 'project_id', 10 );
            $table->text( 'unit_detail_english', 255 );
            $table->text( 'unit_detail_thai', 255 );
            $table->string( 'booking_price', 255 );
            $table->string( 'Sold_out_status', 255 );
            $table->string( 'total_price', 255 );
            $table->string( 'price_per_sqm', 255 );
            $table->string( 'contract_payment', 255 );
            $table->string( 'down_payment', 255 );
            $table->string( 'transfer_payment', 255 );
            $table->string( 'total_price_After_discount', 255 );
            $table->string( '360_video_link', 255 );
            $table->string( 'unit_gallery', 255 );
            $table->string( 'file_upload', 255 );
            $table->string( 'unit_layout_upload_file', 255 );
            $table->string( 'floor_layout_upload_file', 255 );
            $table->string( 'building_layout_upload_file', 255 );
            $table->string( 'unit_no', 255 );
            $table->string( 'unit_floor_english', 255 );
            $table->string( 'unit_floor_thai', 255 );
            $table->string( 'unit_sqm_english', 255 );
            $table->string( 'unit_sqm_thai', 255 );
            $table->string( 'unit_bedroom', 255 );
            $table->string( 'unit_bathroom', 255 );
            $table->string( 'unit_facing_english', 255 );
            $table->string( 'unit_facing_thai', 255 );
            $table->string( 'select_unit_label', 255 );
            $table->datetime( 'publish_date' );
            $table->string( 'feature_property', 255 );
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
        Schema::dropIfExists('unit');
        DB::table( 'directus_fields' )->where( 'collection', 'unit' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'unit' )->delete();
    }
}
