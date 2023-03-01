<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('books', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('publisher_id');
            $table->string('isbn')->unique();
            $table->float('price');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('books');
    }

};
