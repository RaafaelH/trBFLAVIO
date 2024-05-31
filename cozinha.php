<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cozinha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: black !important;
      /* Fundo preto */
      color: white;
      /* Texto branco */
    }

    .gg {
      margin: 12px;
      border-radius: 15%;
    }

    .rugal {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background-color: #000;
      width: 100vw;
      height: 90vh;
    }

    .button {
      background-color: darkred;
      color: #FFFFFF;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #c82333;
    }

    .button:focus {
      outline: none;
      box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
    }

    .modal-content {
      background-color: black;
      color: white;
    }

    .col-form-label {
      font-size: x-large !important;
    }
    .d-flex{
      background-color: black;
    }
  </style>
</head>

<body>
  <div class="rugal">
    <?php include_once("inventario.php"); ?>
    <img src="img/cozinha.png" alt="Imagem da cozinha" usemap="#kk" class="gg">
  </div>

  <map name="kk">
    <area shape="rect" coords="6,172,205,354" alt="Cozinha" data-bs-toggle="modal" data-bs-target="#exampleModal">
  </map>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Pergunta</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="verifica_pergunta.php" method="post">
            <div class="mb-3">
              <label for="respcozi" class="col-form-label">Qual o álbum mais famoso do Megadeth?</label>
              <input type="text" class="form-control" id="respcozi" name="respcozi">
            </div>
            <button type="submit" class="button">Enviar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="button" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center mt-3">
    <form action="corredor.php">
      <button type="submit" class="button">Voltar</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
