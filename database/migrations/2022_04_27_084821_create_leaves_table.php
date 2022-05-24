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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->datetime('requested_on');
            $table->unsignedBigInteger('recommender_id')->nullable();
            $table->datetime('recommended_on')->nullable();
            $table->unsignedBigInteger('approver_id')->nullable();
            $table->datetime('approved_on')->nullable();
            $table->unsignedBigInteger('department_id');
            $table->string('leave_type');
            $table->date('date');
            $table->string('leave_status');
            $table->LongText('leave_reason'); 
            $table->timestamps();
            
        });

        Schema::table('leaves',function(Blueprint $table){
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('employee_id')->references('id')->on('users');
            $table->unique(['employee_id','date']);
            $table->foreign('recommender_id')->references('id')->on('users');
            $table->foreign('approver_id')->references('id')->on('users');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
};
