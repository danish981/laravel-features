<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('zip_codes',static function (Blueprint $table) {
            $table->engine = 'MyIsam';
            $table->id();
            $table->string('zip_code', 20);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('zip_codes');
    }

};
