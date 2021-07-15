<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
           /*  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); */
            $table->string('surname',30);
            $table->date('date_of_birth');
            $table->string('CF',20);
            $table->string('address');
            $table->string('city',30);
            $table->string('phone_number',15);
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
        Schema::dropIfExists('patients');
    }
}
