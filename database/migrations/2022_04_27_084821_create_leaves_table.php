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
            $table->UnSignedInteger('Leave_Request_ID');
            $table->UnSignedInteger('User_ID');
            $table->String('Leave_Type');
            $table->String('No_of_Days_Applied');
            $table->Date('Leaves_From');
            $table->Date('Leaves_To');
            $table->String('Leave_Status');
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
        Schema::dropIfExists('leaves');
    }
};
