<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1526665191TestpapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('testpapers', function (Blueprint $table) {
            if(Schema::hasColumn('testpapers', 'document')) {
                $table->dropColumn('document');
            }
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testpapers', function (Blueprint $table) {
                        
        });

    }
}
