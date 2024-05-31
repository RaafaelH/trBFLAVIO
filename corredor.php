<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Corredor</title>
  <style>
    body {
      background: black !important;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      text-align: center;
      background-color: black;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      height: 100%;
      width: 800px;
    }

    .container img {
      border: none;
    }

    .ggg {
      margin: 12px;
      width: 100%;
      max-width: 626px;
      height: auto;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 16px;
      color: #fff;
      background-color: darkred;
      border: none;
      border-radius: 5px !important;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.2s;
    }

    button:hover {
      background-color: red;
      transform: translateY(-2px);
    }

    .gg {
      height: 626px;
      width: 626px;
    }
  </style>
</head>

<body>
  <div class="container">
    <map name="mega">
      <area shape="rect" coords="274,201,367,405" href="cozinha.php" alt="Cozinha">
    </map>
    <img src="img/cozinha.png" alt="Cozinha" class="ggg" usemap="#mega">

    <map name="death">
      <area shape="rect" coords="274,201,367,405" href="biblioteca.php" alt="Biblioteca">
    </map>
    <img src="img/biblioteca.png" alt="Biblioteca" class="gg" usemap="#death">

    <form action="inicio.php">
      <button type="submit">Voltar</button>
    </form>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="verifica_pergunta.php" method="post">
            <div class="mb-3">
              <label for="PERGUNTA" class="col-form-label">Você quer ficar com a panela</label>
              <input type="text" class="form-control" id="respcozi" name="respcozientrar">
            </div>
            <input type="submit" class="btn btn-primary">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</script>
