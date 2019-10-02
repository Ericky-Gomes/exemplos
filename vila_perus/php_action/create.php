<?php
//sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $ri = mysqli_escape_string($connect, $_POST['ri']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $congregacao = mysqli_escape_string($connect, $_POST['congregacao']);
    $congregacao = mysqli_escape_string($connect, $_POST['cargo']);
    
    $sql = "INSERT INTO registro (ri, nome, congregacao, cargo) VALUES ('$ri','$nome', '$congregacao', '$cargo')";
    if(mysqli_query($connect,$sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location:../index.php');
    endif;

endif;

?>