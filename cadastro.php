<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TruckWorld</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="icon" href="image/ico.ico">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                    ?>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if(isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>
                    <div class="box">
                    <img  src="image/logo3.png">
                        <form action="cadastrar.php" method="POST">

                            
                        
                        <div class="field">
                                <div class="control">
                                    <input name="cpf" type="text" class="input is-large" placeholder="CPF" autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuario" autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="cep" type="text" class="input is-large" placeholder="Cep" autofocus>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="celular" type="text" class="input is-large" placeholder="Celular">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="telefone" type="text" class="input is-large" placeholder="Telefone">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="cnh" type="text" class="input is-large" placeholder="CNH">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="categoria" type="text" class="input is-large" placeholder="Categoria">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="marca" type="text" class="input is-large" placeholder="Marca">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="modelo" type="text" class="input is-large" placeholder="Modelo">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="carroceria" type="text" class="input is-large" placeholder="Carroceria">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="placa" type="text" class="input is-large" placeholder="Placa">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="media" type="number" class="input is-large" placeholder="Media">
                                </div>
                            </div>
                    

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>







                            <div class="field">Já tem cadastro?
                                <a href="index.php" classe="field2">Clique aqui!</a>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>