<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url("img/igreja.png");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"] {
            background-color: darkred;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #a00;
        }
    </style>
</head>

<body>
    <form action="inicio.php" method="post">
        <input type="submit" value="Entrar">
    </form>
</body>

</html>

<?php
session_start();
$_SESSION["calice"] = 0;
$_SESSION["aguabenta"] = 0;
$_SESSION["biblia"] = 0;
$_SESSION["chavesecreta"] = 0;
$_SESSION["chavesuperior"] = 0;
$_SESSION["foto"] = 0;
$_SESSION["faca"] = 0;
// Outros itens...
?>
