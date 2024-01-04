<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashierRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashier_records', function (Blueprint $table) {
            $table->id();
            $table->float('start_sales');
            $table->float('balance')->null();
            $table->float('end_sales')->null();
            $table->integer('start_by');
            $table->integer('end_by')->nullable();
            $table->date('date_record');
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
        Schema::dropIfExists('cashier_records');
    }
}
