<?php
include 'header.php';
include 'Connection.php';
?>
<h5>Novo Item</h5>

<p><a href="categorias.php" title="Voltar para Itens">Itens</a></p>

<form action="itens_form.php" method="POST">
    <h6>Dados Principais</h6>
    <input type="hidden" name="id" id="id" value="<?=$dados['id'];?>">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?=$dados['nome']; ?>" autocomplete="off" placeholder="Tábua de Frios, Pirarucu Grelhado">
    </div>
    <div>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" rows="8" cols="40"><?=$dados['descricao']; ?></textarea>
    </div>
    <div>
        <label for="sugestao_item">Sugerir um outro item a venda:</label>
        <select class="" name="">
            <option value="">Item</option>
        </select>
    </div>
    <div>
        <label for="sugestao_descricao">Sugerir um item não a venda</label>
        <input type="text" name="sugestao_descricao" id="sugestao_descricao" placeholder="Ex.: Vinho Chardonnay">
    </div>

    <h6>Preços</h6>

    <div class="">
        <label for="valor">Valor</label>
        <input type="number" step="2" name="" >
    </div>



    <div>
        <input type="submit" value="Salvar" id="btnCatSalvar">
    </div>
</form>
