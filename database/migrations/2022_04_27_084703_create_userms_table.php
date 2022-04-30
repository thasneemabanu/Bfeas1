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
        Schema::create('userms', function (Blueprint $table) {
            $table->UnsignedBigInteger('User_ID');
            $table->string('User_Name');
            $table->date('date_of_birth');
            $table->UnsignedBigInteger('Department_ID');
            $table->String('Contact_No');
            $table->date('Joined_Date');
            $table->String('Job_Role');
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
        Schema::dropIfExists('userms');
    }
};
