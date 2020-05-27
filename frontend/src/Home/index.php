<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/colors.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    
    <script type="text/javascript">
        function navigateToUserLogin()
        {
            location.href="../UserLogin/"
        }

        
    </script>

</head>
<body>
    <div class="ui container">
        <h1 class="ui  center aligned">Sistema de Gerenciamento de Certificados</h1>

        <div class="ui breadcrumb">
            <div class="section" style="margin-right: 7px;">Você está em:</div>
            <div class="active section">Home</div>
        </div>

        <div class="ui internally celled grid">
            <div class="row">
                <div class="eight wide column center aligned ">
                    <h3 class="ui second header">Usuários</h3>
                    <p>Visualize todos os seus certificados</p>
                    <button class='ui button blue' onclick="navigateToUserLogin()" >Meus certificados</button>
                </div>
                <div class="eight wide column center aligned ">
                    <h3 class="ui second header">Administradores</h3>
                    <p>Gerencie os certificados dos usuários</p>
                    <button class='ui button blue'>Gerenciar certificados</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>