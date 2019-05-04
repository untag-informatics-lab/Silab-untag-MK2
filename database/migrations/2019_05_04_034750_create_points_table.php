<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
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
            $table->bigInteger('student_id')->unsigned();
            $table->float('c1')->nullable();
            $table->float('c2')->nullable();
            $table->float('c3')->nullable();
            $table->float('c4')->nullable();
            $table->float('c5')->nullable();
            $table->float('exam')->nullable();
            $table->float('lecturer')->nullable();
            $table->float('final_point')->nullable();
            $table->char('grade',3)->nullable();
            $table->boolean('report')->default(0);
            $table->timestamps();
            
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('points');
    }
}
