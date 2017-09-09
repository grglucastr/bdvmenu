<?php include 'header.php'; ?>

<h5>Nova Categoria</h5>

<p>
    <a href="categorias.php" title="Voltar para Categorias">Categorias</a>
</p>

<form action="categorias_nova.php" method="POST">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" autocomplete="off" placeholder="Entradas e Saladas, Almoços Leves...">
    </div>
    <div>
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" autocomplete="off" placeholder="2 Pessoas">
    </div>
    <div>
        <input type="submit" value="Salvar" id="btnCatSalvar">
    </div>
</form>

<?php
include 'footer.php';
include 'Connection.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_REQUEST['nome'];
    $descricao = $_REQUEST['descricao'];

    $db = Connection::getInstance();

    $sql = "INSERT INTO categorias (`nome`, `descricao`) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute(array($nome, $descricao));
}
?>
