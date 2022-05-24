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
        Schema::create('holidays', function (Blueprint $table) {
           // $table->id();
          /*  $table->unsignedInteger('holiday_id');*/
            $table->date('holiday_fall_date');
            $table->string('holiday_description');
            $table->unsignedBigInteger('department_id');
            $table->timestamps();
        });

        Schema::table('holidays',function(Blueprint $table){
            $table->foreign('department_id')->references('id')->on('departments');
            $table->primary('holiday_fall_date');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holidays');
    }
};
