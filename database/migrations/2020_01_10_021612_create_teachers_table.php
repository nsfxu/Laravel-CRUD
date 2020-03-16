<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedInteger('class_id');            
            $table->unsignedInteger('discipline_id');            

            $table->string('name', 150);
            $table->integer('age');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('discipline_id')->references('id')->on('disciplines');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher');
    }
}
