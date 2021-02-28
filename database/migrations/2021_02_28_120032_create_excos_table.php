<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id')->unsigned();
            $table->string('exco_name');
            $table->string('exco_email')->unique();
            $table->string('position');
            $table->enum('bosses', ['head', 'assist_head', 'exco'])->default('exco');
            $table->string('twitter_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('exco_image')->default('https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png');
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
        Schema::dropIfExists('excos');
    }
}
