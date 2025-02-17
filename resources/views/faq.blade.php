<?php
    use Illuminate\Support\Facades\DB;
    $faqs = DB::table('faq')->get();
?>

<x-layout>
    <x-slot:title>
        FAQ
    </x-slot>
    <article>
        @foreach($faqs as $faq)
            <details>
                <summary>{{ $faq->question }}</summary>
                <p>{{ $faq->answer }}</p>
                <a href="editfaq/{{ $faq->id }}" target="_blank">Edit FAQ post</a>
                <a href="deletefaq/{{ $faq->id }}" target="_blank">Delete FAQ post</a>
            </details>
            <br>
        @endforeach
        <a href="createfaq" target="_blank">Maak een nieuwe FAQ post</a>
    </article>
</x-layout>
