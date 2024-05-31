<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
        }

        .gg {
            margin: 12px auto;
            display: block;
            height: 626px;
            width: 726px;
        }

        .modal-dialog {
            margin-top: 10%;
            max-width: 80%;
        }

        .modal-content {
            padding: 20px;
        }

        .btn-back {
            margin-top: 20px;
        }

        img {
            border-radius: 15px;
        }

        .btn-back {
            background-color: red;
        }

        .btn-secondary {
            background-color: darkred !important;
            border: none;

        }

        .btn-primary {
            background-color: darkred;
        }

        label {
            font-size: 20px !important;
            /* or any other size you prefer */
        }
        .btn:hover{
            color:whitesmoke !important;
            border-color: red !important;
            background-color: red !important;
        }
        
    </style>
</head>

<body class="text-center">
    <center>
        <div class="container">
            <map name="pp">
                <area shape="rect" coords="224,174,400,900" alt="foda" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
            </map>
            <img src="img/biblioteca.png" alt="" usemap="#pp" class="gg">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-secondary btn-back" onclick="history.back()">Voltar</button>
                </div>
            </div>
        </div>
    </center>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Responda a pergunta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="verifica_pergunta.php" method="post">
                        <div class="mb-3">
                            <label for="respcozi" class="col-form-label h2">Quem pulou da sacada?</label>
                            <input type="text" class="form-control" id="respcozi" name="respcozi">
                        </div>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>