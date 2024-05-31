<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      overflow: hidden;
      background-color: black!important;
    }

    #lolo {
      width: 55px;
      height: 55px;
      align-items: center;
      padding: 0%;
      text-align: center;
      display: block;
    }

   .px225 {
      height: 100px;
      width: 100px;
    }

    #q {
      background-color: darkred;
      border: none;
    }

   .badge {
      background-color: darkred;
    }

   .badge.text-bg-primary.rounded-pill {
      background-color: darkred!important;
      color: white!important;
    }

   .fw-bold {
      color: red!important;
    }

   .offcanvas-body {
      background-color: black!important;
    }

    #f {
      color: darkred!important;
    }

   .list-group {
      background-color: white!important;
      color:white; /* changed to white */
    }

   .offcanvas-header {
      background-color: black;
    }

   .offcanvas-header.btn-close {
      background-color: white !important;
    }
    .list-group-item{
      background-color: black;
    }
    .btn-close{
      background-color: white !important;
    }
    .badge.text-bg-primary.rounded-pill{
      font-size: large !important;
    }
    .scroller {
  width: 300px;
  height: 100px;
  overflow-x: scroll;
  scrollbar-color: rebeccapurple green;
  scrollbar-width: thin;
}
    
    
  </style>

</head>

<body>
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
    aria-controls="staticBackdrop" id="q">
    <img src="img/mochila.png" alt="Mochila" id="lolo">
  </button>

  <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
    aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <h1 id="f">Itens:</h1>
      <ol class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Faca</div>
            <img src="img/faca.jpeg" alt="Faca" class="px225">
          </div>
          <span class="badge text-bg-primary rounded-pill h2 !important">
            <?php
            session_start();
            echo isset($_SESSION["faca"])? $_SESSION["faca"] : '0';
           ?>
          </span id="label">
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Bíblia</div>
            <img src="img/biblia.jpeg" alt="Bíblia" class="px225">
          </div>
          <span class="badge text-bg-primary rounded-pill">
            <?php
            echo isset($_SESSION["biblia"])? $_SESSION["biblia"] : '0';
           ?>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Cálice</div>
            <img src="img/calicce.jpeg" alt="Cálice" class="px225">
          </div>
          <span class="badge text-bg-primary rounded-pill">
            <?php
            echo isset($_SESSION["calice"])? $_SESSION["calice"] : '0';
           ?>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Água Benta</div>
            <img src="img/aguabenta.jpeg" alt="Água Benta" class="px225">
          </div>
          <span class="badge text-bg-primary rounded-pill">
            <?php
            echo isset($_SESSION["aguabenta"])? $_SESSION["aguabenta"] : '0';
           ?>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Chave Superior</div>
            <img src="img/chave.jpeg" alt="Chave Superior" class="px225">
          </div>
          <span class="badge text-bg-primary rounded-pill">
            <?php
            echo isset($_SESSION["chavesuperior"])? $_SESSION["chavesuperior"] : '0';
           ?>
          </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Foto</div>
            <img src="img/foto.jpeg" alt="Foto" class="px225">
          </div>
          <span class="badge text-bg-primary rounded-pill">
            <?php
            echo isset($_SESSION["foto"])? $_SESSION["foto"] : '0';
           ?>
          </span>
        </li>
      </ol>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>