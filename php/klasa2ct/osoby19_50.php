<?php include_once("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Klasa 2CT - 13.02.2024 Ćwiczenia</title>
</head>
<body>
    <h2>Autor: Kacper Kionka</h2>
    <hr>
    <div class="counter">
        <?php
         $counter_records = $conn->query("SELECT COUNT(arkusz_kalkulacyjny_bez_tytu__u___arkusz1.ID) as 'ile' FROM arkusz_kalkulacyjny_bez_tytu__u___arkusz1;");
         list($ile)=mysqli_fetch_row($counter_records);
         echo"<h4>counter: $ile</h4>"
         ?>
    </div>
    <nav>
        <ul>
        <li><a href="index.php">HOME</a></li>
            <li><a href="all.php">Wszystkie rekordy z bazy</a></li>
            <li><a href="osoby10_18.php">Osoby od 10 do 18</a></li>
            <li><a href="osoby19_50.php">Osoby od 19 do 50</a></li>
        </ul>
    </nav>
    <div class="osoby19_50"></div>
</body>
</html>
<?php $conn->close(); ?>