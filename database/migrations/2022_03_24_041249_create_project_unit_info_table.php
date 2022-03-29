<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectUnitInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_unit_info', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->string( 'unit_type_name_english', 255 );
            $table->string( 'unit_type_name_thai', 255 );
            $table->string( 'bedroom', 255 );
            $table->string( 'bathroom', 255 );
            $table->string( 'area', 255 );
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
        Schema::dropIfExists('project_unit_info');
        DB::table( 'directus_fields' )->where( 'collection', 'project_unit_info' )->delete();
        DB::table( 'directus_relations' )->where( 'many_collection', 'project_unit_info' )->delete();
    }
}
