<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->text('description');
            //$table->string('colour')->nullable();
            $table->integer('amount');
            //$table->string('img')->nullable();
            $table->float('value')->nullable();
            // $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            // $table->foreign('category_id')->references('id')->on('categories')
            //  ->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_products');
    }
}
