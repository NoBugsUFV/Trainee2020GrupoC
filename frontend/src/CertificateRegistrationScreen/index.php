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
        function navigateToCertificatesValidation(){
            window.location.href='../CertificatesValidation/';
        }

        const id = String(localStorage.getItem('id'));
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
            <form>
                <div class="field">
                    <label>CPF</label>
                    <div class="ui input">
                        <input type="text" name="cpf" id="cpf" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Informe seu CPF ..." autofocus required>
                    </div>
                <div>

                
            
                <div class="field">
                    <label>Descrição do certificado</label>
                    <textarea placeholder="https://www.instagram.com/p/B3UuvEbFCHs/?utm_source=ig_web_copy_link"></textarea>
                <div>

                <div class="field">
                    <label>Arquivo do PDF</label>
                    <div class="ui input">
                        <input type="file" placeholder="PDF">        
                    </div>
                <div>

                <div class="field">
                    <label>Validação do certificado</label>
                    <div class="ui buttons">
                        <button class="ui button">Desvalidado</button>
                        <div class="or" data-text="ou"></div>
                    <button class="ui blue button">Validado</button>
                <div>
        </form>
    <div>
</div>
</body>
</html>