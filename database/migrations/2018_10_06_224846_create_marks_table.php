<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('my_class_id');
            $table->unsignedInteger('section_id');
            $table->unsignedInteger('exam_id');
            $table->double('t1', 8, 2)->nullable();
            $table->double('t2', 8, 2)->nullable();
            $table->double('t3', 8, 2)->nullable();
            $table->double('t4', 8, 2)->nullable();
            $table->double('tca', 8, 2)->nullable();
            $table->double('exm', 8, 2)->nullable();
            $table->double('tex1', 8, 2)->nullable();
            $table->double('tex2', 8, 2)->nullable();
            $table->double('tex3', 8, 2)->nullable();
            $table->tinyInteger('sub_pos')->nullable();
            $table->integer('cum')->nullable();
            $table->string('cum_ave')->nullable();
            $table->unsignedInteger('grade_id')->nullable();
            $table->string('year');
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
        Schema::dropIfExists('marks');
    }
}
