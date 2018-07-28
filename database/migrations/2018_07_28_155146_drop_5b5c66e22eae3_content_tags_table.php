<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5b5c66e22eae3ContentTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('content_tags');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('content_tags')) {
            Schema::create('content_tags', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->nullable();
                $table->string('slug')->nullable();
                
                $table->timestamps();
                
            });
        }
    }
}
