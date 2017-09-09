<?php
include 'Connection.php';

$nome = $_REQUEST['nome'];
$descricao = $_REQUEST['descricao'];

$db = Connection::getInstance();
$sql = "INSERT INTO categorias (`nome`, `descricao`) VALUES (?, ?)";
$stmt = $db->prepare($sql);
$stmt->execute(array($nome, $descricao));

echo "<script>";
echo "alert('Categoria inserida com sucesso!');";
echo "location.href='categorias_nova.php'";
echo "</script>";

?>
