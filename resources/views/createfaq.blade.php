<x-layout>
    <x-slot:title>
        Maak een nieuwe FAQ Post
    </x-slot>
    <form method="post" action="createfaqpost">
        @csrf
        <h1>Vraag: </h1>
        <input type="text" id="question" name="question">
        <h1>Antwoord: </h1>
        <input type="text" id="answer" name="answer">
        <br>
        <br>
        <br>
        <br>
        <button>Maak nieuwe FAQ post</button>
    </form>
    <br>
    <button onclick="location.href='/faq'">terug</button>
</x-layout>
