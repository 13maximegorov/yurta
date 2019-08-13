<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('s_id');
            $table->json('titles'); 
            $table->string('slogan')->nullable();
            $table->string('caption')->nullable();
            $table->string('background', 255)->nullable();
            $table->json('slides')->nullable();
            $table->text('text')->nullable();
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
        Schema::dropIfExists('section_content');
    }
}
