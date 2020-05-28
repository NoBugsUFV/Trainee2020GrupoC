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
        function navigateToCertificateDetails(id){
            // alert(id);
            window.location.href='../CertificateDetails/?id='+id;
        }

        const cpf = String(localStorage.getItem('cpf'));
    </script>
</head>
<body>
    <div class="ui container">
        <h2 class="ui dividing header">Meus Certificados</h2>

        <div class="ui breadcrumb">
            <div class="section" style="margin-right: 7px;">Você está em:</div>
            <a class="section" href="../Home/">Home</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="../AdmLogin/">Login</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="../AdmPage/">Gerenciador de Certificados</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Meus Certificados</div>
        </div>

        <div class="ui divider"></div>

        <p>Visualize todos seus certificados</p>
        <div class="ui internally celled grid">
            <div class="row">
                <div class="eight wide column center aligned ">
                    <h3 class="ui second header">Certificados Validados</h3>
                    <table class="ui single line table blue" id="tableValidatedCertificates">
                        <thead>
                            <th style="width:40%;">CPF vinculado</th>
                            <th style="width:40%;">Código de Registro</th>
                            <th style="width:10%;"></th>
                            <th style="width:10%;"></th>
                        </thead>
                    </table>
                </div>
                <div class="eight wide column center aligned ">
                    <h3 class="ui second header">Certificados Não Validados</h3>
                    <table class="ui single line table blue" id="tableNotValidatedCertificates">
                        <thead>
                            <th style="width:40%;">CPF vinculado</th>
                            <th style="width:40%;">Código de Registro</th>
                            <th style="width:10%;"></th>
                            <th style="width:10%;"></th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        
       

    </div>
</body>
</html>

<script>
    function adicionaLinhaValidados(id, cpf, codigoRegistro, dataRegistro) {
        var tabela = document.getElementById("tableValidatedCertificates");
        var numeroLinhas = tabela.rows.length;
        var linha = tabela.insertRow(numeroLinhas);
        var celula1 = linha.insertCell(0);
        var celula2 = linha.insertCell(1);
        var celula3 = linha.insertCell(2);   
        var celula4 = linha.insertCell(3); 
        celula1.innerHTML = `<p>${cpf}</p>`;
        celula2.innerHTML = `<p>${codigoRegistro}</p>`;
        celula3.innerHTML = `<button class="ui button blue tiny" onclick="navigateToCertificateDetails(${id})">Detalhes</button>`;
        celula4.innerHTML = `<button class="ui button blue tiny" onclick="navigateToCertificateDetails(${id})">Desvalidar</button>`;
    }

    function adicionaLinhaNaoValidados(id, cpf, codigoRegistro, dataRegistro) {
        var tabela = document.getElementById("tableNotValidatedCertificates");
        var numeroLinhas = tabela.rows.length;
        var linha = tabela.insertRow(numeroLinhas);
        var celula1 = linha.insertCell(0);
        var celula2 = linha.insertCell(1);
        var celula3 = linha.insertCell(2);   
        var celula4 = linha.insertCell(3); 
        celula1.innerHTML = `<p>${cpf}</p>`;
        celula2.innerHTML = `<p>${codigoRegistro}</p>`;
        celula3.innerHTML = `<button class="ui button blue tiny" onclick="navigateToCertificateDetails(${id})">Detalhes</button>`;
        celula4.innerHTML = `<button class="ui button blue tiny" onclick="navigateToCertificateDetails(${id})">Validar</button>`;
    }

    function handleCertificates(){
        $.post("../../../backend/src/controllers/CertificateController/selectAll.php",{
            
        }).done(function(response){
            var data = JSON.parse(response);
            console.log(data);
            for (var i = 0; i < data.length; i++) {
                let valido = "";
                if(data[i][4] == 1){
                    valido = "Sim";
                    // alert('boa');
                    adicionaLinhaValidados(data[i][0], data[i][1], data[i][2], data[i][3]);
                }else {
                    valido="Não"
                    adicionaLinhaNaoValidados(data[i][0], data[i][1], data[i][2]);
                }  
            }

        });
    }
    document.onload = handleCertificates();
</script>