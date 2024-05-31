<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .spinner {
            border: 12px solid #ffffff29;
            border-left-color: darkred;
            height: 120px;
            width: 120px;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
<div class="spinner"></div>
</body>
</html>
<?php 
session_start();

$calice = $_SESSION["calice"] ?? 0;
$aguabenta = $_SESSION["aguabenta"] ?? 0;
$biblia = $_SESSION["biblia"] ?? 0;
$chavesecreta = $_SESSION["chavesecreta"] ?? 0;
$faca = $_SESSION["faca"] ?? 0;
$foto = $_SESSION["foto"] ?? 0;
$chavesuperior = $_SESSION["chavesuperior"] ?? 0;
$passecozinha = $_SESSION["passe_cozinha"] ?? 0;

// Verifica resposta da cozinha
if (isset($_POST["respcozi"])) {
    $respostacozi = $_POST["respcozi"];
    if ($respostacozi === "rust in peace" || $respostacozi === "Rust in peace") {
        if ($faca == 0) {
            echo "<script> alert('você ganhou uma faca. aguarde um instante'); 
            setTimeout(() => { window.location.href='cozinha.php'; }, 1000); </script>";
            $_SESSION["faca"] = $faca + 1;
        } else {
            echo "<script> alert('você acertou, mas já tem uma faca. aguarde um instante'); 
            setTimeout(() => { window.location.href='cozinha.php'; }, 1000); </script>";
        }
    } else {
        if ($calice == 0) {
            echo "<script> alert('você errou e ganhou um calice. aguarde um instante'); 
            setTimeout(() => { window.location.href='cozinha.php'; }, 1000); </script>";
            $_SESSION["calice"] = $calice + 1;
        } else {
            echo "<script> alert('você errou, mas já tem um calice. aguarde um instante'); 
            setTimeout(() => { window.location.href='cozinha.php'; }, 1000); </script>";
        }
    }
}

if (isset($_POST["respostabibi"])) {
    $respostabibi = $_POST["respostabibi"];
    if ($respostabibi === "mulher do padre" || $respostabibi === "Mulher do padre") {
        if ($biblia == 0) {
            echo "<script> alert('você ganhou uma biblia. aguarde um instante'); 
            setTimeout(() => { window.location.href='biblioteca.php'; }, 1000); </script>";
            $_SESSION["biblia"] = $biblia + 1;
        } else {
            echo "<script> alert('você acertou, mas já tem uma biblia. aguarde um instante'); 
            setTimeout(() => { window.location.href='biblioteca.php'; }, 1000); </script>";
        }
    } else {
        if ($foto == 0) {
            echo "<script> alert('você errou e ganhou uma foto. aguarde um instante'); 
            setTimeout(() => { window.location.href='biblioteca.php'; }, 1000); </script>";
            $_SESSION["foto"] = $foto + 1;
        } else {
            echo "<script> alert('você errou, mas já tem uma foto. aguarde um instante'); 
            setTimeout(() => { window.location.href='biblioteca.php'; }, 1000); </script>";
        }
    }
}

if (isset($_POST["respcozientra"])) {
    $respcozientra = $_POST["respcozientra"];
    if ($passecozinha == 1) {
        echo "<script> alert('você já tem um passe para a cozinha. aguarde um instante'); 
        setTimeout(() => { window.location.href='cozinha.php'; }, 1000); </script>";
    } else {
        if ($respcozientra === "sim" || $respcozientra === "Sim") {
            if ($calice == 1) {
                echo "<script> alert('você perdeu o calice e entrará na cozinha. aguarde um instante'); 
                setTimeout(() => { window.location.href='cozinha.php'; }, 1000); </script>";
                $_SESSION["passe_cozinha"] = $passecozinha + 1;
                $_SESSION["calice"] = $calice - 1;
            } else {
                echo "<script> alert('você não tem um calice para entrar na cozinha. aguarde um instante'); 
                setTimeout(() => { window.location.href='cozinha.php'; }, 1000); </script>";
            }
        } else {
            echo "<script> alert('você não pode entrar na cozinha sem perder o calice. aguarde um instante'); 
            setTimeout(() => { window.location.href='corredor.php'; }, 1000); </script>";
        }
    }
}
?>
