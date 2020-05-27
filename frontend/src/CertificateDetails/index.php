<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Certificados</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
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

        const certificado ={
            codigoRegistro: "DDD7R788Y",
            dataRegistro:"2020-05-05",
            valido: "Sim",
            descricao: "VI Semana Nacional de Ciência e Tecnologia - Minicurso de Inteligência Artificial"
        };
    </script>
</head>
<body>
    <div class="ui container">
        <h2 class="ui dividing header">Detalhes do Certificado</h2>

        <div class="ui breadcrumb">
            <div class="section" style="margin-right: 7px;">Você está em:</div>
            <a class="section" href="../Home/">Home</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="../UserLogin/">Login</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="../UserCertificates/">Meus Certificados</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Detalhes do Certificados</div>
        </div>

        <div class="ui divider"></div>

        <p>Visualize os detalhes do certificado:</p>
        
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
        </div>

    </div>
</body>
</html>

<script>
    document.getElementById("txt_codigoRegistro").innerHTML = certificado.codigoRegistro;
    document.getElementById("txt_dataRegistro").innerHTML = certificado.dataRegistro;
    document.getElementById("txt_valido").innerHTML = certificado.valido;
    document.getElementById("txt_descricao").innerHTML = certificado.descricao;
</script>