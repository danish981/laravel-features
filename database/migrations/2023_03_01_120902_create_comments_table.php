<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('comments', static function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->id();
            $table->string('body');
            $table->unsignedInteger('commentable_id');
            $table->string('commentable_type');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('comments');
    }

};
