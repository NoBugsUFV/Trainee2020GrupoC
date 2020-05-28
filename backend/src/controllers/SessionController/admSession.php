<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    include '../../database/connection.php';
      
    $sql = "SELECT * FROM administrador where email = '$email' and senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<script>localStorage.setItem('id', '$row[id]');</script>";
            echo "<script>window.location = '../../../../frontend/src/AdmPage/';</script>";
        }
    } else {
        echo "<script>alert('Email ou senha incorretos!')</script>";
        echo "<script>window.location = '../../../../frontend/src/AdmLogin/';</script>";
    }
    $conn->close();
?>