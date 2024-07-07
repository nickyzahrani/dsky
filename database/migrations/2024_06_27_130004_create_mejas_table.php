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
        Schema::create('meja', function (Blueprint $table) {
            $table->id('id_meja'); // Laravel's $table->id() automatically sets the column as the primary key
            $table->string('no_meja');
            $table->enum('status', ['Available', 'Booked'])->default('Available'); // Default status Available
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meja'); // The table name should be 'meja' as defined in the up() method
    }
};
