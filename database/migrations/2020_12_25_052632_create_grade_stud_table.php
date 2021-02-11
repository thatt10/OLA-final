<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeStudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_stud', function (Blueprint $table) {
            $table->id();
            $table->string('subjCode');
            $table->string('subjName');
            $table->string('email');
            $table->integer('marks');
            $table->string('grade');
            $table->string('exam_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_stud');
    }
}
