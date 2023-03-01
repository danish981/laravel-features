<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;

class RelationshipsController extends Controller {

    // https://www.itsolutionstuff.com/post/laravel-one-to-many-polymorphic-relationship-tutorialexample.html

    public function oneToManyMorph() {
        Post::create([
            'name' => 'The dummy post 1'
        ]);

        Video::create([
            'name' => 'the dummy video 1'
        ]);

    }

}
