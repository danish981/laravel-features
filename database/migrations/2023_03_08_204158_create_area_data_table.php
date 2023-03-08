<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('area_data', static function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->foreignId('zip_code_id')->references('id')->on('zip_codes');
            $table->string('country')->nullable();
            $table->string('country_code')->nullable();
            $table->string('state')->nullable();
            $table->string('state_code')->nullable();
            $table->string('province')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('area_data');
    }

};
