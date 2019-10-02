<?php
//sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $congregacao = mysqli_escape_string($connect, $_POST['congregacao']);
    $cargo = mysqli_escape_string($connect, $_POST['cargo']);
    $ri = mysqli_escape_string($connect, $_POST['ri']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    $sql = "UPDATE registro SET ri= '$ri', nome = '$nome', congregacao = '$congregacao', cargo = '$cargo' WHERE id = '$id'";
    if(mysqli_query($connect,$sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location:../index.php');
    endif;

endif;

?>