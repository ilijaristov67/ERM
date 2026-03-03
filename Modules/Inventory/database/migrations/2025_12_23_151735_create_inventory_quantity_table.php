<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory_quantity', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained()->cascadeOnDelete();
            $table->foreignId('location_id')->constrained()->cascadeOnDelete();
            $table->string('quantity');
            $table->timestamps();

            $table->unique(['item_id', 'location_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_quantity');
    }
};
