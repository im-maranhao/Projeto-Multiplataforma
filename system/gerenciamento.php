<?php
session_start();
include_once('assets/cabecalho.php');
include_once('assets/rodape.php');
include('config/conexao.php');
include_once("config/seguranca.php");
seguranca_adm();
$consulta = "SELECT * FROM clientes ";
$resultado = mysqli_query($conn, $consulta);
?>

<?php include_once('assets/menu.php'); ?>

<?php
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>IRTVM | Gerenciamento </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="icon" href="assets/newlogo.jpeg">
  <link rel="mask-icon" href="./assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!-- Sweet Alert -->
  <link type="text/css" href="./vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

  <!-- Notyf -->
  <link type="text/css" href="./vendor/notyf/notyf.min.css" rel="stylesheet">

  <!-- Volt CSS -->
  <link type="text/css" href="./css/volt.css" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <div class="d-flex align-items-center">
      <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="avatar-lg me-4">
            <img src="./assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
              alt="Thais Napolitano">
          </div>
          
          <div class="d-block">
            <h2 class="h5 mb-3">Bem Vinda(o) <?php echo $_SESSION['usuarioNome'] ?></h2>
            <a href="./sair.php"
              class="btn btn-secondary btn-sm d-inline-flex align-items-center">
              <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
              </svg>
              Sair
            </a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
          <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
            aria-expanded="true" aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
      <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item">
          <a href="./pages/dashboard/dashboard.php" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="./assets/logoTVJ.png" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">Portal IRTVM</span>
          </a>
        </li>
        <li class="nav-item  active ">
          <a href="./gerenciamento.php" class="nav-link">
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
              </svg>
            </span>
            <span class="sidebar-text">Gerenciamento</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="./pages/financas.php" class="nav-link">
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                <path fill-rule="evenodd"
                  d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                  clip-rule="evenodd"></path>
              </svg>
            </span>
            <span class="sidebar-text">Finanças</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="./pages/configuracoes.php" class="nav-link">
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                  clip-rule="evenodd"></path>
              </svg>
            </span>
            <span class="sidebar-text">Configurações</span>
          </a>
        </li>

        <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

        <li class="nav-item">
          <a href="./sair.php"
            class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
            <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
              <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                  clip-rule="evenodd"></path>
              </svg>
            </span>
            
            <span\n>Sair</span>
            <i class="fas fa-sign-out-alt text text-danger"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <main class="content">

    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
      <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
          <div class="d-flex align-items-center">
            <!-- Search form -->

            <!-- / Search form -->
          </div>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown">
              <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true"
                href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                  </path>
                </svg>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                  <div class="list-group list-group-flush">
                    <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notificações</a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="./assets/img/team/profile-picture-1.jpg" class="avatar-md rounded">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">José Léo</h4>
                                </div>
                                <div class="text-end">
                                  <small class="text-danger">instantes atrás</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">Adicionei um evento "Projeto stand-up" amanhã ao 12:30.</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="./assets/img/team/profile-picture-2.jpg" class="avatar-md rounded">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Prof Nicolas</h4>
                                </div>
                                <div class="text-end">
                                  <small class="text-danger">2 horas atrás</small>
                                </div>
                            </div>
                          <p class="font-small mt-1 mb-0">Você recebeu uma tarefa para "Manutenção, Configuração e Rede".</p>
                          </div>
                      </div>
                    </a>
      
                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="./assets/img/team/profile-picture-4.jpg" class="avatar-md rounded">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Jonathan Santos</h4>
                                </div>
                                <div class="text-end">
                                  <small>1 dia atrás</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">Nova Mensagem: "Iae, beleza? Tudo certo pra apresentação de amanhã?"</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                      <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="./assets/img/team/profile-picture-5.jpg" class="avatar-md rounded">
                          </div>
                          <div class="col ps-0 ms-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="h6 mb-0 text-small">Priscila Oliveira</h4>
                                </div>
                                <div class="text-end">
                                  <small>2 horas atrás</small>
                                </div>
                            </div>
                            <p class="font-small mt-1 mb-0">Nova Mensagem: "Nós precisamos melhorar a landing page de UI/UX"</p>
                          </div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                      <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                      Ver tudo
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown ms-lg-3">
                <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <div class="media d-flex align-items-center">
                    <img class="avatar rounded-circle" alt="Image placeholder"
                      src="./assets/img/team/profile-picture-3.jpg">
                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                      <!-- <span class="mb-0 font-small fw-bold text-gray-900">Thais Napolitano</span> -->
                      <input type="text" name="alterado_por" id="recipient-alterado_por" maxlength="50" class="form-control" disabled value="<?php echo $_SESSION['usuarioNome'] ?>">
                      

                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"></path>
                    </svg>
                    Meu Perfil
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                    </svg>
                    Configurações
                  </a>
                  <div role="separator" class="dropdown-divider my-1"></div>
                  <a class="dropdown-item d-flex align-items-center" href="./sair.php">
                    <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                      </path>
                    </svg>
                    Sair
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="row">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">IRTVM</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gerenciamento</li>
                        </ol>
                    </nav>
      <div class="col-12 col-xxl-6 mb-4">

    <!-- AQUI NEW -->
          <div class="row">
        <div class="col-12 col-md-15 col-xl-15 mb-4 mb-md-2">
    <div class="container-fluid">
    <div class="row">
        <div  class="col-md-4 bg-warning justify-content-between p-3">
            <!-- LISTA DE ALUNOS CADASTRADOS -->
        </div>
        <div class="col-md-6 bg-warning justify-content p-3">
            <div class="form-label-group">

                <input type="text" name="pesquisa_cliente" id="pesquisa_cliente" class="form-control" placeholder="PESQUISAR ALUNOS POR NOME - CPF - RG - NASCIMENTO" required autofocus>

            </div>
        </div>
        <div class="col-md-2 bg-warning  justify-content-between p-3 d-flex">
            <button type="button" class="btn btn-sm btn-dark " data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#cadCliente">NOVO</button>
        </div>
    </div>
