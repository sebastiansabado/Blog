<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->integer('team_id')->nullable(false);
            $table->integer('league_id')->nullable(false);
            $table->integer('season_id')->nullable(false);
            $table->integer('rank')->nullable(false);
            $table->string('team_name', 100)->nullable(false);
            $table->string('owner_name', 100)->nullable(false);
            $table->integer('wins')->nullable(false);
            $table->integer('losses')->nullable(false);
            $table->integer('tie');
            $table->integer('points_forced')->nullable(false);
            $table->integer('points_allowed')->nullable(false);
            $table->float('points_forced_per_game')->nullable(false);
            $table->float('points_allowed_per_game')->nullable(false);
            $table->float('difference')->nullable(false);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owner_stats');
    }
}
