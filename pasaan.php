<html>
<head>
    <title>Gegevens aanpassen</title>
</head>
<body>
<?php
require 'db_Config.php';
echo "<br>";

//URL ID
$id = $_GET['id'];


//voor als er geen id is


$query = "SELECT * FROM crud_agenda WHERE ID=" . $id;

$result = mysqli_query($mysqli, $query);

$row = mysqli_fetch_array($result);

//    //Bij ja: verwijder het item
//    echo "<a href='verwijder_verwerk.php?id={$id}'> JA <a/><br/><br/>";

//of anders
//else
//{
//    echo "Geen ID gevonden...<br/>";
//}


?>
<form name="aanpasFormulier" method="post" action="pasaanVerwerk.php">
    <input type="hidden" name="idVeld" value="<?php echo $row['ID'];?>"/>
    <table>
        <tr>
            <td>Onderwerp:</td>
            <td><input type="text" name="onderwerpVeld" value="<?php echo $row['Onderwerp'];?>"/></td>
        </tr>

        <tr>
            <td>Inhoud:</td>
            <td><input type="text" name="inhoudVeld" value="<?php echo $row['inhoud'];?>"/></td>
        </tr>

        <tr>
            <td>Begindatum:</td>
            <td><input type="date" name="begindatumVeld" value="<?php echo $row['Begindatum'];?>"/></td>
        </tr>

        <tr>
            <td>Einddatum:</td>
            <td><input type="date" name="einddatumVeld" value="<?php echo $row['Einddatum'];?>"/></td>
        </tr>

        <tr>
            <td>Prioriteit:</td>
            <td><input type="number" name="prioriteitVeld" min="1" max="3" value="3" value="<?php echo $row['Prioriteit'];?>"/></td>
        </tr>
        <tr>
            <td>Status:</td>
            <td>
                <select name="statusVeld">
                    <option value="n" selected>Niet begonnen</option>
                    <option value="b" >Bezig</option>
                    <option value="a" >Afgerond</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="verzend" value="item aanpassen"></td>

        </tr>
    </table>
</form>
</body>
</html>

<style>
    *{
        color: black;
    }


    html{
        background-color: crimson;
    }
</style>



