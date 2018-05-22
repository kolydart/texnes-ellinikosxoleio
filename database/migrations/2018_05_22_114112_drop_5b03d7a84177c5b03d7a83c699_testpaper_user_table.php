<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5b03d7a84177c5b03d7a83c699TestpaperUserTable extends Migration
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
            $table->foreign('testpaper_id', 'fk_2976_testpaper_user_id')->references('id')->on('testpapers');
                $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'fk_2795_user_testpaper_id')->references('id')->on('users');
                
                $table->timestamps();
                
            });
        }
    }
}
