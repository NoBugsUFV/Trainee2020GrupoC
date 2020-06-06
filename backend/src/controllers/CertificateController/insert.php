<?php

    $valido = $_POST['valido'];
    $descricao = $_POST['descricao'];
    $cpf = $_POST['cpf'];
    $dataRegistro = date('Y-m-d');v 
    $arquivo = 'upload/arquivo.pdf';

    include '../../database/connection.php';

    $sql = "INSERT INTO certificado (dataRegistro, valido, descricao, arquivo, cpf)
    VALUES ('$dataRegistro', '$valido', '$descricao', '$arquivo', '$cpf');";
    $result = $conn->query($sql);

    if ($result) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar registro!";
    }
    $conn->close();
?>