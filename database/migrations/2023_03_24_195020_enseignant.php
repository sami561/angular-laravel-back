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
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->string('email',50);
            $table->string('password');
            $table->integer('ratings');
            $table->integer('teleN');
            $table->string('cours_id',50);
            $table->string('cours_nom',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
