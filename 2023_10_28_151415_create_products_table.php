<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('category')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price')->nullable();
            $table->integer('stock_in')->nullable();
            $table->integer('stock_out')->nullable();
            $table->string('picture');
            $table->enum('type',['INGREDIENT','MENU'])->default('INGREDIENT');
            $table->enum('status',['ACTIVE','INACTIVE'])->default('ACTIVE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
