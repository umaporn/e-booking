<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_history', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'booking_system_id', 255 );
            $table->string( 'user_id', 255 );
            $table->string( 'project_id', 255 );
            $table->string( 'unit_id', 255 );
            $table->string( 'sale_id', 255 );
            $table->string( 'booking_price', 255 );
            $table->date( 'booking_date' );
            $table->string( 'booking_status', 255 );
            $table->string( 'booking_log', 255 );
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
        Schema::dropIfExists('booking_history');
        DB::table( 'directus_fields' )->where( 'collection', 'booking_history' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'booking_history' )->delete();
    }
}
