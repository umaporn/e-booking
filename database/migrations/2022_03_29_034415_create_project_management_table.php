<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_management', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'project_name_english', 255 );
            $table->string( 'project_name_thai', 255 );
            $table->string( 'slug_english', 255 );
            $table->string( 'slug_thai', 255 );
            $table->string( 'thumbnail', 255 );
            $table->string( 'logo', 255 );
            $table->text( 'project_detail_english' );
            $table->text( 'project_detail_thai' );
            $table->string( 'price', 255 );
            $table->string( 'project_location_english', 255 );
            $table->string( 'project_location_thai', 255 );
            $table->string( 'project_location_google', 255 );
            $table->string( 'project_status', 255 );
            $table->string( 'project_type', 255 );
            $table->string( 'total_building_english', 255 );
            $table->string( 'total_building_thai', 255 );
            $table->string( 'total_floor_english', 255 );
            $table->string( 'total_floor_thai', 255 );
            $table->string( 'total_unit_english', 255 );
            $table->string( 'total_unit_thai', 255 );
            $table->string( 'total_project_area_english', 255 );
            $table->string( 'total_project_area_thai', 255 );
            $table->string( 'facility_detail_english', 255 );
            $table->string( 'facility_detail_thai', 255 );
            $table->string( 'project_unit_info', 255 );
            $table->string( 'payment_gateway', 255 );
            $table->string( 'project_gallery', 255 );
            $table->string( '360_video_link', 255 );
            $table->string( 'project_brochure', 255 );
            $table->string( 'project_brochure_online_link', 255 );
            $table->string( 'project_progress_code', 255 );
            $table->string( 'building_layout_id', 255 );
            $table->string( 'floor_layout_id', 255 );
            $table->string( 'unit_layout_id', 255 );
            $table->text( 'nearby_detail_english' );
            $table->text( 'nearby_detail_thai' );
            $table->string( 'youtube', 255 );
            $table->string( 'youtube_preview_text_english', 255 );
            $table->string( 'youtube_preview_text_thai', 255 );
            $table->string( 'youtube_title_text_english', 255 );
            $table->string( 'youtube_title_text_thai', 255 );
            $table->string( 'youtube_link_english', 255 );
            $table->string( 'youtube_link_thai', 255 );
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
        Schema::dropIfExists('project_management');
        DB::table( 'directus_fields' )->where( 'collection', 'project_management' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'project_management' )->delete();
    }
}
