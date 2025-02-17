<?php

namespace App\Http\Controllers;

class StaticContentController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function profile() {
        return view('profile');
    }

    public function dashboard() {
        return view('dashboard');
    }

    public function faq() {
        return view('faq');
    }

    public function blog() {
        return view('blog');
    }

    public function createfaq() {
        return view('createfaq');
    }

    public function editfaq($post) {
        return view('editfaq', [
            'post' => $post
        ]);
    }

    public function deletefaq($post) {
        return view('deletefaq', [
            'post' => $post
        ]);
    }
}
