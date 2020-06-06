<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Certificados</title>

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
        <h2 class="ui dividing header">Gerenciador de Certificados</h2>

        <div class="ui breadcrumb">
            <div class="section" style="margin-right: 7px;">Você está em:</div>
            <a class="section" href="../Home/">Home</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="../AdmLogin/">Login</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Gerenciador de Certificados</div>
        </div>

        <div class="ui divider"></div>

        <p>Gerencie os certificados.</p>
        <!-- <p>Você pode validar ou desvalidar um certificado (<a href="../AdmLogin/">clique aqui</a>) ou adicionar um certificado a um usuário (<a href="../AdmLogin/">clique aqui</a>)</p> -->

        <div class="ui internally celled grid">
            <div class="row">
                <div class="eight wide column center aligned ">
                    <h3 class="ui second header">Validação de Certificados</h3>
                    <p>Você pode validar ou desvalidar um certificado (clique no botão abaixo):</p>
                    <button class='ui button large blue labeled icon' onclick="navigateToCertificatesValidation()"><i class="cog icon"></i>Gerenciar Validação de Certificados</button>
                </div>
                <div class="eight wide column center aligned ">
                    <h3 class="ui second header">Cadastro de Certificados</h3>
                    <p>Você pode vincular ou desvincular um certificado a um usuário (clique no botão abaixo):</p>
                    <button class='ui button large blue labeled icon' onclick="navigateToGerenciarCertificados()"><i class="cog icon"></i>Gerenciar Cadastro de Ceritificados</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>