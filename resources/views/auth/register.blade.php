<!doctype html>
<html lang="en">

<head>
<title>Registro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./assets/hotelh.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/estilosS.css')}}" rel="stylesheet" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="{{asset ('assets/logo_hotel.png')}}"
                      style="width: 280px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Registrarse</h4>
                  </div>

                  <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Nombre</label>
                        <input type="text" name="name" id="form2Example11" class="form-control"
                          placeholder="Ingresar su Nombre" />
                    </div>
    

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Correo</label>
                      <input type="email" name="email" id="form2Example11" class="form-control"
                        placeholder="Ingresar Correo" />
                    </div>
  
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example22" >Contraseña</label>
                      <input type="password" name="password" id="form2Example22" class="form-control" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example22" >Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" id="form2Example22" class="form-control" />
                      </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button style="color: black" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrate</button>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Ir al Inicio de Sesión</p>
                      <a href="{{ route('login') }}" class="btn btn-outline-danger">Inicio de Sesión</a>
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">

  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</html>