<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {

        if (!Schema::hasTable('employees')) {
            Schema::create('employees', static function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->unsignedInteger('age');
                $table->string('job_title');
                $table->unsignedFloat('salary');
                $table->timestamps();
            });
        }

    }

    public function down(): void {
        Schema::dropIfExists('employees');
    }

};
