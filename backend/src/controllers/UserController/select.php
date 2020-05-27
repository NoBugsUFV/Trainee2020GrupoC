<?php
    include '../../database/connection.php';
      
    $sql = "SELECT cpf FROM usuario";
    $result = $conn->query($sql);

    $resultado = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($resultado,$row['cpf']);
        }
    } else {
        echo "0 results";
    }
    echo json_encode($resultado);
    $conn->close();
?>