<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            /* $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); */

            $table->string('surname',30);
            $table->date('date_of_birth');
            $table->string('CF',20);
            $table->string('address');
            $table->string('city',30);
            $table->string('phone_number',15);
            $table->string('cv_url');
            $table->string('img_url');
            $table->string('sponsor_level',1);
            /* SPECIALIZZAZIONE MANY TO MANY */
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
        Schema::dropIfExists('doctors');
    }
}
