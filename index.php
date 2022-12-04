<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/geral.css">

    <style>
        input[type="email"] {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;

        }

        input[type="password"] {
            border-top-right-radius: 0px;
            border-top-left-radius: 0px;
            border-top: 0px;
        }
    </style>
    <title>Login Usuário</title>
</head>

<body>


    <div class="container text-center mt-5">
        <form action="config/valida_login.php" method="POST" style="margin: auto; max-width:320px;">
            <img class="mt-4 mb-4" src="imgs/logo_os.svg" height="72" style="max-width: 300px;" alt="Logo do sistema de ordem de serviço">
            <h1 class="h3 mb-3 font-weigth-normal">Efetue o Login</h1>

            <div class="">
                <label class="visually-hidden" for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="exemplo@exemplo.com" class="form-control" required autofocus>
            </div>
            <div class="">
                <label for="senha" class="visually-hidden">Senha: </label>
                <input type="password" name="senha" id="senha" placeholder="********" class="form-control" required>
            </div>
            <div class="mt-3 checkbox d-flex justify-content-center align-items-center">

                <label for="relembre" class="align-self-center">
                    <input type="checkbox" class="align-self-center" name="relembre" id="relembre">
                    Lembre-me
                </label>
            </div>
            <div class="mt-3 d-grid gap-2">
                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Logar">
            </div>
        </form>
    </div>

    <div class="modal fade" id="erro1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Email ou senha errado(s)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Por favor, digite novamente seus dados.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>




    <!-- JAVASCRIPT BOOTSTRAP -->
    <script src="estilos/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="estilos/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>


    <?php
    if (isset($_GET['erro']) && $_GET['erro'] == 'erro1') {
    ?>
        <script>
            var myModal = new bootstrap.Modal(document.getElementById('erro1'), focus)

            myModal.show()
        </script>
    <?php
    }
    ?>

</body>

</html>