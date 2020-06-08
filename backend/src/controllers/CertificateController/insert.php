<?php
    $valido = false;

    if (!empty($_POST["valido"])) {
        $valido = true;    
    }
    
    $descricao = $_POST['descricao'];
    $cpf = $_POST['cpf'];
    $dataRegistro = date('Y-m-d');
    $arquivo = 'upload/arquivo.pdf';
    include '../../database/connection.php';

    $sql = "INSERT INTO certificado (dataRegistro, valido, descricao, arquivo, cpf)
    VALUES ('$dataRegistro', '$valido', '$descricao', '$arquivo', '$cpf');";
    $result = $conn->query($sql);
    if ($result) {
        echo "<script>alert('Registro cadastrado com sucesso!')</script>";
        echo "<script>window.location = '../../../../frontend/src/AdmPage/';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar registro!')</script>";
        echo "<script>window.location = '../../../../frontend/src/CertificateRegistration/';</script>";
    }
    $conn->close();
?>