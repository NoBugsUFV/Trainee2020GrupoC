<?php
    $valido = false;

    if (!empty($_POST["valido"])) {
        $valido = true;    
    }
    $codigoRegistro = $_POST['codigoRegistro'];
    $descricao = $_POST['descricao'];

    include '../../database/connection.php';
      
    $sql = "UPDATE certificado
    SET valido='$valido',
    descricao='$descricao'
    WHERE codigoRegistro = '$codigoRegistro'";
    $result = $conn->query($sql);

    if ($result) {
        echo "<script>alert('Registro atualizado com sucesso!')</script>";
        echo "<script>window.location = '../../../../frontend/src/CertificateDetails_Adm/?codigoRegistro=". $codigoRegistro . ";'</script>";
    } else {
        echo "<script>alert('Erro ao atualizar registro!')</script>";
        echo "<script>window.location = '../../../../frontend/src/EditCertificate/?codigoRegistro=". $codigoRegistro . ";'</script>";
    }
    $conn->close();
?>