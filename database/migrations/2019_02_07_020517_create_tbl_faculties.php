<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblFaculties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_faculties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("faculty_type_id")->nullable();
            $table->string("name",255)->nullable();
            $table->string("email",255)->unique();
            $table->text("designation")->nullable();
            $table->string("phone_no",50)->nullable();
            $table->integer("gender_id")->nullable();
            $table->string("profile_photo",300)->nullable();
            $table->text("address")->nullable();
            $table->integer("status")->default(1);
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
        Schema::dropIfExists('tbl_faculties');
    }
}
