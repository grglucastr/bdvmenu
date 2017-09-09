<?php
include 'header.php';
include 'Connection.php';

$dados["id"] = "";
$dados["nome"] = "";
$dados["descricao"] = "";

if( $_SERVER["REQUEST_METHOD"] === "GET"){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM categorias WHERE id = ?";

    $db = Connection::getInstance();
    $stmt = $db->prepare($sql);
    $stmt->execute(array($id));
    $row = $stmt->fetch(PDO::FETCH_OBJ);

    $dados["id"] = $row->id;
    $dados["nome"] = $row->nome;
    $dados["descricao"] = $row->descricao;
}

?>




<h5>Nova Categoria</h5>

<p><a href="categorias.php" title="Voltar para Categorias">Categorias</a></p>

<form action="categorias_form.php" method="POST">
    <input type="hidden" name="id" id="id" value="<?=$dados['id'];?>">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?=$dados['nome']; ?>" autocomplete="off" placeholder="Entradas e Saladas, Almoços Leves...">
    </div>
    <div>
        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" value="<?=$dados['descricao']; ?>" autocomplete="off" placeholder="2 Pessoas">
    </div>
    <div>
        <input type="submit" value="Salvar" id="btnCatSalvar">
    </div>
</form>

<?php
include 'footer.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_REQUEST['nome'];
    $descricao = $_REQUEST['descricao'];

    $db = Connection::getInstance();

    $sql = "";
    $arr_stmts = array();
    if(empty($_REQUEST['id'])){

        $sql = "INSERT INTO categorias (`nome`, `descricao`) VALUES (?, ?)";
        $arr_stmts = array($nome, $descricao);

    }else{

        $id = $_REQUEST['id'];
        $sql = "UPDATE categorias SET `nome` = ?, `descricao` = ? WHERE id = ?";
        $arr_stmts = array($nome, $descricao, $id);
    }

    $stmt = $db->prepare($sql);
    $stmt->execute($arr_stmts);
}
?>
