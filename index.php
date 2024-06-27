<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>App Chamados</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-color:#A9A9F5;
        }

        #conteiner {
            width: 400px;
            height: 300px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            margin: 0 auto;
            margin-top: 120px;
            text-align: center;
        }

        #conteiner img {
            width: 120px;
            height: 120px;
            margin-top: -60px;
            margin-bottom: 30px;
        }

        input {
            height: 40px;
            width: 80%;
            font-size: 18px;
            margin-bottom: 10px;
            background-color: #fff;
            padding-left: 40px;
            border: nome;
            background-repeat: no-repeat;
            background-position: 10px;
        }

        input.email {
            background-image: url(icone-usuario.png);
        }

        input.senha {
            background-image: url(icone-cadeado.png);
        }

        input.submit {
            color: white;
            background-color: blue;
            border: 2px solid black;
            height: 45px;
            width: 90%;
            cursor: pointer;
        }
        
        .text-danger {
            color: red;
        }

    </style>
</head>
<body>

    <div id="conteiner">
    
        <img src="perfil.png">

        <form action="valida_login.php" method="post">
        
            <div>
                <input name="email" class="email" type="email" placeholder="Digite seu email">
            </div>

            <div>
                <input name="senha" class="senha" type="password" placeholder="Digite sua senha">
            </div>

                <?php
                
                    if(isset($_GET['login']) && $_GET['login'] == 'erro') { 

                ?>

                 <div class="text-danger">
                        Usuário ou senha inválido(s)
                 </div>

                <?php } ?>

            <div>
                <input class="submit" type="submit" value="Entrar">
            </div>

        </form>

    </div>

</body>
</html>