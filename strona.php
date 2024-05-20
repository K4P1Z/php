<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Js - obsługa danych</title>
</head>
<body>
    <?php $polaczenie = new mysqli("localhost","root","","energia",3306) ?>

    <?php 
    $zapytanie = $polaczenie->query("SELECT m FROM energia"); 
    $zapytanie2 = $polaczenie->query("SELECT g FROM energia");
    $zapytanie3 = $polaczenie->query("SELECT h FROM energia");
    $zapytanie4 = $polaczenie->query("SELECT v FROM energia");
    ?>
    <form name="formularz">


<?php 
if ($zapytanie) {
    $wiersz = $zapytanie->fetch_assoc();
    $m = $wiersz['m'];
    $options_m = "<select name='m' id='masa'>";
    $options_m.= "<option value='$m'>$m</option>";
    $options_m.= "</select>";
} 
else {
    $options_m = 'Błąd w zapytaniu';
}
echo "<p>m = $options_m</p>";

if ($zapytanie2) {
    $wiersz = $zapytanie2->fetch_assoc();
    $g = $wiersz['g'];
    $options_g = "<select name='g' id='grawitacja'>";
    $options_g.= "<option value='$g'>$g</option>";
    $options_g.= "</select>";
} 
else {
    $options_g = 'Błąd w zapytaniu';
}
echo "<p>g = $options_g</p>";

if ($zapytanie3) {
    $wiersz = $zapytanie3->fetch_assoc();
    $h = $wiersz['h'];
    $options_h = "<select name='h' id='predkosc'>";
    $options_h.= "<option value='$h'>$h</option>";
    $options_h.= "</select>";
} 
else {
    $options_h = 'Błąd w zapytaniu';
}
echo "<p>h = $options_h</p>";

if ($zapytanie4) {
    $wiersz = $zapytanie4->fetch_assoc();
    $v = $wiersz['v'];
    $options_v = "<select name='v' id='vvv'>";
    $options_v.= "<option value='$v'>$v</option>";
    $options_v.= "</select>";
} 
else {
    $options_v = 'Błąd w zapytaniu';
}
echo "<p>v = $options_v</p>";
?>

    </form>
    <?php $polaczenie->close(); ?>
    <div id="wynik" style="border: 1px solid black; border-radius: 20px; width: 500px; padding: 20px; margin: auto;">
</div>
    <button onclick="sprawdzEP();">Oblicz Energie Potencjalna</button>
    <button onclick="sprawdzEK();">Oblicz Energie Kinetyczna</button>
    <button onclick="sprawdzEM();">Oblicz Energie Mechaniczna</button>
    <script>
        let m = document.getElementById("masa").value;
        let g = document.getElementById("grawitacja").value;
        let h = document.getElementById("predkosc").value;
        let v = document.getElementById("vvv").value;
        let wynik = document.getElementById("wynik");
        let wynikEP = m * g * h;
        let wynikEK = (m * (v * v))/2
        let wynikE = wynikEK + wynikEP;
        function sprawdzEP() {
                 wynik.innerHTML = "Energia Potencjalna = " + wynikEP;
                }
        function sprawdzEK(){
            wynik.innerHTML = "Energia Kinetyczna = " + wynikEK;
        }
        function sprawdzEM(){
            wynik.innerHTML = "Energia Mechaniczna= " + wynikE;
        }
        
    </script>
</body>
</html>