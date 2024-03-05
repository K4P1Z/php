<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
    <style>
        .table_head {
            font-weight: bold;
        }

        td {
            padding: 10px;
            
        }

        .formularz {
            width: 600px;
            margin: auto;
        }

        input[name='imie'],
        input[name="nazwisko"],
        input[name="email"] {
            width: 400px;
            height: 25px;
            margin: 10px;
        }

        input[name='submit'] {
            float: right;
            background-color: orange;
            width: 80px;
        }
        .box{
            width: 300px;
            margin: auto;
        }
    </style>
</head>

<body>
    <?php
    include_once("connect.php");
    ?>
    <div class="formularz">
        <form action="dodaj_do_bazy_danych.php" method="post">
            <input type="text" name="imie" placeholder="Imię" required>
            <input type="text" name="nazwisko" placeholder="Nazwisko" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <button type="submit">Dodaj</button>

        </form>
        <?php
        $request = "SELECT imie,nazwisko,email FROM uczniowie";
        echo "<table border=1>";
        echo "<tr class='table_head'><td>Imie</td><td>Nazwisko</td><td>email</td></tr>";

        foreach ($connect->query($request) as $wiersz) {
            echo "<tr><td>" . $wiersz['imie'] . "</td><td>" . $wiersz['nazwisko'] . "</td><td> email: " . $wiersz['email'] . "</td><br>";
        }
        ?>
    </div>
    <?php
    $polaczenie = null;
    ?>
</body>

</html>