<?php
    $cpf = "11111111111";
    include '../../database/connection.php';
      
    $sql = "INSERT INTO usuario (cpf)
    VALUES ('$cpf')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>