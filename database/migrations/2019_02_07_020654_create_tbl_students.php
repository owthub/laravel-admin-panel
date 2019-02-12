<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStudents extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbl_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string("reg_no", 20)->nullable();
            $table->integer("gender_id")->nullable();
            $table->string("name", 255)->nullable();
            $table->string("email", 255)->unique();
            $table->integer("roll_no")->nullable();
            $table->string("phone_no", 50)->nullable();
            $table->text("address")->nullable();
            $table->string("profile_photo", 350)->nullable();
            $table->string("father_name", 255)->nullable();
            $table->string("mother_name", 255)->nullable();
            $table->integer("age")->default(1);
            $table->integer("status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tbl_students');
    }

}