</div>

<table class="table table-bordered table-hover table-sm table-responsive-xl resultado_cliente">
    <thead>
        <tr class="bg-dark text text-white">

            <th scope="col">CÓD</th>
            <th scope="col">NOME</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">ENDEREÇO</th>
            <th scope="col">CPF</th>
            <th scope="col">RG</th>
            <th scope="col">NASCIMENTO</th>
            <th scope="col">RESPONSÁVEL</th>
            <th scope="col" class="text text-center" colspan="3">AÇÕES</th>
        </tr>
    </thead>
    <?php
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $id_cliente = $linha['id_cliente'];
        $nome = ucwords(strtolower($linha['nome']));
        $telefone = $linha['telefone'];
        $responsavel = $linha['criado_por'];
        $situacao = $linha['situacao'];
        $alterado_por = $linha['alterado_por'];
        $cpf = $linha['cpf'];
        $rg = $linha['rg'];


        // CONVERTENDO DATA/HORA PARA PADRAO PORTUGUES-BR
        $ultima_alteracao = $linha['ultima_alteracao'];
        $ultima_alteracao = date('d/m/Y H:i:s',  strtotime($ultima_alteracao));

        // CONVERTENDO DATA/HORA PARA PADRAO PORTUGUES-BR
        $data_cadastro = $linha['data_cadastro'];
        $data_cadastro = date('d/m/Y H:i:s',  strtotime($data_cadastro));

        // CONVERTENDO NASCIMENTO PARA PADRAO PORTUGUES-BR
        $nascimento = $linha['nascimento'];
        $nascimento = date('d/m/Y',  strtotime($nascimento));

        $rua = $linha['rua'];
        $bairro = $linha['bairro'];
        $rua = $linha['rua'];
        $numero = $linha['numero'];
        $cidade = $linha['cidade'];
        $uf = $linha['uf'];

        $endereco = $rua . ", " . $numero . " - " . $bairro . "-" . $cidade . "/" . $uf;
    ?>
        <tbody>
            <tr>
                <td><?php echo $id_cliente ?></td>
                <td><?php echo ucwords(strtolower($nome)); ?></td>
                <td><?php echo $linha['telefone']; ?></td>
                <td><?php echo $endereco; ?></td>
                <td><?php echo $cpf; ?></td>
                <td><?php echo $rg; ?></td>
                <td><?php echo $nascimento ?></td>
                <td><?php echo $responsavel ?></td>
                <td class="text text-center">

                    <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#visulaizarCliente" data-whatever="<?php echo $linha['id_cliente']; ?>" data-whatevernome="<?php echo ucwords(strtolower($linha['nome'])); ?>" data-whateveremail="<?php echo $linha['email']; ?>" data-whatevertelefone="<?php echo $linha['telefone']; ?>" data-whateverrua="<?php echo ucwords(strtolower($linha['rua'])); ?>" data-whatevernumero="<?php echo $linha['numero']; ?>" data-whateverbairro="<?php echo $linha['bairro']; ?>" data-whatevercomplemento="<?php echo $linha['complemento']; ?>" data-whatevercep="<?php echo $linha['cep']; ?>" data-whatevercidade="<?php echo $linha['cidade']; ?>" data-whateveruf="<?php echo $linha['uf']; ?>" data-whatevertelefone="<?php echo $linha['telefone']; ?>" data-whatevercelular="<?php echo $linha['celular']; ?>" data-whatevercpf="<?php echo $linha['cpf']; ?>" data-whateverrg="<?php echo $linha['rg']; ?>" data-whatevernascimento="<?php echo $nascimento; ?>" data-whateveroperador="<?php echo $linha['criado_por']; ?>" data-whateversituacao="<?php echo $situacao; ?>" data-whateverdata-cadastro="<?php echo $data_cadastro; ?>" data-whateveralterado_por="<?php echo $alterado_por; ?>" data-whateverultima_alteracao="<?php echo $ultima_alteracao; ?>">

                        <i class="far fa-eye text text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Visualizar"></i>
                    </a>
                </td>

                <td class="text text-center">
                    <a href="#" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#editarCliente" data-whatever="<?php echo $linha['id_cliente']; ?>" data-whatevernome="<?php echo ucwords(strtolower($linha['nome'])); ?>" data-whateveremail="<?php echo $linha['email']; ?>" data-whatevertelefone="<?php echo $linha['telefone']; ?>" data-whateverrua="<?php echo ucwords(strtolower($linha['rua'])); ?>" data-whatevernumero="<?php echo $linha['numero']; ?>" data-whateverbairro="<?php echo $linha['bairro']; ?>" data-whatevercomplemento="<?php echo $linha['complemento']; ?>" data-whatevercep="<?php echo $linha['cep']; ?>" data-whatevercidade="<?php echo $linha['cidade']; ?>" data-whateveruf="<?php echo $linha['uf']; ?>" data-whatevertelefone="<?php echo $linha['telefone']; ?>" data-whatevercelular="<?php echo $linha['celular']; ?>" data-whatevercpf="<?php echo $linha['cpf']; ?>" data-whateverrg="<?php echo $linha['rg']; ?>" data-whatevernascimento="<?php echo $nascimento; ?>" data-whateveroperador="<?php echo $linha['criado_por']; ?>" data-whateversituacao="<?php echo $linha['situacao']; ?>" data-whateverdata-cadastro="<?php echo $data_cadastro ?>" data-whateveralterado_por="<?php echo $alterado_por; ?>" data-whateverultima_alteracao="<?php echo $ultima_alteracao; ?>">

                        <i class="far fa-edit text text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"></i></a>
                </td>
                <td class="text text-center">
                    <a href="processa_excluir_clientes.php?id_cliente=<?php echo $linha['id_cliente']; ?>" onClick="return confirm('Deseja realmente deletar o cliente?')">
                        <i class="far fa-trash-alt text text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir"></i></a>
                </td>

            </tr>
        </tbody>
    <?php } ?>
