<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGameServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('game_services', function (Blueprint $table) {
            $table->foreign('game_id', 'game_services_game_id_foreign')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game_services', function (Blueprint $table) {
            $table->dropForeign('game_services_game_id_foreign');
        });
    }
}
