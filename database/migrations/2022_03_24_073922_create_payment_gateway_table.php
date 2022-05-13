<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentGatewayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_gateway', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'name', 255 );
            $table->string( 'public_key', 255 );
            $table->string( 'secret_key', 255 );
            $table->string( 'company_id', 255 );
            $table->string( 't_id', 255 );
            $table->string( 'm_id', 255 );
            $table->string( 'currency', 255 );
            $table->string( 'test_amount_pay', 255 );
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
        Schema::dropIfExists('payment_gateway');
        DB::table( 'directus_fields' )->where( 'collection', 'payment_gateway' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'payment_gateway' )->delete();
    }
}
