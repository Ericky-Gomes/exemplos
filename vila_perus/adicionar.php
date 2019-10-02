<?php
//header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Membro</h3>
       <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="number" name="ri" id="ri">
                <label for="ri">RI</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="congregacao" id="congregacao">
                <label for="congregacao">Congregação</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="cargo" id="cargo">
                <label for="cargo">Cargo</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
            <a href="index.php" type="submit" class="btn green">Lista de Membro</a>
        </form>
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>