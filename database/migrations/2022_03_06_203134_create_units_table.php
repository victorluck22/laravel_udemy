<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unit', 5);
            $table->string('description', 30);
            $table->timestamps();
        });

        Schema::table('products', function(Blueprint $table){
            $table->foreignId('unit_id')->constrained('units');
        });

        Schema::table('product_details', function(Blueprint $table){
            $table->foreignId('unit_id')->constrained('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_details', function(Blueprint $table){
            //$table->dropForeign('product_details_unit_id_foreign');

            $table->dropConstrainedForeignId('unit_id');
        });

        Schema::table('products', function(Blueprint $table){
            //$table->dropForeign('products_unit_id_foreign');
            $table->dropConstrainedForeignId('unit_id');
        });

        Schema::dropIfExists('units');


    }
}
