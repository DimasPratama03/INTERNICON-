<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('username', 255)->unique();
            $table->string('email', 255)->unique();
            $table->string('phone_number', 15); // Ukuran lebih realistis
            $table->string('password', 255);
            $table->string('agency_name', 255);
            $table->string('major', 255);
            $table->date('internship_start_date');
            $table->date('internship_end_date');
            $table->enum('role', ['user', 'admin'])->default('user');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

