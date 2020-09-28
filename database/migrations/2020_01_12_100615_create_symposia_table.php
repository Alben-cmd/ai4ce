<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSymposiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symposia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_of_paper');
            $table->string('author');
            $table->string('cathour');
            $table->string('affiliation');
            $table->string('email_cauthor');
            $table->string('phone_cauthor');
            $table->string('abstract');
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
        Schema::dropIfExists('symposia');
    }
}
