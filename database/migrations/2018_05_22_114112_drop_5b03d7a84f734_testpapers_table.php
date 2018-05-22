<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5b03d7a84f734TestpapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('testpapers');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('testpapers')) {
            Schema::create('testpapers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->nullable();
                $table->string('type')->nullable();
                $table->string('duration')->nullable();
                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->string('attribute')->nullable();
                $table->string('status')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

            $table->index(['deleted_at']);
            });
        }
    }
}
