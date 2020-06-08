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
    <link rel="stylesheet" href="./styles.css">
    
    
    <script type="text/javascript">

        const codigoRegistro = <?php echo $codigoRegistro;?>;

        function navigateToCertificateDetails(){
            window.location.href="../Home/"
        }

        function handleCertificateDownload(){
            window.open('https://expoforest.com.br/wp-content/uploads/2017/05/exemplo.pdf', '_blank');
        }
        
        function navigateToCertificateDetails_Adm(){
            window.location.href='../CertificateDetails_Adm/?codigoRegistro='+codigoRegistro;
        }
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
            <a class="section" onclick='navigateToCertificateDetails_Adm()'>Detalhes dos Certificados dos Usuários</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Edição dos Certificados</div>
        </div>

        <div class="ui divider"></div>

        <div class="ui form">
            <form method="post" action='../../../backend/src/controllers/CertificateController/update.php'>
                <div class="two field">
                    <div class="field">
                        <label>CPF:</label>
                        <div class="ui input">
                            <input readonly type="text" name="cpf" id="cpf" required>
                        </div>
                    </div>
                    <div class="field">
                        <label>Código de Registro:</label>
                        <div class="ui input">
                            <input readonly type="text" name="codigoRegistro" id="codigoRegistro" required>
                        </div>
                    </div>
                </div>

                <div class="ui checkbox field">
                    <input type="checkbox" id='valido' name='valido'>
                    <label>Validar certificado</label>
                </div>

                <div class="field">
                    <label>Descrição do certificado:</label>
                    <textarea placeholder="Descrição do Certificado ..." id='descricao' name='descricao' required></textarea>
                </div>
                
                <button id="buttonLoginSubmit" class='ui button blue large right labeled icon'><i class="chevron right icon"></i>Atualizar Dados</button>
                
        </form>
    </div>
</body>
</html>


<script>
    function handleCertificates(codigoRegistro){
        $.post("../../../backend/src/controllers/CertificateController/select.php",{
            codigoRegistro:codigoRegistro
        }).done(function(response){
            var data = JSON.parse(response);
            console.log(response);
            if(data[4] == "1")
                document.getElementById("valido").checked = true;
            else   
                document.getElementById("valido").checked = false;

            document.getElementById("cpf").value = data[0];
            document.getElementById("codigoRegistro").value = data[1];
            document.getElementById("descricao").value = data[3];
        });
    }
    document.onload = handleCertificates(codigoRegistro);
</script>