<?php function listaProdutos($conexao){
  $produtos = [];
  $resultado = mysqli_query($conexao, "SELECT p.*, c.nome as categoria_nome FROM produtos as p join categorias as c on c.id=p.categoria_id ");
  while($produto = mysqli_fetch_assoc($resultado)){
    array_push($produtos,$produto);
  }
  return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado)
    values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
    $resultado = mysqli_query($conexao, $query);

    return $resultado;
}


function removeProduto($conexao, $id){
  $query = "DELETE FROM produtos WHERE id = {$id}";
  return mysqli_query($conexao, $query);
}
