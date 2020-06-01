<?php
    $cpf = $_POST['cpf'];
    include '../../database/connection.php';
      
    $sql = "SELECT certificado.* FROM certificado
        INNER JOIN usuario
        ON certificado.cpf = usuario.cpf 
        WHERE usuario.cpf='$cpf'";
    $result = $conn->query($sql);

    $resultado = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $itemTable = array();

            array_push($itemTable,$row['codigoRegistro']);
            array_push($itemTable,$row['dataRegistro']);
            array_push($itemTable,$row['descricao']);
            array_push($itemTable,$row['valido']);
            array_push($itemTable,$row['arquivo']);

            array_push($resultado,$itemTable);
        }
    } else {
        echo "0 results";
    }
    echo json_encode($resultado);
    $conn->close();
?>