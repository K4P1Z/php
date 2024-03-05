<?php
if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['email'])){
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$email = $_POST['email'];

echo "$imie, $nazwisko, $email";
$doda_do_bazy = "INSERT INTO uczniowie(imie,nazwisko,email) values('$imie','$nazwisko','$email')";
if($connect->exec($dodaj_do_bazy)) 
}else{
    echo "Co kukosz chopie...";
    header("Refresh:3; url=0503.php");
}
?>