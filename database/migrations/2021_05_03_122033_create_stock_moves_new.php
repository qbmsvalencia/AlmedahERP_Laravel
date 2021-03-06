<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockMovesNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('stock_moves');
        Schema::create('stock_moves', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_id')->unique();
            $table->string('stock_moves_type');
            $table->string('mat_ordered_id');
            $table->foreign('mat_ordered_id')->references('mat_ordered_id')->on('materials_ordered');
            $table->date('move_date');
            $table->string('employee_id');
            $table->foreign('employee_id')->references('employee_id')->on('env_employees');
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
        Schema::dropIfExists('stock_moves_new');
    }
}
