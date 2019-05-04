<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('class_id')->unsigned();
            $table->bigInteger('students_id')->unsigned();
            $table->char('c1',3)->nullable();
            $table->char('c2',3)->nullable();
            $table->char('c3',3)->nullable();
            $table->char('c4',3)->nullable();
            $table->char('c5',3)->nullable();
            $table->char('exam',3)->nullable();
            $table->char('lecturer',3)->nullable();
            $table->char('final_point',3)->nullable();
            $table->char('grade',3)->nullable();
            $table->boolean('report')->default('0');
            $table->timestamps();
            $table->foreign('class_id')->references('id')->on('class')->onDelete('cascade');
            $table->foreign('students_id')->references('id')->on('students')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_grade');
    }
}
