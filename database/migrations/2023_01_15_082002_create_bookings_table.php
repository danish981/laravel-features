<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('bookings', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')
                ->references('id')
                ->on('hotels')
                ->cascadeOnDelete();
            $table->unsignedInteger('count');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('bookings');
    }

};
