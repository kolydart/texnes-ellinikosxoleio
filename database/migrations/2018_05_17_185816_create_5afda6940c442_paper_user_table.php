<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5afda6940c442PaperUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('paper_user')) {
            Schema::create('paper_user', function (Blueprint $table) {
                $table->integer('paper_id')->unsigned()->nullable();
                $table->foreign('paper_id', 'fk_p_2801_2795_user_paper_5afda6940c4fb')->references('id')->on('papers')->onDelete('cascade');
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', 'fk_p_2795_2801_paper_user_5afda6940c53b')->references('id')->on('users')->onDelete('cascade');
                
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
        Schema::dropIfExists('paper_user');
    }
}
