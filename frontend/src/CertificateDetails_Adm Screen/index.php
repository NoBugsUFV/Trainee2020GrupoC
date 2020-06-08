<?php
    $codigoRegistro = $_GET['codigoRegistro'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Certificados dos Usuários</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/colors.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="styles.css">
    
    
    <script type="text/javascript">
        function navigateToCertificateDetails(){
            window.location.href="../Home/"
        }

        function handleCertificateDownload(){
            window.open('https://expoforest.com.br/wp-content/uploads/2017/05/exemplo.pdf', '_blank');
        }
        
        function navigateToEditCertificate(){
            window.location.href="../EditCertificate/" /* link pra tela de editar os dados*/
        }

        const codigoRegistro = <?php echo $codigoRegistro;?>;
    </script>
</head>
<body>
    <div class="ui container">
        <h2 class="ui dividing header">Detalhes do Certificado</h2>

        <div class="ui breadcrumb">
            <div class="section" style="margin-right: 7px;">Você está em:</div>
            <a class="section" href="../Home/">Home</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="../AdmLogin/">Login</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="../AdmPage/">Gerenciador de Certificados</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="../CertificatesValidation/">Validação de Certificados</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Detalhes dos Certificados dos Usuários</div>
        </div>

        <div class="ui divider"></div>

        <p>Visualize os detalhes do certificado:</p>
        <div class="group">
            <p class="bold medium label">CPF:</p>
            <p id="txt_cpf"></p>
        </div>
        <div class="group">
            <p class="bold medium label">Código de Registro:</p>
            <p id="txt_codigoRegistro"></p>
        </div>
        <div class="group">
            <p class="bold medium label">Data de Registro:</p>
            <p id="txt_dataRegistro"></p>
        </div>
        <div class="group">
            <p class="bold medium label">Válido:</p>
            <p id="txt_valido"></p>
        </div>
        <div class="group">
            <p class="bold medium label">Descrição:</p>
            <p id="txt_descricao"></p>
        </div>
        <div class="group">
            <p class="bold medium label">Certificado:</p>
            <p class="font-cinza small">Baixe o certificado por aqui</p>
            <button class="ui button blue" onclick="handleCertificateDownload()">Baixar PDF</button>
            <button class="ui button blue" onclick="navigateToEditCertificate()">Editar dados</button> 
        </div>
 
 
    </div>
</body>
</html>

<script>
    function handleCertificates(id){
        $.post("../../../backend/src/controllers/CertificateController/select.php",{
            codigoRegistro:codigoRegistro
        }).done(function(response){
            var data = JSON.parse(response);
            console.log(response);
            let valido = "";
                if(data[4] == "1")
                    valido = "Sim"
                else   
                    valido="Não"
            document.getElementById("txt_cpf").innerHTML = data[0];
            document.getElementById("txt_codigoRegistro").innerHTML = data[1];
            document.getElementById("txt_dataRegistro").innerHTML = data[2];
            document.getElementById("txt_valido").innerHTML = valido;
            document.getElementById("txt_descricao").innerHTML = data[3];
        });
    }
    document.onload = handleCertificates(codigoRegistro);
</script>