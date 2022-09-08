<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->dateTime('dead_line');
            $table->string('description');
            $table->string('balance');
            $table->string('status');
            $table->string('prevision');

            $table->unsignedBigInteger('card_group_id')->unsigned();
            $table->foreign('card_group_id')->references('id')->on('card_groups');

            $table->unsignedBigInteger('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');

            $table->unsignedBigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
};
