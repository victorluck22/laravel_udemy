<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdjustProductBranchOffice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_offices', function(Blueprint $table){
            $table->id();
            $table->string('branch_office');
            $table->timestamps();
        });

        Schema::create('products_branch_office', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->foreignId('branch_office_id')->constrained('branch_offices');
            $table->foreignId('product_id')->constrained('products');
            $table->decimal('sell_value', 8, 2);
            $table->integer('inventory_min')->default(1);
            $table->integer('inventory_max')->default(1);
        });

        Schema::table('products', function(Blueprint $table){
            $table->dropColumn('value_sell', 'inventory_max', 'inventory_min');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table){
            $table->float('value_sell', 8,2)->default(0.01);
            $table->integer('inventory_min')->default(1);
            $table->integer('inventory_max')->default(1);
        });

        Schema::dropIfExists('products_branch_office');

        Schema::dropIfExists('branch_offices');
    }
}
