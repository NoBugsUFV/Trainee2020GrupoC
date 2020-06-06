<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adm Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/colors.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="styles.css">   
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

        <div class="ui grid">
            <div class="five wide column">
                
            </div>
            <div class="six wide column" id="test">
                <form action="../../../backend/src/controllers/SessionController/admSession.php" method="POST" id="form" class="ui form">
                    <div class="field">
                        <label for="txt_name">E-mail:*</label>
                        <div class="ui input">
                            <input id= "testInput" type="email" name="email" id="email" placeholder="Informe seu e-mail ..." autofocus required>
                        </div>
                    </div>
                        
                    <div class="field">
                        <label for="txt_numMatricula">Senha:*</label>
                        <div class="ui input">
                            <input type="password" name="senha" id="senha" placeholder="Informe sua senha ..." autofocus required>
                        </div>
                    </div>

                    <button id="buttonLoginSubmit" class='ui button blue large right labeled icon'><i class="chevron right icon"></i>Entrar</button>
                </form>
            </div>
            <div class="five wide column">
                
            </div>
        </div>
        
        


    </div>
</body>
</html>