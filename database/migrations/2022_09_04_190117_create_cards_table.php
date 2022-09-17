<?php

use App\Models\CardGroup;
use App\Models\Project;
use App\Models\Team;
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
            $table->date('dead_line');
            $table->string('description');
            $table->string('balance');
            $table->string('status');
            $table->string('prevision');
            $table->unsignedInteger('order')->default(0);

            $table->foreignIdFor(CardGroup::class);
            $table->foreignIdFor(Project::class);
            $table->foreignIdFor(Team::class);

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
