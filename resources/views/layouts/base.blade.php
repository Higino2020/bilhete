
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Bilhete Macom</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <link rel="stylesheet" href="css/backend-plugin.min.css">
      <link rel="stylesheet" href="css/backend.css?v=1.0.2">
      <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="vendor/@icon/dripicons/dripicons.css">  </head>
      <link rel="stylesheet" href="css/master.css">
  <body class="email-chimp ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      
      <div class="iq-sidebar  sidebar-default ">
          <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
              <a href="../backend/index.html" class="header-logo">
                  <img src="images/logo.png" class="img-fluid  light-logo" alt="logo"><h5 class="logo-title text-white ml-3 mt-1">MACON</h5>
              </a>
              <div class="iq-menu-bt-sidebar ">
                  <svg class="svg-icon feather feather-repeat wrapper-menu animated rotation"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="17 1 21 5 17 9"></polyline>
                  <path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
                  </svg>
              </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <nav class="iq-sidebar-menu">
                        <ul id="iq-sidebar-toggle" class="iq-menu">
                             <li class="active">
                                  <a href="../backend/index.html" class="svg-icon">                        
                                          <svg class="svg-icon feather feather-home"  width="20" height="20" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                                          </svg>
                                      <span class="ml-3">Menu</span>
                                  </a>
                             </li>
                                <li class="">
                                    <a href="{{route('user.index')}}" class="">
                                        <i class="fa fa-user"></i>
                                        <span class="ml-3">Utilizador</span>
                                    </a>
                                        <ul id="campaigns" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                        </ul>
                                </li>
                                <li class="">
                                    <a href="{{route('funcio.index')}}" class="">
                                        <i class="fa fa-briefcase"></i>
                                        <span class="ml-3">Funcionário</span>
                                    </a>
                                        <ul id="campaigns" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                        </ul>
                                </li>
                                <li class="">
                                    <a href="{{route('cliente.index')}}" class="">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="ml-3">Cliente</span>
                                    </a>
                                        <ul id="campaigns" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                        </ul>
                                </li>
                                <li class="">
                                    <a href="{{route('carro.index')}}" class="">
                                        <i class="fa fa-car"></i>
                                        <span class="ml-3">Carros</span>
                                    </a>
                                        <ul id="campaigns" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                        </ul>
                                </li>
                                <li class="">
                                    <a href="{{route('motorista.index')}}" class="">
                                        <i class="fa fa-taxi"></i>
                                        <span class="ml-3">Motoristas</span>
                                    </a>
                                        <ul id="campaigns" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                        </ul>
                                </li>
                                <li class="">
                                    <a href="{{route('rota.index')}}" class="">
                                        <i class="fa fa-route"></i>
                                        <span class="ml-3">Rotas</span>
                                    </a>
                                        <ul id="campaigns" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                        </ul>
                                </li>
                                <li class="">
                                    <a href="{{route('horario.index')}}" class="">
                                        <i class="fa fa-clock"></i>
                                        <span class="ml-3">Horarios de Vigens</span>
                                    </a>
                                        <ul id="campaigns" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                        </ul>
                                </li>
                                <li class="">
                                    <a href="{{route('viagem.index')}}" class="">
                                        <i class="fa fa-suitcase-rolling"></i>
                                        <span class="ml-3">Vigens</span>
                                    </a>
                                        <ul id="campaigns" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                        </ul>
                                </li>
                                <li class="">
                                    <a href="{{route('bilhete.index')}}" class="">
                                        <i class="fa fa-ticket-alt"></i>
                                        <span class="ml-3">Bilhetes</span>
                                    </a>
                                        <ul id="campaigns" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                        </ul>
                                </li>
                        </ul>
                    </nav>
              <div class="p-3"></div>
          </div>
          </div>       
          <div class="iq-top-navbar">
             <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light">
      
              <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                  <i class="ri-menu-line wrapper-menu"></i>
                  <a href="index.html" class="header-logo">
                  <img src="images/logo.png" class="img-fluid  light-logo" alt="logo"><h5 class="logo-title ml-3 mt-1">EmailCHIMP</h5>
                      
                  </a>
                  <div class="navbar-breadcrumb">
                                  <h4>Gestão de Bilhete Macon</h4>
                              </div>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                  <div class="iq-search-bar device-search">
                      <form action="#" class="searchbox">
                      <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                      <input type="text" class="text search-input" placeholder="Search for your document , people,...">
                      </form>
                  </div>
                  <div class="d-flex align-items-center">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                      <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">  
                          <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                            <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                            <a href="#" class="search-link"><i class="las la-search"></i></a> 
                                            </div>
                                        </form>
                                    </div>
                                </li>               
                          <li class="nav-item nav-icon dropdown"> 
                              <a href="#" class="search-toggle iq-user-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/user/one.png" class="img-fluid rounded-small" alt="user">
                                        </a>
                             <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <div class="card mb-0">
                                    
                                              <div class="card-body p-0">
                                                  <div class="profile-header">
                                                              <div class="profile-details">
                                                                  <a href="../app/user-profile.html" class="iq-sub-card"> 
                                                                      <div class="rounded bg-info iq-card-icon-small">
                                                                          <i class="ri-file-user-line"></i>
                                                                      </div>
                                                                      <div class="media-body">
                                                                      <h5 class="mb-0">Meu Perfil</h5>
                                                                      <p class="mb-0 font-size-14">View personal profile details</p>
                                                                      </div>
                                                                  </a>
                                                              </div>
                                                             
                                                      
                                                  </div>
      
                                                  <a class="right-ic btn btn-primary btn-block   position-relative iq-logout" href="../backend/auth-sign-up.html" role="button">
                                                
                                                Sair
                                            </a>
                                             
      
                                  </div>
                              </div>
                              </div>
                             
                          </li>                    
                          </ul>                     
                      </div> 
                  </div>
                  </div>
              </nav>
          </div>
      </div>
      <div class="content-page">
        @yield('macon')
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2021 <a href="#">EmailCHIMP</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="js/backend-bundle.min.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="js/table-treeview.js"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="js/sweetalert.js"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="js/vector-map-custom.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="js/chart-custom.js"></script>
    
    <!-- slider JavaScript -->
    <script src="js/slider.js"></script>
    
    <!-- app JavaScript -->
    <script src="js/app.js"></script>
  </body>
</html>