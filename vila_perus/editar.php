<?php
//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect,$_GET['id']);
    $sql = "SELECT * FROM registro WHERE id = '$id'";
    $resultado = mysqli_query($connect,$sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Membro</h3>
       <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
            <div class="input-field col s12">
                <input type="number" name="ri" id="ri" value="<?php echo $dados['ri'];?>">
                <label for="ri">RI</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="congregacao" id="congregacao"value="<?php echo $dados['congregacao'];?>">
                <label for="congregacao">Congregação</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cargo" id="cargo"value="<?php echo $dados['cargo'];?>">
                <label for="cargo">Cargo</label>
            </div>
            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="index.php" type="submit" class="btn green">Lista de Membros</a>
        </form>
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>