</table>

<!-- ================================== MODAL CADASTRAR CLIENTE----------------------------------------------------------------->
<style>
    .errorInput {
        border: 2px solid red !important;
    }
</style>
<script>
    // ================================ FUNÇÃO PARA MASCARA DE TELEFONE =============================================
    function mask(o, f) {
        setTimeout(function() {
            var v = telefone(o.value);
            if (v != o.value) {
                o.value = v;
            }
        }, 1);
    }

    function telefone(v) {
        var r = v.replace(/\D/g, "");
        r = r.replace(/^0/, ""); //limpa o campo se começar com ZERO (0)
        if (r.length > 10) {
            r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
        } else if (r.length > 5) {
            r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
        } else if (r.length > 2) {
            r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
        } else {
            r = r.replace(/^(\d*)/, "($1");
        }
        return r;
    }

    // ================================ FUNÇÃO PARA MASCARA DE CELULAR =============================================
    function mask(o, f) {
        setTimeout(function() {
            var v = celular(o.value);
            if (v != o.value) {
                o.value = v;
            }
        }, 1);
    }

    function celular(v) {
        var r = v.replace(/\D/g, "");
        r = r.replace(/^0/, ""); //limpa o campo se começar com ZERO (0)
        if (r.length > 10) {
            r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
        } else if (r.length > 5) {
            r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
        } else if (r.length > 2) {
            r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
        } else {
            r = r.replace(/^(\d*)/, "($1");
        }
        return r;
    }

    // ================================ FUNÇÃO PARA MASCARA DE CPF =============================================
    $(document).ready(function() {
        $("#cpf").mask("999.999.999-99");
    });

    // ================================ FUNÇÃO PARA MASCARA DE NASCIMENTO =============================================
    $(document).ready(function() {
        $("#nascimento").mask("99/99/9999");
    });

    // FUNÇÃO PARA ADICONAR ENDEREÇO VIA CEP (https://viacep.com.br/exemplo/javascript/)
    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value = ("");
        document.getElementById('bairro').value = ("");
        document.getElementById('cidade').value = ("");
        document.getElementById('uf').value = ("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value = (conteudo.logradouro);
            document.getElementById('bairro').value = (conteudo.bairro);
            document.getElementById('cidade').value = (conteudo.localidade);
            document.getElementById('uf').value = (conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value = "...";
                document.getElementById('bairro').value = "...";
                document.getElementById('cidade').value = "...";
                document.getElementById('uf').value = "...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };


    $(document).ready(function() {

        $('#insert_form').on('submit', function(event) {
            event.preventDefault(); //EVITA O SUBMIT DO FORM

            var nome = $('#nome'); // PEGA O CAMPO CLIENTE DO FORM
            var telefone = $('#telefone'); // PEGA O CAMPO TELEFONE DO FORM
            var email = $('#email');


            var erro = $('.alert-danger'); // PEGA O CAMPO COM A class alert e CRIA A VARIAVEL erro
            var campo = $('#campo-erro'); // CRIA A VARIAVEL PATA EXIBIR O NOME DO CAMPO COM ERROcampo-sucesso


            erro.addClass('d-none');
            $('.is-invalid').removeClass('is-invalid');
            $('.is-valid').removeClass('is-valid');


            if (!nome.val().match(/[A-Za-z\d]/)) {
                erro.removeClass('d-none'); //REMOVE A CLASSE (d-none) DO BOOTSTRAP E EXIBE O ALERTA
                campo.html('cliente'); // ADICIONA AO ALERTA O NOME DO CAMPO NAO PREENCHIDO
                nome.focus(); //COLOCA O CURSOR NO CAMPO COM ERRO
                nome.addClass('is-invalid');


                return false;

            } else if (!email.val().match(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i)) {
                erro.removeClass('d-none'); //REMOVE A CLASSE (d-none) DO BOOTSTRAP E EXIBE O ALERTA
                campo.html('email'); // ADICIONA AO ALERTA O NOME DO CAMPO NAO PREENCHIDO
                email.focus(); //COLOCA O CURSOR NO CAMPO COM ERRO
                email.addClass('is-invalid');

                return false;

            } else if (!telefone.val().match(/^\([0-9]{2}\) [0-9]?[0-9]{5}-[0-9]{4}$/)) {
                erro.removeClass('d-none'); //REMOVE A CLASSE (d-none) DO BOOTSTRAP E EXIBE O ALERTA
                campo.html('telefone'); // ADICIONA AO ALERTA O NOME DO CAMPO NAO PREENCHIDO
                telefone.focus(); //COLOCA O CURSOR NO CAMPO COM ERRO
                telefone.addClass('is-invalid');



                return false;

            } else {

                var dados = $("#insert_form").serialize();
                $.post("processa_cad_clientes.php", dados, function(retorna) {
                    if (retorna) {
                        //Limpar os campo
                        $('#insert_form')[0].reset();

                        //Fechar a janela modal cadastrar
                        $('#cadCliente').modal('hide');
                        $('#sucessModal').modal('show');

                        setInterval(function() {
                            var redirecionar = "gerenciamento.php";
                            $(window.document.location).attr('href', redirecionar);

                        }, 3000);

                    } else {

                        return false;
                    }

                });

            }

        });

    });
</script>


<!-- Modal ALERTA DE CADASTRO COM SUCESSO-->
<div class="modal fade" id="sucessModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>

            </div>
            <div class="modal-body bg-success text text-center text-white">
                ALUNO CADASTRADO COM SUCESSO!
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- Modal ALERTA DE CADASTRO NAO REALIZADO-->
<div class="modal fade" id="dangerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>

            </div>
            <div class="modal-body bg-danger text text-center text-white">
                CLIENTE NÃO CADASTRADO!
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- ==================================================MODAL CADASTRO DE ALUNOS ==================================== -->
<div class="modal fade" id="cadCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">CADASTRO DE ALUNOS</h5>


                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>


            </div>


            <!-- ALERTA PARA ERRO DE PREENCHIMENTO DE FORMULARIO -->
            <div class="alert alert-danger d-none fade show m-3" role="alert">
                <strong>ERRO!</strong> - <strong>Preencha o campo <span id="campo-erro"></span></strong>!
                <span id="msg"></span>
            </div>

            <div class="modal-body">
                <form method="POST" id="insert_form">

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-nome" class="col-form-label">Nome</label>
                            <input type="text" name="nome" id="nome" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-email" class="col-form-label">E-mail</label>
                            <input type="email" name="email" id="email" maxlength="50" class="form-control -10">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-sm-12">
                            <label for="recipient-rua" class="col-form-label">Rua</label>
                            <input type="text" name="rua" id="rua" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-numero" class="col-form-label">Nº</label>
                            <input type="text" name="numero" id="numero" maxlength="50" class="form-control -10">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-bairro" class="col-form-label">Bairro</label>
                            <input type="text" name="bairro" id="bairro" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-complemento" class="col-form-label">Complemento</label>
                            <input type="text" name="complemento" id="complemento" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-cep" class="col-form-label">Cep</label>
                            <input type="text" name="cep" id="cep" maxlength="50" class="form-control -10 border border-warning" onblur="pesquisacep(this.value);">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cidade" class="col-form-label">Cidade</label>
                            <input type="text" name="cidade" id="cidade" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-uf" class="col-form-label">UF</label>
                            <input type="text" name="uf" id="uf" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-telefone" class="col-form-label">Telefone</label>
                            <input type="text" name="telefone" id="telefone" onkeypress="mask(this, telefone);" onblur="mask(this, telefone);" class="form-control -10">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-celular" class="col-form-label">Celular</label>
                            <input type="text" name="celular" id="celular" maxlength="50" onkeypress="mask(this, celular);" onblur="mask(this, celular);" class="form-control -10">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cpf" class="col-form-label">CPF</label>
                            <input type="text" name="cpf" id="cpf" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-rg" class="col-form-label">RG</label>
                            <input type="text" name="rg" id="rg" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-nascimento" class="col-form-label">Nascimento</label>
                            <input type="text" name="nascimento" id="nascimento" class="form-control -10">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-operador" class="col-form-label cli">Operador</label>
                            <input type="text" name="operador" id="operador" maxlength="50" class="form-control" disabled value="<?php echo $_SESSION['usuarioNome'] ?>">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-dataCadastro" class="col-form-label">Data do cadastro</label>
                            <input type="text" class="form-control" value="<?php echo date('d/m/Y - H:i:s') ?>" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">

                            <label for="recipient-situacao" class="col-form-label">Situação</label>
                            <select class="form-control form-select-lg mb-5 select2" name="situacao" id="situacao" aria-label=".form-select-lg example">
                                <option value="Pendente">Pendente</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                                <option value="Cancelado">Cancelado</option>

                            </select>

                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary" id="btn-cadastrar">Salvar</button>

            </div>

            </form>


        </div>
        <div class="m-2 col-md-8 col-sm-8 alert alert-primary ">
            Informe o CEP e tecle [ ENTER ] para autopreencher o endereço !
        </div>
    </div>
</div>


<!-- -----------------------------------MODAL VISUALIZAR ALUNO----------------------------------------------------------------->
<div class="modal fade" id="visulaizarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-name" class="col-form-label">Nome</label>
                            <input type="text" class="form-control" id="recipient-name" disabled>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-email" class="col-form-label">E-mail</label>
                            <input type="text" class="form-control" id="recipient-email" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-sm-12">
                            <label for="recipient-rua" class="col-form-label">Rua</label>
                            <input type="text" class="form-control" id="recipient-rua" disabled>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-numero" class="col-form-label">Nº</label>
                            <input type="text" name="numero" id="recipient-numero" class="form-control -10" disabled>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-bairro" class="col-form-label">Bairro</label>
                            <input type="text" name="bairro" id="recipient-bairro" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-complemento" class="col-form-label">Complemento</label>
                            <input type="text" name="complemento" id="recipient-complemento" maxlength="50" class="form-control -10" disabled>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-cep" class="col-form-label">Cep</label>
                            <input type="text" name="cep" id="recipient-cep" maxlength="50" class="form-control" disabled>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cidade" class="col-form-label">Cidade</label>
                            <input type="text" name="cidade" id="recipient-cidade" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-uf" class="col-form-label">UF</label>
                            <input type="text" name="uf" id="recipient-uf" maxlength="50" class="form-control -10" disabled>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-telefone" class="col-form-label">Telefone</label>
                            <input type="text" name="telefone" id="recipient-telefone" onkeypress="mask(this, telefone);" onblur="mask(this, telefone);" class="form-control -10" disabled>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-celular" class="col-form-label">Celular</label>
                            <input type="text" name="celular" id="recipient-celular" maxlength="50" onkeypress="mask(this, celular);" onblur="mask(this, celular);" class="form-control -10" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cpf" class="col-form-label">CPF</label>
                            <input type="text" name="cpf" id="recipient-cpf" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-rg" class="col-form-label">RG</label>
                            <input type="text" name="rg" id="recipient-rg" maxlength="50" class="form-control -10" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-nascimento" class="col-form-label">Nascimento</label>
                            <input type="text" name="nascimento" id="recipient-nascimento" class="form-control -10" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-operador" class="col-form-label cli">Cadastrado por</label>
                            <input type="text" name="operador" id="recipient-operador" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-dataCadastro" class="col-form-label">Data do cadastro</label>
                            <input type="text" class="form-control" id="recipient-dataCadastro" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">

                            <label for="recipient-situacao" class="col-form-label">Situação</label>
                            <select class="form-control form-select-lg mb-5 select2" name="situacao" id="recipient-situacao" aria-label=".form-select-lg example" disabled>
                                <option value="Pendente">Pendente</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                                <option value="Cancelado">Cancelado</option>

                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-alterado_por" class="col-form-label cli">Alterado por</label>
                            <input type="text" name="alterado_por" id="recipient-alterado_por" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipientultima_alteracao" class="col-form-label">Última Alteração</label>
                            <input type="text" class="form-control" name="ultima_alteracao" id="recipientultima_alteracao" disabled>
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>

            </div>
            </form>


        </div>
    </div>
</div>


    <!-- <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
      <div class="row">
        <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
          <p class="mb-0 text-center text-lg-start">© 2020-<span class="current-year"></span> <a
              class="text-primary fw-normal" href="https://themesberg.com" target="_blank">IRTVM - Cursos</a></p>
        </div>
        <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
          
        </div>
      </div>
    </footer> -->
  </main>
  

  <!-- Core -->
  <script src="./vendor/@popperjs/core/dist/umd/popper.min.js"></script>
  <script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Vendor JS -->
  <script src="./vendor/onscreen/dist/on-screen.umd.min.js"></script>

  <!-- Slider -->
  <script src="./vendor/nouislider/distribute/nouislider.min.js"></script>

  <!-- Smooth scroll -->
  <script src="./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

  <!-- Charts -->
  <script src="./vendor/chartist/dist/chartist.min.js"></script>
  <script src="./vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

  <!-- Datepicker -->
  <script src="./vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

  <!-- Sweet Alerts 2 -->
  <script src="./vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

  <!-- Moment JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

  <!-- Vanilla JS Datepicker -->
  <script src="./vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

  <!-- Notyf -->
  <script src="./vendor/notyf/notyf.min.js"></script>

  <!-- Simplebar -->
  <script src="./vendor/simplebar/dist/simplebar.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Volt JS -->
  <script src="./assets/js/volt.js"></script>
<!-- -----------------------------------SCRIPT MODAL VISUALIZAR CLIENTE----------------------------------------------------------------->
<script type="text/javascript">
    $('#visulaizarCliente').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Botão que acionou o modal
        var recipient = button.data('whatever')
        var recipientnome = button.data('whatevernome')
        var recipientemail = button.data('whateveremail')
        var recipienttelefone = button.data('whatevertelefone')
        var recipientrua = button.data('whateverrua')
        var recipientnumero = button.data('whatevernumero')
        var recipientbairro = button.data('whateverbairro')
        var recipientcomplemento = button.data('whatevercomplemento')
        var recipientcep = button.data('whatevercep')
        var recipientcidade = button.data('whatevercidade')
        var recipientuf = button.data('whateveruf')
        var recipienttelefone = button.data('whatevertelefone')
        var recipientcelular = button.data('whatevercelular')
        var recipientcpf = button.data('whatevercpf')
        var recipientrg = button.data('whateverrg')
        var recipientnascimento = button.data('whatevernascimento')
        var recipientoperador = button.data('whateveroperador')
        var recipientsituacao = button.data('whateversituacao')
        var recipientdataCadastro = button.data('whateverdata-cadastro')
        var recipientalterado_por = button.data('whateveralterado_por')
        var recipientultima_alteracao = button.data('whateverultima_alteracao')

        var modal = $(this)
        modal.find('.modal-title').text('VISUALIZAR ALUNO ID: ' + recipient)
        modal.find('#id').val(recipient)
        modal.find('#recipient-name').val(recipientnome)
        modal.find('#recipient-email').val(recipientemail)
        modal.find('#recipient-telefone').val(recipienttelefone)
        modal.find('#recipient-rua').val(recipientrua)
        modal.find('#recipient-numero').val(recipientnumero)
        modal.find('#recipient-bairro').val(recipientbairro)
        modal.find('#recipient-complemento').val(recipientcomplemento)
        modal.find('#recipient-cep').val(recipientcep)
        modal.find('#recipient-cidade').val(recipientcidade)
        modal.find('#recipient-uf').val(recipientuf)
        modal.find('#recipient-telefone').val(recipienttelefone)
        modal.find('#recipient-celular').val(recipientcelular)
        modal.find('#recipient-cpf').val(recipientcpf)
        modal.find('#recipient-rg').val(recipientrg)
        modal.find('#recipient-nascimento').val(recipientnascimento)
        modal.find('#recipient-operador').val(recipientoperador)
        modal.find('#recipient-situacao').val(recipientsituacao)
        modal.find('#recipient-dataCadastro').val(recipientdataCadastro)
        modal.find('#recipient-alterado_por').val(recipientalterado_por)
        modal.find('#recipientultima_alteracao').val(recipientultima_alteracao)

    })
