<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('pens', static function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->unsignedFloat('weight');
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('pens');
    }

};
