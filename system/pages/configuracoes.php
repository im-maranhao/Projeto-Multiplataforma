<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard - Configurações</title>

    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

    <link rel="icon" href="../assets/newlogo.jpeg">

<script src="sweetalert2.all.min.js"></script>
<link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<link type="text/css" href="../vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

<link type="text/css" href="../vendor/notyf/notyf.min.css" rel="stylesheet">

<link type="text/css" href="../css/volt.css" rel="stylesheet">

</head>

<body>
        <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../index.html">
              <img src="../assets/logoTVJ.png" alt="IRTVM logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
        
        <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
  <div class="sidebar-inner px-4 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="avatar-lg me-4">
          <img src="../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h5 mb-3">Hi, Jane</h2>
          <a href="../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>            
            Sign Out
          </a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
            aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a href="./dashboard/dashboard.php" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon">
            <img src="../assets/logoTVJ.png" height="20" width="20" alt="Volt Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">Portal IRTVM</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="../gerenciamento.php" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
          </span> 
          <span class="sidebar-text">Gerenciamento</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="../pages/financas.php" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path><path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path></svg>
          </span>
          <span class="sidebar-text">Finanças</span>
        </a>
      </li>
      <li class="nav-item  active ">
        <a href="../pages/configuracoes.php" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
          </span>
          <span class="sidebar-text">Configurações</span>
        </a>
      </li>

      <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

      <li class="nav-item">
        <a href="../sair.php"
          class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
          <span>Sair</span>
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

      </div>
      <!-- Navbar links -->
      <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
            <div class="list-group list-group-flush">
              <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notificações</a>
              <a href="#" class="list-group-item list-group-item-action border-bottom">
                <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <img alt="Image placeholder" src="../assets/img/team/profile-picture-1.jpg" class="avatar-md rounded">
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
                      <img alt="Image placeholder" src="../assets/img/team/profile-picture-2.jpg" class="avatar-md rounded">
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
                      <img alt="Image placeholder" src="../assets/img/team/profile-picture-4.jpg" class="avatar-md rounded">
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
                      <img alt="Image placeholder" src="../assets/img/team/profile-picture-5.jpg" class="avatar-md rounded">
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
                src="../assets/img/team/profile-picture-3.jpg">
              <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                <span class="mb-0 font-small fw-bold text-gray-900">Thais Napolitano</span>
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
            <a class="dropdown-item d-flex align-items-center" href="../sair.php">
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

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">IRTVM</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Configurações</li>
                </ol>
            </nav>
            </div>
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card card-body border-0 shadow mb-4">
                        <h2 class="h5 mb-4">Informações Gerais</h2>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Nome</label>
                                        <input class="form-control" id="first_name" type="text" placeholder="Thais Napolitano" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Sobrenome</label>
                                        <input class="form-control" id="last_name" type="text" placeholder="da Silva" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-3">
                                    <label for="birthday">Nascimento</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                        </span>
                                        <input data-datepicker="" class="form-control" id="birthday" type="text" placeholder="13/11/2001" required>                                               
                                     </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="gender">Gênero</label>
                                    <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                                        <option selected>Gênero</option>
                                        <option value="1">Feminino</option>
                                        <option value="2">Masculino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" id="email" type="email" placeholder="thais@irtvm.com" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Telefone</label>
                                        <input class="form-control" id="phone" type="number" placeholder="+55 1191234-5689" required>
                                    </div>
                                </div>
                            </div>
                            <h2 class="h5 my-4">Localização</h2>
                            <div class="row">
                                <div class="col-sm-9 mb-3">
                                    <div class="form-group">
                                        <label for="address">Endereço</label>
                                        <input class="form-control" id="address" type="text" placeholder="Av. Itaquera" required>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="form-group">
                                        <label for="number">Número</label>
                                        <input class="form-control" id="number" type="number" placeholder="131" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mb-3">
                                    <div class="form-group">
                                        <label for="city">Cidade</label>
                                        <input class="form-control" id="city" type="text" placeholder="Cidade" required>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="state">Bairro</label>
                                    <select class="form-select w-100 mb-0" id="state" name="Bairro" aria-label="State select example">
                                        <option selected>Bairro</option>
                                        <option value="AL">Aricanduva</option>
                                        <option value="AK">Butantã</option>
                                        <option value="AZ">Campo Limpo</option>
                                        <option value="AR">Capela do Socorro</option>
                                        <option value="CA">Casa Verde</option>
                                        <option value="CO">Cidade Ademar</option>
                                        <option value="CT">Cidade Tiradentes</option>
                                        <option value="DE">Ermelino Matarazzo</option>
                                        <option value="DC">Freguesia/Brasilândia</option>
                                        <option value="FL">Guaianases</option>
                                        <option value="GA">Ipiranga</option>
                                        <option value="HI">Itaim Paulista</option>
                                        <option value="ID">Itaquera</option>
                                        <option value="IL">Jabaquara</option>
                                        <option value="IN">Jaçanã/Tremembé</option>
                                        <option value="IA">Jardim Brasil</option>
                                        <option value="KS">Lapa</option>
                                        <option value="KY">M'Boi Mirim</option>
                                        <option value="LA">Mooca</option>
                                        <option value="ME">Osasco</option>
                                        <option value="MD">Parelheiros</option>
                                        <option value="MA">Penha</option>
                                        <option value="MI">Perus/Anhaguera</option>
                                        <option value="MN">Pinheiros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Salvar Atualizações</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="card card-body border-0 shadow mb-4 mb-xl-0">
                        <h2 class="h5 mb-4">Alertas & Notificações</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                                <div>
                                    <h3 class="h6 mb-1">Vagas de Estágio</h3>
                                    <p class="small pe-4">Saiba as empresas que estão precisando no momento e candidate - se</p>
                                </div>
                                <div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="user-notification-1">
                                        <label class="form-check-label" for="user-notification-1"></label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between px-0 border-bottom">
                                <div>
                                    <h3 class="h6 mb-1">Atividades da Conta</h3>
                                    <p class="small pe-4">Tenha seus relatórios de atividades diariamente</p>
                                </div>
                                <div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="user-notification-2" checked>
                                        <label class="form-check-label" for="user-notification-2"></label>
                                    </div>                                            
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                <div>
                                    <h3 class="h6 mb-1">Provas e Matérias</h3>
                                    <p class="small pe-4">Saiba quais as atividades e provas que estão marcadas na semana</p>
                                </div>
                                <div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="user-notification-3" checked>
                                        <label class="form-check-label" for="user-notification-3"></label>
                                    </div> 
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card shadow border-0 text-center p-0">
                                <div class="profile-cover rounded-top" data-background="../assets/img/profile-cover.jpg"></div>
                                <div class="card-body pb-5">
                                    <img src="../assets/img/team/profile-picture-3.jpg" class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                                    <h4 class="h3">Thais Napolitano</h4>
                                    <h5 class="fw-normal">Manutenção, Configuração e Redes</h5>
                                    <p class="text-gray mb-4">São Paulo, BR</p>
                                    <a class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-2" href="#">
                                        <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                                        Conectar
                                    </a>
                                    <a class="btn btn-sm btn-secondary" href="#">Mensagens</a>
                                </div>
                             </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-body border-0 shadow mb-4">
                                <h2 class="h5 mb-4">Alterar sua foto de perfil</h2>
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <!-- Avatar -->
                                        <img class="rounded avatar-xl" src="../assets/img/team/profile-picture-3.jpg" alt="change avatar">
                                    </div>
                                    <div class="file-field">
                                        <div class="d-flex justify-content-xl-center ms-xl-3">
                                            <div class="d-flex">
                                                <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                                                <input type="file">
                                                <div class="d-md-block text-left">
                                                    <div class="fw-normal text-dark mb-1">Escolher imagem</div>
                                                    <div class="text-gray small">JPG, GIF ou PNG. Tamanho máximo de 800MB</div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-body border-0 shadow">
                                <h2 class="h5 mb-4">Alterar plano de fundo</h2>
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <!-- Avatar -->
                                        <img class="rounded avatar-xl" src="../assets/img/profile-cover.jpg" alt="change cover">
                                    </div>
                                    <div class="file-field">
                                        <div class="d-flex justify-content-xl-center ms-xl-3">
                                            <div class="d-flex">
                                                <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                                                <input type="file">
                                                <div class="d-md-block text-left">
                                                    <div class="fw-normal text-dark mb-1">Escolher imagem</div>
                                                    <div class="text-gray small">JPG, GIF ou PNG. Tamanho máximo de 800MB</div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
<footer class="bg-white rounded shadow p-5 mb-4 mt-4">
    <div class="row">
        <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
            <p class="mb-0 text-center text-lg-start">© 2020-<span class="current-year"></span> <a class="text-primary fw-normal" href="#" target="_blank">IRTVM - Cursos</a></p>
        </div>
    </div>
</footer>
        </main>

    <!-- Core -->
<script src="../vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="../vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="../vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Smooth scroll -->
<script src="../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Charts -->
<script src="../vendor/chartist/dist/chartist.min.js"></script>
<script src="../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Sweet Alerts 2 -->
<script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Notyf -->
<script src="../vendor/notyf/notyf.min.js"></script>

<!-- Simplebar -->
<script src="../vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="../assets/js/volt.js"></script>

    
</body>

</html>
