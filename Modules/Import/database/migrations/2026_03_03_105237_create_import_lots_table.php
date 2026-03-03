<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('import_lots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('import_id')->constrained();
            $table->foreignId('location_id')->constrained();
            $table->dateTime('arrived_at');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('import_lots');
    }
};
