<?php

namespace App\Http\Controllers;

class PostController extends controller
{
    public function show($page)
    {
        if ($page <= 5) {
            return view('posts.show', [
                'page' => $page
            ]);
        } else {
            abort(404);
        }
    }
}
