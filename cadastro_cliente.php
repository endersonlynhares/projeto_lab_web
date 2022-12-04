<?php
include_once "config/validador_acesso.php";
include_once "config/conexao.php";
$sql = "SELECT * FROM usuario";
$res = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ESTILIZAÇÃO -->
  <link rel="stylesheet" href="estilos/headers.css">
  <link rel="stylesheet" href="estilos/bootstrap-5.1.3-dist/css/bootstrap.min.css">

  <style>
    legend {
      float: none;
      padding: inherit;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    span {
      font-weight: 700;
    }
  </style>
  <title>Home</title>
</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="home" viewBox="0 0 16 16">
      <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
      <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
      <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
    </symbol>
  </svg>

  <header>
    <div class="px-3 py-2 bg-primary text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="home.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <img src="imgs/logo_os_branco.svg" height="40" style="max-width:250px;" alt="">
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="home.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                  <use xlink:href="#home" />
                </svg>
                Home
              </a>
            </li>
            <li>
              <a href="dashboard.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                  <use xlink:href="#speedometer2" />
                </svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="servicos_con.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                  <use xlink:href="#table" />
                </svg>
                Serviços
              </a>
            </li>
            <li>
              <a href="equipamentos_con.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                  <use xlink:href="#grid" />
                </svg>
                Equipamentos
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                  <use xlink:href="#people-circle" />
                </svg>
                <?php echo $_SESSION['usuario'] ?>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="config/logoff.php">Sair</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#personal_infor">Informações Pessoais</a></li>a>
            </li>
          </ul>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <form action="config/cadastrar_cliente.php" method="POST">
      <fieldset class="mt-1 border p-2">
        <legend class="w-auto h-auto">Cliente</legend>
        <div class="row">
          <div class="col-4">
            <label>Nome: </label>
            <input class="form-control" type="text" name="nome" required>
          </div>
          <div class="col-4">
            <label>CPF: </label>
            <input class="form-control" type="text" name="cpf" minlength="14" maxlength="14" onkeypress="$(this).mask('000.000.000-00');" required>
          </div>
          <div class="col-4">
            <label>RG: </label>
            <input class="form-control" type="text" name="rg" onkeypress="$(this).mask('00000000-0');" minlength="10" maxlength="10" required>
          </div>
          <div>
          </div>
          <div>
            <label>Telefone: </label>
            <input class="form-control" type="text" name="telefone" minlength="15" maxlength="15" onkeypress="$(this).mask('(00) 00000-0000');"  required>
          </div>
          <div>
            <label for="administrador: ">Administrador: </label>
            <select id="administrador" class="form-control" name="cod_usuario" required>
              <?php
              foreach ($res as $user) {
                $cod = $user['cod_usuario']; //apenas uma solução devido ao conflito das aspas simples e duplas no value
              ?>
                <option value="<?= $cod ?>"><?= $user['nome'] ?></option>
              <?php
              }
              ?>
            </select>
          </div>
      </fieldset>
      <div class="mt-2 row justify-content-center text-center">
        <div class="col-12">
          <input type="submit" value="ENVIAR" class="btn btn-primary">
        </div>
      </div>
    </form>
  </div>

  <div class="modal fade" id="cadastro_sucesso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cliente cadastrado com sucesso!!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Os dados inseridos deram certos no cadastro do cliente!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="cadastro_erro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cliente não foi cadastrado!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Os dados inseridos não deram certos no cadastro do cliente...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="personal_infor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dados Pessoais</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php
          echo "<strong>Nome:</strong> " . $_SESSION['usuario'];
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- JAVASCRIPT BOOTSTRAP -->
  <script src="estilos/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
  <script src="estilos/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>


  <?php
  if (isset($_GET['cadastro']) && $_GET['cadastro'] == 'sucesso') {
  ?>
    <script>
      let myModal = new bootstrap.Modal(document.getElementById('cadastro_sucesso'), focus)

      myModal.show()
    </script>
  <?php
  } else if (isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro') {
  ?>
    <script>
      let myModal = new bootstrap.Modal(document.getElementById('cadastro_erro'), focus)

      myModal.show()
    </script>
  <?php
  }
  ?>


  <script src="bibliotecas/jquery/jquery.min.js"></script>
  <script src="bibliotecas/jmask/jmask.js"></script>

</body>

</html>