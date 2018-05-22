<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5aff0fcc34bf5ArtTestpaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('art_testpaper')) {
            Schema::create('art_testpaper', function (Blueprint $table) {
                $table->integer('art_id')->unsigned()->nullable();
                $table->foreign('art_id', 'fk_p_2796_2976_testpaper__5aff0fcc34cd2')->references('id')->on('arts')->onDelete('cascade');
                $table->integer('testpaper_id')->unsigned()->nullable();
                $table->foreign('testpaper_id', 'fk_p_2976_2796_art_testpa_5aff0fcc34d1e')->references('id')->on('testpapers')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('art_testpaper');
    }
}
