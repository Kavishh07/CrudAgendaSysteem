<?php

require 'db_Config.php';

//query maken
$query = "SELECT * FROM crud_agenda";

//uitvoeren query
$result = mysqli_query($mysqli, $query);

if ($result == false)
{
    echo "<p>FOUT!</p>";
    echo "<p>". $query ."</p>";
    echo "<p>" . mysqli_error($mysqli) ."</p>";
    exit;
}

if (mysqli_num_rows($result) > 0)
{
    //table
    echo "<table border='2px'>";
    echo "<tr><th>Onderwerp</th><th>inhoud</th><th>Begindatum</th><th>Einddatum</th><th>Prioriteit</th><th>Status</th><th>Detail</th><th> Pas aan - Verwijder </th></tr>";
    //whileloop
    while ($item = mysqli_fetch_assoc($result))
    {
        //gegevens tonen van het item
        echo "<tr>";
        echo "<td>" . "". $item['Onderwerp'] . "</td>";
        echo "<td>" . $item['inhoud'] . "</td>";
        echo "<td>" . $item['Begindatum'] . "</td>";
        echo "<td>" . $item['Einddatum'] . "</td>";
        echo "<td>" . $item['Prioriteit'] . "</td>";
        echo "<td>" . $item['Status'] . "</td>";
        echo "<td>". "<button><a href='detail.php?id=". $item['ID'] . " '>Detail </a></button><td/> <button><a href='pasaan.php?id=". $item['ID'] ."'>pas aan</a></button> - <button><a href='verwijder.php?id=". $item['ID'] ."'>Verwijder</a></button> ";
        echo "</tr>";

    }
    echo "</table>";

}

//Als er geen records gevonden zijn
else
{
    echo "<p>Geen items gevonden!</p>";
}

?>

<style>
    *{
        color: black;
    }


    html{
        background-color: crimson;
    }
</style>

