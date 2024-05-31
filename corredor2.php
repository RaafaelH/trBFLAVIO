<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porta de Andares</title>
    <style>
        body {
            background-color: black;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .gg {
            margin: 12px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: darkred;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: red;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <center>
        <img src="img/porta_pisoinf.png" alt="" class="gg" usemap="#llica">
        <map name="llica">
            <area shape="rect" coords="274,201,367,405" href="pisoinf.php" alt="149">
        </map>

        <img src="img/porta_pisosup.png" alt="" class="gg" usemap="#meta">
        <map name="meta">
            <area shape="rect" coords="274,201,367,405" href="pisosup.php" alt="foda">
        </map>

        <form action="inicio.php">
            <button type="submit">Voltar</button>
        </form>
    </center>
</body>

</html>
