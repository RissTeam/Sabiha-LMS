<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_courses', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('time')->nullable();
            $table->string('save')->nullable();
            $table->string('likes')->nullable();
            $table->string('comment')->nullable();
            $table->string('title')->nullable();
            $table->string('desc')->nullable();
           

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
        Schema::dropIfExists('free_courses');
    }
}
