<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/colors.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="styles.css">
    
    <script type="text/javascript">
        var num1 = Math.floor(Math.random() * 10);
        var num2 = Math.floor(Math.random() * 10);
        var resposta = num1 + num2;

        window.onload = function () {
            document.getElementById("labelInputCaptcha").innerHTML = num1 + " + " + num2 + " = ";
        }

        function sumVerification(){
            var soma = document.getElementById("txt_soma").value;
            if(soma != resposta){
                document.getElementById("buttonLoginSubmit").classList.add("disabled");
            }else{
                document.getElementById("buttonLoginSubmit").classList.remove("disabled");
            }
        }
    </script>
</head>
<body>
    <div class="ui container">
        <h2 class="ui dividing header">Faça seu Login</h2>

        <div class="ui breadcrumb">
            <div class="section" style="margin-right: 7px;">Você está em:</div>
            <a class="section" href="../Home/">Home</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Login</div>
        </div>

        <div class="ui divider"></div>

        <p>Para prosseguir preencha os seguintes campos corretamente:</p>
        
        <form action="../../../backend/src/controllers/SessionController/userSession.php" method="POST" id="form" class="ui form">
            <div class="field">
                <label for="txt_name">CPF:*</label>
                <p class="fonte-cinza small">Somente números</p>
                <div class="ui input">
                    <input type="text" name="cpf" id="cpf" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Informe seu CPF ..." autofocus required>
                </div>
            </div>
                
            <div class="field">
                <label for="txt_numMatricula">Captcha:*</label>
                <p class="fonte-cinza small">Digite os caracteres presentes na imagem</p>
                <div class="ui labeled input">
                    <div class="ui label">
                        <span id="labelInputCaptcha"></span>
                    </div>
                    <input type="text" id="txt_soma" id="buttonFormSubmit" onchange="sumVerification()" placeholder="Informe a soma correta ...">
                </div>
            </div>

            <button id="buttonLoginSubmit" onclick="handleLogin()" class='ui button blue disabled'>Entrar</button>

        </form>


    </div>
</body>
</html>