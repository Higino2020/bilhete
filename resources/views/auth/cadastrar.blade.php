<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Macon | Cadastro</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/backend.css?v=1.0.2')}}">
      <link rel="stylesheet" href="{{asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/remixicon/fonts/remixicon.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/@icon/dripicons/dripicons.css')}}">  
    </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-12">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <h2 class="mb-2">Cadastro de Clientes</h2>
                        <form action="{{route('user.register')}}" method="POST">
                            @csrf
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label class="mb-0">Nome Completo</label>
                                    <input class="form-control" type="text" placeholder=" " name="nome">
                                    
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label class="mb-0">Número de Indetificação</label>
                                    <input type="text" maxlength="13" required class="form-control" name="nbi" id="nbi">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="telefone1">Contacto</label>
                                    <input type="text" required class="form-control" name="telefone1" id="telefone1">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="data_nascimento">Data de nascimento</label>
                                    <input type="date" required class="form-control" id="data_nascimento" name="data_nascimento">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" required class="form-control" id="email" name="email">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label class="mb-0">Senha</label>
                                    <input class="form-control" type="password" name="password" placeholder=" ">
                                    
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label class="mb-0">Confirmar Senha</label>
                                    <input class="form-control" type="password" name="password_confir" placeholder=" ">
                                    
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                           <p class="mt-3">
                              já tenho uma conta <a href="{{route('auth.login')}}" class="text-primary">Entrar</a>
                           </p>
                        </form>
                     </div>
                     <div class="col-lg-6 mb-lg-0 mb-4 mt-lg-0 mt-4">
                        <img src="{{asset('images/login/01.png')}}" class="img-fluid w-80" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="{{asset('js/backend-bundle.min.js')}}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{asset('js/table-treeview.js')}}"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="{{asset('js/sweetalert.js')}}"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="{{asset('js/vector-map-custom.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('js/chart-custom.js')}}"></script>
    
    <!-- slider JavaScript -->
    <script src="{{asset('js/slider.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>