<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->text('remarks');
            $table->enum('type',['STOCK','UPDATES'])->default('STOCK');
            $table->integer('stock_in')->nullable();
            $table->integer('stock_out')->nullable();
            $table->date('expiration')->nullable();
            $table->integer('expiration_qty')->nullable();
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
        Schema::dropIfExists('product_logs');
    }
}
