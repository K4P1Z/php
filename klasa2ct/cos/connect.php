<?php

$server = "localhost";
$port = 3306;
$username = "root";
$password = "";
$database="0503";

try {
    $connect = new PDO('mysql:host='.$server.';dbname='.$database.';port='.$port."charset=utf8",$username,$password);
    echo("<h3>Połączono z baza danych</h3>");
} catch (PDOException $e) {
    echo("<h3>Erorr połączenia z bazą danych</h3>");
    die();
}
?>