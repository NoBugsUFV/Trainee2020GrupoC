<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Certificados</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/colors.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="styles.css">
    
    <script type="text/javascript">
        
    </script>
</head>
<body>
    <div class="ui container">
        <h2 class="ui dividing header">Cadastro de Certificados</h2>

        <div class="ui breadcrumb">
            <div class="section" style="margin-right: 7px;">Você está em:</div>
            <a class="section" href="../Home/">Home</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="../AdmLogin/">Login</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="../AdmPage">Gerenciador de Certificados</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Cadastro de Certificados</div>
        </div>


        <div class="ui divider"></div>

        <p>Cadastre os certificados corretamente</p>

        <div class="ui form">
            <form method='POST' action='../../../backend/src/controllers/CertificateController/insert.php'>
                <div class="field">
                    <label>CPF:</label>
                    <p class="fonte-cinza small">Informe um CPF válido</p>
                    <div class="ui input">
                        <input type="text" name="cpf" id="cpf" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Informe o CPF ..." autofocus required>
                    </div>
                </div>

                <div class="ui checkbox field">
                    <input type="checkbox" id='valido' name='valido'>
                    <label>Validar certificado</label>
                </div>
            
                <div class="field">
                    <label>Descrição do certificado</label>
                    <textarea placeholder="https://www.instagram.com/p/B3UuvEbFCHs/" id='descricao' name='descricao'></textarea>
                </div>

                <div class="field">
                    <label>Arquivo do PDF</label>
                    <div class="ui input">
                        <input type="file" id="arquivo" name="arquivo">        
                    </div>
                </div>

                <button id="buttonLoginSubmit" class='ui button blue large right labeled icon'><i class="chevron right icon"></i>Registrar Certificado</button>
        </form>
    <div>
</div>
</body>
</html>