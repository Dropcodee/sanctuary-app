<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('webmail')->unique();
            $table->string('gmail')->unique();
            $table->boolean('email_verified')->default(0);
            $table->string('profile_image')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->string('hall_residence');
            $table->string('room_number');
            $table->integer('reg_number');
            $table->date('date_of_birth');
            $table->enum('special_level', ['final_yr', 'it_yr']);
            $table->integer('level')->default(100);
            $table->foreign('department_id')->references('id')->on('departments')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
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
        Schema::dropIfExists('members');
    }
}
