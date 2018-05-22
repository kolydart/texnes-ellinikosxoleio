<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5aff0fcc37727TestpaperUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('testpaper_user')) {
            Schema::create('testpaper_user', function (Blueprint $table) {
                $table->integer('testpaper_id')->unsigned()->nullable();
                $table->foreign('testpaper_id', 'fk_p_2976_2795_user_testp_5aff0fcc377e5')->references('id')->on('testpapers')->onDelete('cascade');
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', 'fk_p_2795_2976_testpaper__5aff0fcc37828')->references('id')->on('users')->onDelete('cascade');
                
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
        Schema::dropIfExists('testpaper_user');
    }
}
