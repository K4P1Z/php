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
    <h2>Wszystkie towary</h2>
    <div class="list">
        <?php
        $all_records = $conn->query("SELECT bazasklepik.ID, bazasklepik.CENA, bazasklepik.NAZWA, bazasklepik.KATEGORIA FROM bazasklepik;");
        while(list($ID,$CENA,$NAZWA,$KATEGORIA)=mysqli_fetch_row($all_records)){
            echo("<li><b>$ID</b>, <i>$CENA, $NAZWA, $KATEGORIA</i></li>");
        }
        ?>
    </div>
    <h2>Suma Cen</h2>
    <div class="list">
        <?php
        $sum_records = $conn->query("SELECT SUM(bazasklepik.CENA) AS total_sum FROM bazasklepik");
        $sum_row = mysqli_fetch_assoc($sum_records);
        echo("<li><b>" . $sum_row['total_sum'] . "</b></li>");
        ?>
    </div>
    <h2>Produkt o Najwyższej Cenie</h2>
    <div class="list">
    <?php
    $highest_price_query = $conn->query("SELECT bazasklepik.ID, bazasklepik.CENA, bazasklepik.NAZWA, bazasklepik.KATEGORIA FROM bazasklepik ORDER BY bazasklepik.CENA DESC LIMIT 1;");
    $highest_price_row = mysqli_fetch_assoc($highest_price_query);
    echo("<li><b>" . $highest_price_row['NAZWA'] . "</b></li>");
    ?>
</div>
</body>
</html>