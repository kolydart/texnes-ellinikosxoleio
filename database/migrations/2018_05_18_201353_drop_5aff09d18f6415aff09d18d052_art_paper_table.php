<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5aff09d18f6415aff09d18d052ArtPaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('art_paper');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('art_paper')) {
            Schema::create('art_paper', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('art_id')->unsigned()->nullable();
            $table->foreign('art_id', 'fk_p_2796_2801_paper_art_5afda693ee087')->references('id')->on('arts');
                $table->integer('paper_id')->unsigned()->nullable();
            $table->foreign('paper_id', 'fk_p_2801_2796_art_paper_5afda693ee897')->references('id')->on('papers');
                
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }
}
