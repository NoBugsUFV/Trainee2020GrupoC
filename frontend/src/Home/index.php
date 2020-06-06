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
    <link rel="stylesheet" href="./styles.css">

    <script type="text/javascript">
        function navigateToUserLogin()
        {
            location.href="../UserLogin/"
        }

        function navigateToAdmLogin()
        {
            location.href="../AdmLogin/"
        }
    </script>

</head>
<body>
    <div class="ui container">
<<<<<<< HEAD
        <h1 class="ui  center aligned">Sistema de Gerenciamento de Certificadosgu</h1>
=======
        <h1 class="ui dividing header"> Sistema de Gerenciamento de Certificados</h1>
>>>>>>> aa2032ae6edbf56cccb536429b20d7bfc15aa70a

        <div class="ui breadcrumb">
            <div class="section" style="margin-right: 7px;">Você está em:</div>
            <div class="active section">Home</div>
        </div>

        <div class="ui divider"></div>

        <div class="ui internally celled grid">
            <div class="row">
                <div class="eight wide column center aligned ">
                    <h2 class="ui second header">Usuários</h3>
                    <p>Visualize todos os seus certificados</p>
                    <button class='ui button large blue labeled icon' onclick="navigateToUserLogin()" ><i class="envelope icon"></i>Meus certificados</button>
                </div>
                <div class="eight wide column center aligned ">
                    <h2 class="ui second header">Administradores</h3>
                    <p>Gerencie os certificados dos alunos</p>
                    <button class='ui button large blue labeled icon' onclick="navigateToAdmLogin()"><i class="cog icon"></i>Gerenciar certificados</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>