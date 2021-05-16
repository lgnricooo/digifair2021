<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('name_participant')->nullable();
            $table->string('position')->nullable();
            $table->string('school')->nullable();
            $table->string('district')->nullable();
            $table->string('name_coach')->nullable();
            $table->string('activities')->nullable();
            $table->string('par_image')->nullable();
            $table->string('co_image')->nullable();
            $table->string('status')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('registration');
    }
}
