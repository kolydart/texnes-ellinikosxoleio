<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1526665163TestpapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testpapers');
    }
}
