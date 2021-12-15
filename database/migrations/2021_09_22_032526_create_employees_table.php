<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->enum('title',['Mr','Mrs','Miss']);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('nic');
            $table->string('mobileno'); // email deleted bcoz user?
            $table->enum('gender',['male','female']);
            $table->foreignId('province_id');
            $table->foreignId('district_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
