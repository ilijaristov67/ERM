<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('iso_alpha_2', 2)->nullable()->unique();
            $table->string('iso_alpha_3', 3)->nullable()->unique();
            $table->string('numeric_code', 3)->nullable()->unique();
            $table->timestamps();

            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
