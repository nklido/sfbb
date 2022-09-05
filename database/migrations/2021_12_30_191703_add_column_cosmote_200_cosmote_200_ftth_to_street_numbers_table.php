<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCosmote200Cosmote200FtthToStreetNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('street_numbers', function (Blueprint $table) {
            $table->boolean('cosmote_200_ftth')->nullable()->after('number');
            $table->boolean('comsote_200')->nullable()->after('number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('street_numbers', function (Blueprint $table) {
            //
        });
    }
}
