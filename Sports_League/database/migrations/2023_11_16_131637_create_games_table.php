<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->dateTime('date');
            $table->unsignedBigInteger('local_team')->nullable;
            $table->unsignedBigInteger('guest_team')->nullable;
            $table->integer('local_score');
            $table->integer('guest_score');
            $table->timestamps();

            $table->foreign('local_team')
                ->references('id')->on('teams')
                ->onDelete('set null');               

            $table->foreign('guest_team')
                ->references('id')->on('teams')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
