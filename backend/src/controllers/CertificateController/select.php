<?php
    // $codigoRegistro = $_POST['codigoRegistro'];
    $codigoRegistro="1";
    include '../../database/connection.php';
      
    $sql = "SELECT * FROM certificado where codigoRegistro='$codigoRegistro';";
    $result = $conn->query($sql);

    $resultado = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($resultado,$row['cpf']);
            array_push($resultado,$row['codigoRegistro']);
            array_push($resultado,$row['dataRegistro']);
            array_push($resultado,$row['descricao']);
            array_push($resultado,$row['valido']);
            array_push($resultado,$row['arquivo']);
        }
    } else {
        echo "0 results";
    }
    echo json_encode($resultado);
    $conn->close();
?>