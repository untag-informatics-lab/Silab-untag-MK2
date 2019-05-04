<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('course_id')->unsigned();
            $table->bigInteger('laboratory_asistants_id')->unsigned();
            $table->char('name',30);
            $table->enum('semester',['ganjil','genap']);
            $table->char('academic_year',5);
            $table->timestamps();
            $table->foreign('course_id')->references('id')->on('course')->onDelete('restrict');
            $table->foreign('laboratory_asistants_id')->references('id')->on('laboratory_asistants')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_class');
    }
}
