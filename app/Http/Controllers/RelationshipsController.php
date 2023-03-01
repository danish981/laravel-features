<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

class RelationshipsController extends Controller {

    // https://www.itsolutionstuff.com/post/laravel-one-to-many-polymorphic-relationship-tutorialexample.html

    public function oneToManyMorph() {

        $post = Post::find(1);

        $comment = Comment::create([
            'body' => 'hello there, this is the commnet'
        ]);

        $post->comments()->save($comment);

    }

}
