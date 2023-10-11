<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Administrador</title>
</head>

<body>
    @include('nav.navA')
    <main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="formulario">
            <h2>Perfil</h2>
            <form method="POST" action="{{ route('perfil.update', ['id' => $user->id]) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $user->id }}">
                <input type="hidden" name="id" value="{{ $user->id }}">
                <label for="nombre">Nombres:</label>
                <input type="text" id="nombre" name="nombre" value="{{ $user->name }}" required><br><br>

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="{{ $user->telefono }}" required><br><br>

                <label for "correo">Correo:</label>
                <input type="email" id="correo" name="correo" value="{{ $user->email }}" required><br><br>

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>