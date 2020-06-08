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
            location.href="../EditCertificate/" /* link pra tela de editar os dados*/
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
            <a class="section" href="../CertificateDetails_Adm Screen/">Detalhes dos Certificados dos Usuários</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Edição dos Certificados</div>
        </div>

        <div class="ui divider"></div>

        <div class="ui form">
            <form>
                <div class="field">
                    <label>CPF</label>
                    <div class="ui input">
                        <input readonly type="text" name="cpf" id="cpf" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  autofocus required>
                    </div>
                <div>
             
            
                <div class="field">
                    <label>Descrição do certificado</label>
                    <textarea placeholder="Nova Descrição do Certificado"></textarea>
                <div>

                <div class="field">
                    <label>Arquivo do PDF</label>
                    <div class="ui input">
                        <input type="file" placeholder="PDF">        
                    </div>
                <div>

                <div class="field">
                    <label>Salvar do certificado</label>
                    <button class="ui primary button">
                        Save
                    </button>
                    <button class="ui button">
                        Discard
                    </button>
                <div>
        </form>
    </div>
</body>
</html>