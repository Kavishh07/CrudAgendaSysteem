
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToevoegForm</title>
</head>
<style>
    *{
    color: black;
}

    html{
    background-color: crimson;
    }
</style>
<body>
<?php
session_start();
$token = "text";
$_SESSION['token'] = $token;
?>
<h1> Toevoeg formulier </h1>
<form name="agendaFormulier" method="post" action="toevoegVerwerk.php">
    <table>
        <tr>
            <td>Onderwerp:</td>
            <td><input type="text" name="onderwerpVeld"></td>
        </tr>

        <tr>
            <td>Inhoud:</td>
            <td><input type="text" name="inhoudVeld"></td>
        </tr>

        <tr>
            <td>Begindatum:</td>
            <td><input type="date" name="begindatumVeld"></td>
        </tr>

        <tr>
            <td>Einddatum:</td>
            <td><input type="date" name="einddatumVeld"></td>
        </tr>

        <tr>
            <td>Prioriteit:</td>
            <td><input type="number" name="prioriteitVeld" min="1" max="3" value="3"/></td>
        </tr>

        <tr>
            <td>Status:</td>
            <td>
                <Select name="statusVeld">
                    <option value="n" selected>Niet begonnen</option>
                    <option value="b" selected>Bezig</option>
                    <option value="a" selected>Afgerond</option>
                </Select>
            </td>
        </tr>

        <td> </td>
        <td><input type="submit" name="verzenden" value="Voeg toe aan agenda"></td>
    </table>
</form>

</body>
</html>