<?php include('cabecalho.php');
include('conecta.php');
include('banco-produto.php');
if(array_key_exists("removido", $_GET)&&$_GET["removido"]=="true"){
  ?>
  <p class="alert-success">Produto removido com sucesso</p>

  <?php
}
?>
<table class="table table-striped">
  <tr>
    <thead>
      <th>Produto</th>
      <th>Preço</th>
      <th>Descrição</th>
    </thead>
  </tr>
<?php $produtos = listaProdutos($conexao);
foreach ($produtos as $produto) {?>
  <tr>
    <td><?=$produto['nome']?></td>
    <td><?=$produto['preco']?></td>
    <td><?=substr($produto['descricao'],0, 40)?></td>
    <td><?=$produto['categoria_nome']?>
    <td>
      <form action="remove-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <button class="btn btn-danger">Remover</button>
      </form>
    </td>
  </tr>
<?php }
?>
</table>
<?php include('rodape.php')?>
