<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Landing Page de Venda de Violões Usados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .product {
      display: flex;
      margin-bottom: 40px;
    }

    .product-image {
      flex: 1;
    }

    .product-details {
      flex: 2;
      padding-left: 20px;
    }

    .product-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .product-info {
      margin-bottom: 10px;
    }

    .product-info span {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <?php
  include_once "menu.php";
  include_once "conexao.php";
  $sql_select = "SELECT * FROM tb_produto_lojinho";
  $resultado = mysqli_query($conexao, $sql_select);
  ?>

  <div class="container">
    <h1>Dados da Tabela</h1>

    <?php
    if (mysqli_num_rows($resultado) > 0) {
      echo '<div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Marca</th>
                    <th>Ano</th>
                    <th>Modelo</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody>';

      while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>{$row['marca']}</td>
                <td>{$row['ano']}</td>
                <td>{$row['modelo']}</td>
                <td>{$row['preco']}</td>
                <td>{$row['descricao']}</td>
                <td><img src='uploads/{$row['imagem']}' width='100' height='100'></td>
                <td><a href='#' class='btn btn-primary'>Comprar</a></td>
              </tr>";
      }

      echo '</tbody>
          </table>
        </div>';
    } else {
      echo "<p class='text-center'>Nenhum dado encontrado na tabela.</p>";
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
    ?>
  </div>
</body>

</html>
