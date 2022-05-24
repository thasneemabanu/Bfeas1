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
        Schema::create('users', function (Blueprint $table) {
        
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();   
            $table->string('phone')->nullable();
            $table->string('address_no')->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_city')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('working_department')->nullable();
            $table->date('employed_from_date')->nullable();
            $table->date('employed_to_date')->nullable();
           
        });
        Schema::table('users',function(Blueprint $table){
         $table->foreign('department_id')->references('id')->on('departments');
            
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};




$table->id();
$table->string('password');
$table->string('name')->nullable();
$table->string('email')->unique();
$table->timestamp('email_verified_at')->nullable();
$table->string('password');
$table->string('first_name')->nullable();
$table->string('middle_name')->nullable();
$table->string('last_name')->nullable(); 
$table->timestamp('email_verified_at')->nullable();
$table->string('last_name')->nullable();   
$table->string('phone')->nullable();
$table->string('address_no')->nullable();
$table->string('address_street')->nullable();
