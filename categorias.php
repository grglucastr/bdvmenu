<?php include 'header.php'; ?>
<h5>Categorias</h5>

<p>
    <a href="index.php" title="Voltar para o Menu Principal">Menu Principal</a>
</p>

<ul>
    <li><a href="categorias_nova.php">Inserir Nova</a></li>
</ul>

<h6>Lista de Categorias</h6>

<?php
include 'Connection.php';

$db = Connection::getInstance();

$sql = "SELECT * FROM categorias";
$stmt = $db->prepare($sql);
$stmt->execute();
$categorias = $stmt->fetchAll(PDO::FETCH_OBJ);
?>


<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($categorias as $categoria):?>
        <tr>
            <td> <?=$categoria->nome ?> </td>
            <td> <?=$categoria->descricao ?> </td>
            <td> <a href="#">Editar</a> </td>
            <td> <a href="#">Remover</a> </td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>



<?php include 'footer.php'; ?>
