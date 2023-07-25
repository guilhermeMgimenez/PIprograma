<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="cadastra.css">

<title>Cadastro de Violão Usado</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<h1>Cadastro de Violão Usado</h1>
<form action="processar_formulario.php" method="POST" enctype="multipart/form-data">
<label for="marca">Marca:</label>
<input type="text" id="marca" name="marca" required>

<label for="ano">ano de fabricação:</label>
<input type="text" id="ano" name="ano" required>

<label for="modelo">Modelo:</label>
<input type="text" id="modelo" name="modelo" required>

<label for="preco">Preço:</label>
<input type="number" id="preco" name="preco" min="0.01" step="0.01" required>

<label for="descricao">Descrição:</label>
<textarea id="descricao" name="descricao" rows="4" required></textarea>

<label for="imagem">Imagem:</label>
<input type="file" name="fileToUpload" required>

<button type="submit">Cadastrar</button>
</form>
</div>
</body>
</html>