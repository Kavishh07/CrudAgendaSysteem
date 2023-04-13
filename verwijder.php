<?php

require 'db_Config.php';
echo "<br>";

$id = $_GET['id'];

//voor als er geen id is

echo  "ID van het agenda-item is:" . $id . "<br/>";

$query = "SELECT * FROM crud_agenda WHERE ID=" . $id;
$result = mysqli_query($mysqli, $query);
//$row = mysqli_fetch_array($result);

if ($id !="")
{

    //toont op scherm
    echo "verwijder item met ID:" . $id . "<br/>";

    //voor de zekerheid vragen
    echo "<p>Weet je het zeker?</p>";

    //Bij ja: verwijder het item
    echo "<a href='verwijder_verwerk.php?id={$id}'> JA <a/><br/><br/>";

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

