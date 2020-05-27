<?php
    $cpf = $_POST['cpf'];
    
    include '../../database/connection.php';
      
    $sql = "SELECT cpf FROM usuario where cpf = '$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<script>localStorage.setItem('cpf', '$cpf');</script>";
            echo "<script>window.location = '../../../../frontend/src/UserCertificates/';</script>";
        }
    } else {
        echo "<script>alert('o CPF $cpf não consta na base de dados.')</script>";
        echo "<script>window.location = '../../../../frontend/src/UserLogin/';</script>";
    }
    $conn->close();
?>