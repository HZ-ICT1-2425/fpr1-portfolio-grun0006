<?php
use Illuminate\Support\Facades\DB
?>

<x-layout>
    <x-slot:title>
        Edit FAQ Post {{ $post }}
    </x-slot>
    <form method="post" action="/editfaqpost">
        @method('put')
        @csrf
        <h1>Vraag: </h1>
        <input type="text" name="question" value="{{ DB::table('faq')->where('id', $post)->value('question') }}">
        <h1>Antwoord: </h1>
        <input type="text" name="answer" value="{{ DB::table('faq')->where('id', $post)->value('answer') }}">
        <input type="hidden" name="id" value="{{ $post }}">
        <br>
        <br>
        <br>
        <br>
        <button>Edit FAQ post</button>
    </form>
    <br>
    <button onclick="location.href='/faq'">terug</button>
</x-layout>
