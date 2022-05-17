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
        Schema::create('roles', function (Blueprint $table) {
           
            $table->UnsignedBigInteger('Role_ID');  
            $table->String('Role_Name');   
            $table->UnSignedBigInteger('Department_ID');
            $table->UnSignedBigInteger('Employee_ID');
            $table->String('Employee_Name');    
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
        Schema::dropIfExists('roles');
    }
};
