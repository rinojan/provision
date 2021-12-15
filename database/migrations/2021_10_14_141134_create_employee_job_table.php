<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_job', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id'); //k
            $table->foreignId('job_id');
            $table->foreignId('job_category_id');
            $table->integer('working_duration');
            $table->integer('salary');
            $table->enum('type',['hours','day'])->nullable(); // default value 1
            $table->timestamps();

            $table->unique(['employee_id','job_id','type']);  //composite key
            
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('job_category_id')->references('id')->on('job_categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_job');
    }
}
