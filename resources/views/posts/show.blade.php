<?php
$posts = ['Ik heb voor HBO-ict als studie gekozen want dit leek mij de leukste en interresanste studie van de studies die ik heb bekeken.', 'Wat zijn je sterke punten?
Doorzettingsvermogen.
Wat zijn je valkuilen?
Snel afgeleid.
Welke kansen zie je?
Mijn propedeuze halen.
Welke risicos zie je?
    Te veel afegeleid zijn en dus niet op te letten.', 'Heb je al programmeerervaring?
Ja.
Je hebt aangegeven dat je al programmeerervaring hebt. Kun je aangeven waar je die ervaring hebt opgedaan?
Vooropleiding en hobbys/interesses.
Beschrijf jouw programmeerervaring.
Python, Html, pHp, SQL en C#.
De kans bestaat dat deze vragenlijst bij jou vragen oproept of dat je daardoor bent gaan twijfelen over de opleiding. We raden je aan dan een persoonlijk studiekeuzegesprek in te plannen. Wil je een persoonlijk studiekeuzegesprek inplannen?
    Nee.', 'First feedback
Geen gehad', 'Chi-Wai Hung werkt al vijftien jaar als ITer bij de overheid, momenteel als Senior Test Analist bij het Openbaar Ministerie. Vrijheid in zijn werk en dagplanning, ruimte voor zelfontplooiing: Chi-Wai programmeert zijn eigen baan.

Werken met profs

Als testanalist in een scrumteam ligt voor Chi-Wai de focus op de gebruikersacceptatietest (GAT). In een vierwekelijkse cyclus worden user stories verfijnd en ontwikkeld, gevolgd door systeemintegratietests (SIT) en gebruikerstesten. Chi-Wai bewaakt dit proces, spoort fouten op, test opnieuw en begeleidt gebruikers. “Mijn kennis van IT en development is enorm gegroeid, dankzij de samenwerking met profs in zon scrumteam. Zo word ik beter in wat ik doe en dat vind ik belangrijk.”

Tooling en veilig werken

Binnen het OM wordt goed gekeken naar IT-ontwikkeling. “We maken nu gebruik van ALM (Application Lifecycle Management), maar er is interesse in modernere tools zoals Xray voor Jira dat meer aansluit bij Agile werken. Daarnaast werk ik en experimenteer ik met tooling als Toad database, Selenium en Be Informed.”

Tools kunnen nog zo goed zijn, veilig werken is cruciaal tijdens het testen. Chi-Wai: Bij testen werken we met geanonimiseerde data om ervoor te zorgen dat geen gevoelige informatie wordt gelekt. Dit betekent dat testomgevingen zijn gevuld met dummydata om realistische scenarios na te bootsen zonder risico op datalekken.”

Balans werk-privé en carrièremogelijkheden

Bijdragen aan de samenleving, werken met profs en interessante tooling. Chi-Wai noemt nog twee aspecten die hij belangrijk vindt: flexibiliteit van werken en ontwikkelingsmogelijkheden.

“Ik vind hybride werken fijn. Er zijn richtlijnen, maar we hebben vrijheid in het indelen van onze werkweek. Ik werk vier dagen van negen uur, waarbij ik een of twee dagen op kantoor ben.”

Hoe wil je jezelf ontwikkelen? Die vraag is leidend in een voortdurend opleidingstraject binnen de overheid. “Wil ik mezelf specialiseren of mijn kennis verbreden? Naast de verplichte of geadviseerde trainingen, is hier veel vrijheid in.”

Werken met en voor mensen

“Ik werk samen met collegas van verschillende rijksinstanties binnen de strafrechtketen, waaronder de politie en de rechtspraak. Wat ik doe, draait altijd om mensen en dat vind ik fijn. Werken voor een veilige en rechtvaardige samenleving geeft me voldoening en uitdaging. Ik ben een IT-technicus, op de best mogelijke plek.”']
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HZ HBO-ICT</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<x-layout>
    <x-slot:title>
        Blog post {{ $page }}
    </x-slot>
    {{$posts[$page - 1]}}
</x-layout>
</body>
</html>
