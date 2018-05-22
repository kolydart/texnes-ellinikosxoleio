<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5aff0fe76deeb5aff0fe76b680ArtTestpaperTable extends Migration
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
            $table->foreign('art_id', 'fk_p_2796_2976_testpaper__5aff0fcc0c3dc')->references('id')->on('arts');
                $table->integer('testpaper_id')->unsigned()->nullable();
            $table->foreign('testpaper_id', 'fk_p_2976_2796_art_testpa_5aff0fcc0cba5')->references('id')->on('testpapers');
                
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }
}
