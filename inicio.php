<?php
include_once ("inventario.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
    background-color: black;
}
    .gg {

        margin: 12px;
    }
</style>

<body>
        <map name="lorna">
            <area shape="rect" coords="274, 201, 367,405" href="corredor2.php" alt="149">
        </map>
        <map name="shore">
            <area shape="rect" coords="274, 201, 367,405" href="corredor.php" alt="foda">
        </map>
        <center>
            <img src="img/porta_corredor2.png" alt="" class="gg" usemap="#lorna">

            <img src="img/porta_corredor1.png" alt="" class="gg" usemap="#shore">
        </center>
</body>

</html>