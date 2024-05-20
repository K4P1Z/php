<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--zad 1 2 3 4-->
    <?php
    $zmienna1 = 1;
    $zmienna2 = "nnn";
    $zmienna3 = 3.33;
    $zmienna4 = true;

    echo($zmienna1);
    echo("<br>");
    echo($zmienna2);
    echo("<br>");
    echo($zmienna3);
    echo("<br>");
    echo($zmienna4);
    
//jednoliniowy

/*
Wieloliniowy
Wieloliniowy
*/
?>
  <!--zad 5-->
<?php
echo("<br>");
$x = 1;
$y = "nnn";
$z = $x . $y;
echo $z;
echo("<br>");
$x1 = "Hello";
$y1 = "World";
$z1 = $x1 . $y1;
echo $z1;
echo("<br>");
$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;
?>
<br>

  <!--zad 6-->
<?php
$tablica[0] = "Wpis numer 0 <br>";
$tablica[1] = "Wpis numer 1 <br>";
$tablica[2] = "Wpis numer 2 <br>";
$tablica[3] = "Wpis numer 3 <br>";
$tablica[4] = "Wpis numer 4 <br>";
echo $tablica[0];
echo $tablica[1];
echo $tablica[2];
echo $tablica[3];
echo $tablica[4];
?>

  <!--zad 7-->
    <?php
    $cena = array(
        'jogurt' => '2 zł',
        'maslo' => '1.50 zł',
        'zapiekanka' => '4 zł',
        'gazeta'  => '5 zł'
    );
    
    foreach ($cena as $klucz => $wartosc)
        echo $klucz." -> ".$wartosc."<br>\n";
    ?>
  <!--zad 8-->
<?php
$a = 10;
$b = 2;

// Dodawanie
$wynikdodawanie = $a + $b;
echo "Dodawanie: $a + $b = $wynikdodawanie<br>";

// Odejmowanie
$wynikodejmowanie = $a - $b;
echo "Odejmowanie: $a - $b = $wynikodejmowanie<br>";

// Mnożenie
$wynikmnozenie = $a * $b;
echo "Mnożenie: $a * $b = $wynikmnozenie<br>";

// Dzielenie
if ($b!= 0) {
    $wynikdzielenie = $a / $b;
    echo "Dzielenie: $a / $b = $wynikdzielenie<br>";
} else {
    echo "Nie można dzielić przez zero!<br>";
}
?>
</body>
</html>