</script>

<!-- -----------------------------------MODAL EDITAR CLIENTE----------------------------------------------------------------->
<div class="modal fade" id="editarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="processa_edit_clientes.php" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-name" class="col-form-label">Nome</label>
                            <input type="text" class="form-control" id="recipient-name" name="nome">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="recipient-email" class="col-form-label">E-mail</label>
                            <input type="email" class="form-control" id="recipient-email" name="email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-sm-12">
                            <label for="recipient-rua" class="col-form-label">Rua</label>
                            <input type="text" class="form-control" id="recipient-rua" name="rua">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-numero" class="col-form-label">Nº</label>
                            <input type="text" name="numero" id="recipient-numero" class="form-control -10">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-bairro" class="col-form-label">Bairro</label>
                            <input type="text" name="bairro" id="recipient-bairro" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <label for="recipient-complemento" class="col-form-label">Complemento</label>
                            <input type="text" name="complemento" id="recipient-complemento" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-cep" class="col-form-label">Cep</label>
                            <input type="text" name="cep" id="recipient-cep" maxlength="50" class="form-control">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cidade" class="col-form-label">Cidade</label>
                            <input type="text" name="cidade" id="recipient-cidade" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <label for="recipient-uf" class="col-form-label">UF</label>
                            <input type="text" name="uf" id="recipient-uf" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-telefone" class="col-form-label">Telefone</label>
                            <input type="text" name="telefone" id="recipient-telefone" onkeypress="mask(this, telefone);" onblur="mask(this, telefone);" class="form-control -10">
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <label for="recipient-celular" class="col-form-label">Celular</label>
                            <input type="text" name="celular" id="recipient-celular" maxlength="50" onkeypress="mask(this, celular);" onblur="mask(this, celular);" class="form-control -10">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-cpf" class="col-form-label">CPF</label>
                            <input type="text" name="cpf" id="recipient-cpf" maxlength="50" class="form-control">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-rg" class="col-form-label">RG</label>
                            <input type="text" name="rg" id="recipient-rg" maxlength="50" class="form-control -10">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-nascimento" class="col-form-label">Nascimento</label>
                            <input type="text" name="nascimento" id="recipient-nascimento" class="form-control -10">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-operador" class="col-form-label cli">Cadastrado por</label>
                            <input type="text" name="operador" id="recipient-operador" maxlength="50" class="form-control" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-dataCadastro" class="col-form-label">Data do cadastro</label>
                            <input type="text" class="form-control" id="recipient-dataCadastro" disabled>
                        </div>
                        <div class="col-md-4 col-sm-12">

                            <label for="recipient-situacao" class="col-form-label">Situação</label>
                            <select class="form-control form-select-lg mb-5 select2" name="situacao" id="recipient-situacao" aria-label=".form-select-lg example">
                                <option value="Pendente">Pendente</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                                <option value="Cancelado">Cancelado</option>

                            </select>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-operador" class="col-form-label cli">Alterado por</label>
                            <input type="text" name="alterado_por" id="recipient-alterado_por" maxlength="50" class="form-control" disabled value="<?php echo $_SESSION['usuarioNome'] ?>">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label for="recipient-dataCadastro" class="col-form-label">Última Alteração</label>
                            <input type="text" class="form-control" name="ultima_alteracao" id="recipientultima_alteracao" value="<?php echo date('d/m/Y - H:i:s') ?>" disabled>
                        </div>

                    </div>


                    <input type="hidden" name="id" class="form-control" id="id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>

            </form>


        </div>
    </div>
