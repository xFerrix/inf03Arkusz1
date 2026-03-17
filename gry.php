<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gry komputerowe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Ranking gier komputerowych</h1>
</header>
<main>
    <section class="lewa">
        <h3>Top 5 gier w tym miesiącu</h3>
        <ul>   
        </ul>
        <h3>Nasz sklep</h3>
        <a href="http://sklep.gry.pl">Tu kupisz gry</a>
        <h3>Stronę wykonał</h3>
        <p>00000000000</p>
    </section>
    <section class="srodkowa">   
    </section>
    <section class="prawa">
        <h3>Dodaj nową grę</h3>
        <form method="POST">
            <label>Nazwa:</label><br>
            <input type="text" name="nazwa"><br>

            <label>Opis:</label><br>
            <input type="text" name="opis"><br>

            <label>Cena:</label><br>
            <input type="text" name="cena"><br>

            <label>Zdjęcie:</label><br>
            <input type="text" name="zdjecie"><br>

            <input type="submit" value="DODAJ">
        </form>
    </section>
</main>

<footer>
    <form method="POST">
        <input type="text" name="id">
        <input type="submit" value="Pokaż opis">
    </form>
</footer>
</body>
</html>