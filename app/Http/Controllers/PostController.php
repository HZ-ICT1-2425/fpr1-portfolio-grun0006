<?php

namespace App\Http\Controllers;

class PostController extends controller
{
    public function show($page) {
        $pageurl = 'posts.post' . $page;
        if ($page <= 5) {
            return view($pageurl, [
                'page' => $page
            ]);
        } else {
            abort(404);
        }
    }
}