</div>
<!-- -----------------------------------SCRIPT MODAL EDITAR CLIENTE----------------------------------------------------------------->
<script type="text/javascript">
    $('#editarCliente').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Botão que acionou o modal
        var recipient = button.data('whatever')
        var recipientnome = button.data('whatevernome')
        var recipientemail = button.data('whateveremail')
        var recipienttelefone = button.data('whatevertelefone')
        var recipientrua = button.data('whateverrua')
        var recipientnumero = button.data('whatevernumero')
        var recipientbairro = button.data('whateverbairro')
        var recipientcomplemento = button.data('whatevercomplemento')
        var recipientcep = button.data('whatevercep')
        var recipientcidade = button.data('whatevercidade')
        var recipientuf = button.data('whateveruf')
        var recipienttelefone = button.data('whatevertelefone')
        var recipientcelular = button.data('whatevercelular')
        var recipientcpf = button.data('whatevercpf')
        var recipientrg = button.data('whateverrg')
        var recipientnascimento = button.data('whatevernascimento')
        var recipientoperador = button.data('whateveroperador')
        var recipientsituacao = button.data('whateversituacao')
        var recipientdataCadastro = button.data('whateverdata-cadastro')
        var recipientalterado_por = button.data('whateveralterado_por')
        var recipientultima_alteracao = button.data('whateverultima_alteracao')

        var modal = $(this)
        modal.find('.modal-title').text('EDITAR ALUNO ID: ' + recipient)
        modal.find('#id').val(recipient)
        modal.find('#recipient-name').val(recipientnome)
        modal.find('#recipient-email').val(recipientemail)
        modal.find('#recipient-telefone').val(recipienttelefone)
        modal.find('#recipient-rua').val(recipientrua)
        modal.find('#recipient-numero').val(recipientnumero)
        modal.find('#recipient-bairro').val(recipientbairro)
        modal.find('#recipient-complemento').val(recipientcomplemento)
        modal.find('#recipient-cep').val(recipientcep)
        modal.find('#recipient-cidade').val(recipientcidade)
        modal.find('#recipient-uf').val(recipientuf)
        modal.find('#recipient-telefone').val(recipienttelefone)
        modal.find('#recipient-celular').val(recipientcelular)
        modal.find('#recipient-cpf').val(recipientcpf)
        modal.find('#recipient-rg').val(recipientrg)
        modal.find('#recipient-nascimento').val(recipientnascimento)
        modal.find('#recipient-operador').val(recipientoperador)
        modal.find('#recipient-situacao').val(recipientsituacao)
        modal.find('#recipient-dataCadastro').val(recipientdataCadastro)
        modal.find('#recipient-alterado_por').val(recipientalterado_por)
        modal.find('#recipientultima_alteracao').val(recipientultima_alteracao)

    })
</script>


<script>
    $(document).ready(function() {
        $(function() {
            //Pesquisar os cursos sem refresh na página
            $("#pesquisa_cliente").keyup(function() {

                var pesquisa_cliente = $(this).val();

                //Verificar se há algo digitado
                if (pesquisa_cliente != '') {
                    var dados = {
                        palavra: pesquisa_cliente
                    }
                    $.post('busca_clientes.php', dados, function(retorna) {
                        //Mostra dentro da ul os resultado obtidos
                        $(".resultado_cliente").html(retorna);
                    });
                } else {
                    $(".resultado_cliente").html('');
                }
            });
        });

    });
</script>

</body>

</html>               