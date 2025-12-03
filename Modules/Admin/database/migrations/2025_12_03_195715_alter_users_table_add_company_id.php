<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('company_id')->nullable()->after('password')->constrained();
        });
    }

    public function down(): void
    {
        Schema::table('', function (Blueprint $table) {
            $table->dropConstrainedForeignId('company_id');
        });
    }
};
