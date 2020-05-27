<?php
    $id = $_POST['id'];
    // $id="1";
    include '../../database/connection.php';
      
    $sql = "SELECT * FROM certificado where id='$id';";
    $result = $conn->query($sql);

    $resultado = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($resultado,$row['cpf']);
            array_push($resultado,$row['id']);
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