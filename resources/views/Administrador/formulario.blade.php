<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Crear Perfil</title>
</head>

<body>
    @include('nav.navA')
    <main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="formulario">
            <h2>Crear Usuario</h2>
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
                      <label class="form-label" for="form2Example11">Telefono</label>
                      <input type="text" name="telefono" id="form2Example11" class="form-control"
                      placeholder="Ingresar Telefono" />
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
  
                  </form>
        </div>
    </div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous">
    </script>
</body>
</html>
