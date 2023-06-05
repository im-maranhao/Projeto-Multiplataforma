<?php
session_start();
include('../../verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>IRTVM | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="icon" href="../../assets/newlogo.jpeg">
  <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!-- Sweet Alert -->
  <link type="text/css" href="../../vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

  <!-- Notyf -->
  <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

  <!-- Volt CSS -->
  <link type="text/css" href="../../css/volt.css" rel="stylesheet">

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
            <img src="../../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
              alt="Thais Napolitano">
          </div>
          
          <div class="d-block">
            <h2 class="h5 mb-3">Hi, Jane</h2>
            <a href="../../pages/examples/sign-in.html"
              class="btn btn-secondary btn-sm d-inline-flex align-items-center">
              <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
              </svg>
              Sign Out
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
          <a href="#" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="../../assets/logoTVJ.png" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">Portal do Aluno</span>
          </a>
        </li>
        <li class="nav-item  active ">
          <a href="../../pages/dashboard/dashboard.html" class="nav-link">
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
              </svg>
            </span>
            <span class="sidebar-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="../../pages/financas.html" class="nav-link">
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
          <a href="../../pages/configuracoes.html" class="nav-link">
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
          <a href="../../logout.php"
            class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
            <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
              <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                  clip-rule="evenodd"></path>
              </svg>
            </span>
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
                  <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                  <a href="#" class="list-group-item list-group-item-action border-bottom">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/team/profile-picture-1.jpg"
                          class="avatar-md rounded">
                      </div>
                      <div class="col ps-0 ms-2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                          </div>
                          <div class="text-end">
                            <small class="text-danger">a few moments ago</small>
                          </div>
                        </div>
                        <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action border-bottom">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/team/profile-picture-2.jpg"
                          class="avatar-md rounded">
                      </div>
                      <div class="col ps-0 ms-2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                          </div>
                          <div class="text-end">
                            <small class="text-danger">2 hrs ago</small>
                          </div>
                        </div>
                        <p class="font-small mt-1 mb-0">You've been assigned a task for "Awesome new project".</p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action border-bottom">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/team/profile-picture-3.jpg"
                          class="avatar-md rounded">
                      </div>
                      <div class="col ps-0 m-2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                          </div>
                          <div class="text-end">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="font-small mt-1 mb-0">Tagged you in a document called "Financial plans",</p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action border-bottom">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/team/profile-picture-4.jpg"
                          class="avatar-md rounded">
                      </div>
                      <div class="col ps-0 ms-2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                          </div>
                          <div class="text-end">
                            <small>1 d ago</small>
                          </div>
                        </div>
                        <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set for the presentation?"</p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action border-bottom">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/team/profile-picture-5.jpg"
                          class="avatar-md rounded">
                      </div>
                      <div class="col ps-0 ms-2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                          </div>
                          <div class="text-end">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="font-small mt-1 mb-0">New message: "We need to improve the UI/UX for the landing
                          page."</p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                    <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                      <path fill-rule="evenodd"
                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                    View all
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown ms-lg-3">
              <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="media d-flex align-items-center">
                  <img class="avatar rounded-circle" alt="Image placeholder"
                    src="../../assets/img/team/profile-picture-3.jpg">
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
                <a class="dropdown-item d-flex align-items-center" href="../../logout.php">
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
      <div class="col-12 col-xxl-6 mb-4">
        <div class="card border-0 shadow">
          <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h2 class="fs-5 fw-bold mb-0">Professores</h2>
            <a href="#" class="btn btn-sm btn-primary">Ver todos</a>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush list my--3">
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar">
                      <img class="rounded" alt="Image placeholder" src="../../assets/img/team/profile-picture-1.jpg">
                    </a>
                  </div>
                  <div class="col-auto ms--2">
                    <h4 class="h6 mb-0">
                      <a href="#">Chris Wood</a>
                    </h4>
                    <div class="d-flex align-items-center">
                      <div class="bg-success dot rounded-circle me-1"></div>
                      <small>Online</small>
                    </div>
                  </div>
                  <div class="col text-end">
                    <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                      <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                          clip-rule="evenodd"></path>
                      </svg>
                      Convidar
                    </a>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar">
                      <img class="rounded" alt="Image placeholder" src="../../assets/img/team/profile-picture-2.jpg">
                    </a>
                  </div>
                  <div class="col-auto ms--2">
                    <h4 class="h6 mb-0">
                      <a href="#">Jose Leos</a>
                    </h4>
                    <div class="d-flex align-items-center">
                      <div class="bg-warning dot rounded-circle me-1"></div>
                      <small>Em reunião</small>
                    </div>
                  </div>
                  <div class="col text-end">
                    <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                      <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                          clip-rule="evenodd"></path>
                      </svg>
                      Enviar mensagem
                    </a>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar">
                      <img class="rounded" alt="Image placeholder" src="../../assets/img/team/profile-picture-3.jpg">
                    </a>
                  </div>
                  <div class="col-auto ms--2">
                    <h4 class="h6 mb-0">
                      <a href="#">Bonnie Green</a>
                    </h4>
                    <div class="d-flex align-items-center">
                      <div class="bg-danger dot rounded-circle me-1"></div>
                      <small>Offline</small>
                    </div>
                  </div>
                  <div class="col text-end">
                    <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                      <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                          clip-rule="evenodd"></path>
                      </svg>
                      Enviar mensagem
                    </a>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar">
                      <img class="rounded" alt="Image placeholder" src="../../assets/img/team/profile-picture-4.jpg">
                    </a>
                  </div>
                  <div class="col-auto ms--2">
                    <h4 class="h6 mb-0">
                      <a href="#">Neil Sims</a>
                    </h4>
                    <div class="d-flex align-items-center">
                      <div class="bg-danger dot rounded-circle me-1"></div>
                      <small>Offline</small>
                    </div>
                  </div>
                  <div class="col text-end">
                    <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                      <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                          clip-rule="evenodd"></path>
                      </svg>
                      Enviar mensagem
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-xxl-6 mb-4">
        <div class="card border-0 shadow">
          <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h2 class="fs-5 fw-bold mb-0">Cursos em andamento</h2>
            <a href="#" class="btn btn-sm btn-primary">Ver Mais</a>
          </div>
          <div class="card-body">
            <!-- Project 1 -->
            <div class="row mb-4">
              <div class="col-auto">
                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                  <path fill-rule="evenodd"
                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <div class="col">
                <div class="progress-wrapper">
                  <div class="progress-info">
                    <div class="h6 mb-0">Introdução à Tecnologia da Informação e Comunicação
                    </div>
                    <div class="small fw-bold text-gray-500"><span>75 %</span></div>
                  </div>
                  <div class="progress mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100" style="width: 75%;"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project 2 -->
            <div class="row align-items-center mb-4">
              <div class="col-auto">
                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                  <path fill-rule="evenodd"
                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <div class="col">
                <div class="progress-wrapper">
                  <div class="progress-info">
                    <div class="h6 mb-0">Manutenção, Configuração e Redes </div>
                    <div class="small fw-bold text-gray-500"><span>60 %</span></div>
                  </div>
                  <div class="progress mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                      aria-valuemax="100" style="width: 60%;"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project 3 -->
            <div class="row align-items-center mb-4">
              <div class="col-auto">
                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                  <path fill-rule="evenodd"
                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <div class="col">
                <div class="progress-wrapper">
                  <div class="progress-info">
                    <div class="h6 mb-0">Gestão de Mídias Sociais </div>
                    <div class="small fw-bold text-gray-500"><span>45 %</span></div>
                  </div>
                  <div class="progress mb-0">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                      aria-valuemax="100" style="width: 45%;"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Project 4 -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                  <path fill-rule="evenodd"
                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <div class="col">
                <div class="progress-wrapper">
                  <div class="progress-info">
                    <div class="h6 mb-0">Design Digital </div>
                    <div class="small fw-bold text-gray-500"><span>34 %</span></div>
                  </div>
                  <div class="progress mb-0">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="34" aria-valuemin="0"
                      aria-valuemax="100" style="width: 34%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="col-12 col-xl-4">
    <div class="col-12 px-0 mb-4">
        <div class="card border-0 shadow">
          <div class="card-header d-flex flex-row align-items-center flex-0 border-bottom">
            <div class="d-block">
              <div class="h6 fw-normal text-gray mb-2">Total do Semestre</div>
              <h2 class="h3 fw-extrabold">Frequência</h2>
              <div class="small mt-2">
                <span class="fas fa-angle-up text-success"></span>
                <span class="text-success fw-bold">18.2%</span>
              </div>
            </div>
            <div class="d-block ms-auto">
              <div class="d-flex align-items-center text-end mb-2">
                <span class="dot rounded-circle bg-gray-800 me-2"></span>
                <span class="fw-normal small">Fevereiro</span>
              </div>
              <div class="d-flex align-items-center text-end">
                <span class="dot rounded-circle bg-secondary me-2"></span>
                <span class="fw-normal small">Junho</span>
              </div>
            </div>
          </div>
          <div class="card-body p-2">
            <div class="ct-chart-ranking ct-golden-section ct-series-a"></div>
          </div>
        </div>
      </div>
    </div>
 
      <!-- <div class="col-12 px-0">
        <div class="card border-0 shadow">
          <div class="card-body">
            <h2 class="fs-5 fw-bold mb-1">Acquisition</h2>
            <p>Tells you where your visitors originated from, such as search engines, social networks or website
              referrals.</p>
            <div class="d-block">
              <div class="d-flex align-items-center me-5">
                <div class="icon-shape icon-sm icon-shape-danger rounded me-3">
                  <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="d-block">
                  <label class="mb-0">Bounce Rate</label>
                  <h4 class="mb-0">33.50%</h4>
                </div>
              </div>
              <div class="d-flex align-items-center pt-3">
                <div class="icon-shape icon-sm icon-shape-purple rounded me-3">
                  <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z">
                    </path>
                  </svg>
                </div>
                <div class="d-block">
                  <label class="mb-0">Sessions</label>
                  <h4 class="mb-0">9,567</h4>
                </div>
              </div>
            </div>
            
          </div>
        </div> 
      </div>-->
      

<br> 
    <div class="col-12 px-0" >
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="summary1">
            <h2>Livros e Links Relacionados<img src="/assets/img/brand/livro.png" width="40" height="40" style="margin-left: 20px;"></h2>
            <hr>
            <p><strong><a >Segurança Da Informação Descomplicada: </a></strong> <a href="https://www.amazon.com.br/Seguran%C3%A7a-Informa%C3%A7%C3%A3o-Descomplicada-S%C3%B3crates-Teixeira-ebook/dp/B019HU4RHU" class="btn btn-sm btn-primary">Download</a></p> 
            <p><strong><a >Fundamentos de Segurança da Informação: </a></strong> <a href="https://dokumen.pub/fundamentos-de-segurana-da-informaao-com-base-na-iso-27001-e-na-iso-27002-1nbsped-9788574528670-l-4716712.html" class="btn btn-sm btn-primary">Download</a></p>
            <p><strong><a >Investigação Digital em Fontes Abertas: </a></strong> <a href="https://dokumen.pub/investigaao-digital-em-fontes-abertas-2nbsped-9788574528199.html" class="btn btn-sm btn-primary">Download</a></p>
            <p><strong><a >Cibersegurança: Visão Panorâmica Sobre a Segurança da Informação na Internet: </a></strong> <a href="https://www.amazon.com.br/Ciberseguran%C3%A7a-Panor%C3%A2mica-Seguran%C3%A7a-Informa%C3%A7%C3%A3o-Internet-ebook/dp/B0BSG1SZVK" class="btn btn-sm btn-primary">Download</a></p>
          </div>
        </div>
      </div>
    </div>


    <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
      <div class="row">
        <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
          <p class="mb-0 text-center text-lg-start">© 2020-<span class="current-year"></span> <a
              class="text-primary fw-normal" href="https://themesberg.com" target="_blank">IRTVM - Cursos</a></p>
        </div>
        <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
          
        </div>
      </div>
    </footer>
  </main>

  <!-- Core -->
  <script src="../../vendor/@popperjs/core/dist/umd/popper.min.js"></script>
  <script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Vendor JS -->
  <script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>

  <!-- Slider -->
  <script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>

  <!-- Smooth scroll -->
  <script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

  <!-- Charts -->
  <script src="../../vendor/chartist/dist/chartist.min.js"></script>
  <script src="../../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

  <!-- Datepicker -->
  <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

  <!-- Sweet Alerts 2 -->
  <script src="../../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

  <!-- Moment JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

  <!-- Vanilla JS Datepicker -->
  <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

  <!-- Notyf -->
  <script src="../../vendor/notyf/notyf.min.js"></script>

  <!-- Simplebar -->
  <script src="../../vendor/simplebar/dist/simplebar.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Volt JS -->
  <script src="../../assets/js/volt.js"></script>


</body>

</html>               