<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Restante do código de validação de upload...
// ...

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";

    include_once "conexao.php";
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $modelo = $_POST['modelo'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $nomeFoto = mysqli_real_escape_string($conexao, $_FILES["fileToUpload"]["name"]);

    // Use Prepared Statements para inserir os dados de forma segura
    $sql_inserir = "INSERT INTO tb_produto_lojinho (marca, ano, modelo, preco, descricao, imagem) VALUES (?, ?, ?, ?, ?, ?)";

    // Preparar a consulta
    $stmt = mysqli_prepare($conexao, $sql_inserir);

    // Vincular parâmetros e seus tipos
    mysqli_stmt_bind_param($stmt, "ssssss", $marca, $ano, $modelo, $preco, $descricao, $nomeFoto);

    // Executar a consulta
    if (mysqli_stmt_execute($stmt)) {
        echo "Produto inserido com sucesso no banco de dados.";
    } else {
        echo "Erro ao inserir o produto no banco de dados: " . mysqli_error($conexao);
    }

    // Fechar a consulta preparada
    mysqli_stmt_close($stmt);
    mysqli_close($conexao);
} else {
    echo "Sorry, there was an error uploading your file.";
}
header("location:lending2.php?msg=invalido");
?>
