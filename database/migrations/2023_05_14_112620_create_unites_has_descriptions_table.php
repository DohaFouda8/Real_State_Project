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
        Schema::create('unites_has_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unites_id')->unsigned();
            $table->foreignId('bank_id')->unsigned();
            $table->foreignId('clients_id')->unsigned();
            $table->foreignId('description_id')->unsigned();
            $table->string('unites_has_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unites_has_descriptions');
    }
};
