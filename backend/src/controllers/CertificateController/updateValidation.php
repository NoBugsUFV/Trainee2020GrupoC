<?php
    $codigoRegistro = $_POST['codigoRegistro'];
    $valido = $_POST['valido'];

    include '../../database/connection.php';
      
    $sql = "UPDATE certificado
    SET valido='$valido'
    WHERE codigoRegistro = '$codigoRegistro'";
    $result = $conn->query($sql);

    if ($result) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar registro!";
    }
    $conn->close();
?>