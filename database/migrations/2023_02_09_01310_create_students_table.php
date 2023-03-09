<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name', 100);
            $table->char('nipd', 10);
            $table->enum('gender', ['L', 'P']);
            $table->char('nisn', 20);
            $table->string('birthplace', 35);
            $table->date('birthdate');
            $table->char('nik', 16);
            $table->string('religion', 20);
            $table->text('address');
            $table->char('rt', 8)->nullable();
            $table->char('rw', 8)->nullable();
            $table->string('hamlet', 30)->nullable();
            $table->string('urban_village', 60)->nullable();
            $table->string('sub_district', 45)->nullable();
            $table->char('postal_code', 12)->nullable();
            $table->string('type_stay', 30)->nullable();
            $table->string('transport', 40)->nullable();
            $table->string('telp', 14)->nullable();
            $table->char('hp', 14)->nullable();
            $table->string('email', 50)->unique();
            $table->string('skhun', 30)->nullable();
            $table->enum('receiver_kps', ['Ya', 'Tidak'])->nullable();
            $table->string('no_kps', 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
