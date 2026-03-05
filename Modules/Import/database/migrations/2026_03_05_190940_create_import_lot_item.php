<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('import_lot_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('import_lot_id')->constrained();
            $table->foreignId('item_id')->constrained();
            $table->string('quantity');
            $table->timestamps();

            $table->unique(['import_lot_id', 'item_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('import_lot_item');
    }
};
