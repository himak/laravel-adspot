<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::enableForeignKeyConstraints();

    	Schema::table('ads', function (Blueprint $table) {

		    $table->unsignedInteger('user_id')->after('id');

    		$table->foreign('user_id')
	              ->references('id')->on('users');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->dropForeign('ads_user_id_foreign');
        });
    }
}