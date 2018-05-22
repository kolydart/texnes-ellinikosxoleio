<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5b03d7a83e1ce5b03d7a83c699ArtTestpaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('art_testpaper');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('art_testpaper')) {
            Schema::create('art_testpaper', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('art_id')->unsigned()->nullable();
            $table->foreign('art_id', 'fk_2796_art_testpaper_id')->references('id')->on('arts');
                $table->integer('testpaper_id')->unsigned()->nullable();
            $table->foreign('testpaper_id', 'fk_2976_testpaper_art_id')->references('id')->on('testpapers');
                
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }
}
