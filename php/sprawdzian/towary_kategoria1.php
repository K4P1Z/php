<?php include_once("connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SklepikSzkolny</title>
</head>
<body>
    <h1>Sklepik Szkolny</h1>
    <nav>
        <ul>
            <li><a href="index.html">Strona Główna</a></li>
            <li><a href="towary_kategoria1.php">Towary z kategorii nr1</a></li>
            <li><a href="towary_kategoria4.php">Towary z kategorii nr4</a></li>
            <li><a href="all_towary.php">Wszystkie towary</a></li>
        </ul>
    </nav>
    <h2>Towary z kategorii 1</h2>
    <div class="list">
        <?php
        $all_records = $conn->query("SELECT bazasklepik.ID, bazasklepik.CENA, bazasklepik.NAZWA, bazasklepik.KATEGORIA FROM bazasklepik WHERE bazasklepik.KATEGORIA = 1;");
        while(list($ID,$CENA,$NAZWA,$KATEGORIA)=mysqli_fetch_row($all_records)) {
            echo("<li><b>$ID</b>, <i>$CENA, $NAZWA, $KATEGORIA</i></li>");
        }
        ?>
    </div>
    <div class="numberofrecords">
        <?php
        $counter_records = $conn->query("SELECT COUNT(bazasklepik.ID) as 'ile' FROM bazasklepik WHERE KATEGORIA = 1;");
        list($ile)=mysqli_fetch_row($counter_records);
        echo"<h4>Produkty: $ile rekordy</h4>";
        ?>
    </div>
</body>
</html>