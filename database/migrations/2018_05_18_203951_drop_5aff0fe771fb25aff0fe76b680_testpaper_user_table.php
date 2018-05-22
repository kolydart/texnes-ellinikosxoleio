<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5aff0fe771fb25aff0fe76b680TestpaperUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('testpaper_user');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('testpaper_user')) {
            Schema::create('testpaper_user', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('testpaper_id')->unsigned()->nullable();
            $table->foreign('testpaper_id', 'fk_p_2976_2795_user_testp_5aff0fcc1b624')->references('id')->on('testpapers');
                $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'fk_p_2795_2976_testpaper__5aff0fcc1adcf')->references('id')->on('users');
                
                $table->timestamps();
                
            });
        }
    }
}
