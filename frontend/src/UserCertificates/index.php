<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Meus Certificados</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/colors.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="styles.css">
    
    <script type="text/javascript">
        function navigateToCertificateDetails(){
            window.location.href="../CertificateDetails/"
        }

        const cpf = localStorage.getItem('cpf');
        
        

        const certificados = [
            {
                codigoRegistro: "DDD7R788Y",
                dataRegistro:"2020-05-05",
                validado: "Sim",
                descricao: "VI Semana Nacional de Ciência e Tecnologia - Minicurso de Inteligência Artificial"
            },
            {
                codigoRegistro: "TYDQR456G",
                dataRegistro:"2019-04-27",
                validado: "Sim",
                descricao: "V Semana Nacional de Ciência e Tecnologia - Minicurso de Estrutura de Dados"
            }
        ]

       

        


    </script>
</head>
<body>
    <div class="ui container">
        <h2 class="ui dividing header">Meus Certificados</h2>

        <div class="ui breadcrumb">
            <div class="section" style="margin-right: 7px;">Você está em:</div>
            <a class="section" href="../Home/">Home</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="../UserLogin/">Login</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Meus Certificados</div>
        </div>

        <div class="ui divider"></div>

        <p>Visualize todos seus certificados</p>
        
        <table class="ui single line table blue" id="tableCertificates">
            <thead>
                <th style="width:35%;">Código de Registro</th>
                <th style="width:35%;">Data de Registro</th>
                <th style="width:15%;">Válido</th>
                <th style="width:15%;"></th>
            </thead>
        </table>

    </div>
</body>
</html>

<script>
    function adicionaLinha(codigoRegistro, dataRegistro, validado) {
        var tabela = document.getElementById("tableCertificates");
        var numeroLinhas = tabela.rows.length;
        var linha = tabela.insertRow(numeroLinhas);
        var celula1 = linha.insertCell(0);
        var celula2 = linha.insertCell(1);   
        var celula3 = linha.insertCell(2); 
        var celula4 = linha.insertCell(3);
        celula1.innerHTML = `<p>${codigoRegistro}</p>`;
        celula2.innerHTML = `<p>${dataRegistro}</p>`;
        celula3.innerHTML = `<p>${validado}</p>`;
        celula4.innerHTML = `<button class="ui button blue tiny" onclick="navigateToCertificateDetails()">Mais Informações e Download</button>`;
    }

    function handleCertificates(cpf){
        $.post("../../../backend/src/controllers/UserCertificatesController/select.php",{
            cpf:cpf
        },function(response){
            var data = JSON.parse(response);
            for (var i = 0; i < data.length; i++) {
                let valido = "";
                if(data[i][4] == 1)
                    valido = "Sim"
                else   
                    valido="Não"
                adicionaLinha(data[i][1], data[i][2], valido);
            }

        })
    }

    document.onload = handleCertificates(cpf);
</script>