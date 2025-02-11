<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="./resources/css/main.css">
</head>
<body style="text-align: center; background-image: linear-gradient(to bottom right, rgb(255, 255, 255), rgb(113, 113, 113)); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; font-family: Arial, Helvetica, sans-serif; font-size: large;">
<main>
    <nav style="position: sticky; top: 0; z-index: 100;">
        <button style="width: 80px; height: 50px; margin-right: 10px;" onclick="location.href='/'" style="background-color: darkgray;">Home</button>
        <button style="width: 80px; height: 50px; margin-right: 10px;" onclick="location.href='/dashboard'">Dashboard</button>
        <button style="width: 80px; height: 50px; margin-right: 10px;" onclick="location.href='/profile'">Profile</button>
        <button style="width: 80px; height: 50px; margin-right: 10px;" onclick="location.href='/faq'">FAQ</button>
        <button style="width: 80px; height: 50px; margin-right: 10px;" onclick="location.href='/blog'">Blog</button>
    </nav>
    <aside style="position: fixed; left: 0; margin-top: 200px;">
        <button style="margin-bottom: 10px; width: 100px; height: 100px;" onclick="location.href='https:/hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/OER-HZ-Bacheloropleidingen-voltijd-2023-2024-DEF-versie-20240412.pdf'">HZ HBO-ICT Course and Examination Regulations</button><br>
        <button style="margin-bottom: 10px; width: 100px; height: 100px;" onclick="location.href='https:/oer.hz.nl/a37f2fd2-8b35-44ce-800a-c5abe33735aa'">Implementation Regulations</button><br>
        <button style="margin-bottom: 10px; width: 100px; height: 100px;" onclick="location.href='https:/glaze-donut-5a5.notion.site/PCO1en-Your-Showcase-Website-7bc8c340f66047d0b49b83e8dc44ba23'">Learn environment</button><br>
        <button style="margin-bottom: 10px; width: 100px; height: 100px;" onclick="location.href='https:/hz.osiris-student.nl/voortgang'">MyHZ study progress</button><br>
        <button style="margin-bottom: 10px; width: 100px; height: 100px;" onclick="location.href='https:/github.com/HZ-HBO-ICT'">GitHub environment</button><br>
    </aside>
    </aside>
    <hr>
    <h1>{{ $title }}</h1>
    <hr>
    {{ $slot }}
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>
