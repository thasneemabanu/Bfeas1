<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->UnsignedBigInteger('employee_id');
            $table->UnsignedBigInteger('department_id');
            $table->date('date');
            $table->time('time_of_entry');
            $table->time('time_of_exit');
            $table->timestamps();
        });

        Schema::table('attendances',function(Blueprint $table){
            $table->foreign('employee_id')->references('id')->on('users');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unique(['employee_id','date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
};
