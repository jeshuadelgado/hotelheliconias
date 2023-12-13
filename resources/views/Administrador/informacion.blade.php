<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/hotelh.png" />
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Información</title>
</head>

<body>
    @include('nav.navA')
    <main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="formulario">
            <h2>Lista de Usuarios</h2>
           <!--<h3><a style="color: aliceblue;" href="/Administrador/formulario">Crear Usuario</a></h3>-->
           <style>
    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
      color: black;
    }
    .btn-ver-detalles {
      background-color: #4caf50;
      color: white;
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Teléfono</th>
      <th>Tipo de Documento</th>
      <th>Número de Documento</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Juan</td>
      <td>Pérez</td>
      <td>555-1234</td>
      <td>DNI</td>
      <td>12345678</td>
      <td><a class="btn-ver-detalles" onclick="verDetalles('Juan Pérez')" href="{{ asset('pdf/Factura Hotel.pdf') }}" target="_blank">Descargar</a>
    </tr>
    <tr>
      <td>Maria</td>
      <td>Gomez</td>
      <td>555-5678</td>
      <td>Pasaporte</td>
      <td>AB123456</td>
      <td><button class="btn-ver-detalles" onclick="verDetalles('Maria Gomez')">Descargar</button></td>
    </tr>
    <tr>
      <td>Carlos</td>
      <td>Rodriguez</td>
      <td>555-8765</td>
      <td>Cédula</td>
      <td>98765432</td>
      <td><button class="btn-ver-detalles" onclick="verDetalles('Carlos Rodriguez')">Descargar</button></td>
    </tr>
    <tr>
      <td>Laura</td>
      <td>Fernández</td>
      <td>555-4321</td>
      <td>RUT</td>
      <td>87654321</td>
      <td><button class="btn-ver-detalles" onclick="verDetalles('Laura Fernández')">Descargar</button></td>
    </tr>
    <tr>
      <td>Pablo</td>
      <td>Martínez</td>
      <td>555-9876</td>
      <td>Pasaporte</td>
      <td>CD654321</td>
      <td><button class="btn-ver-detalles" onclick="verDetalles('Pablo Martínez')">Descargar</button></td>
    </tr>
  </tbody>
</table>

<script>
  function verDetalles(nombreCompleto) {
    alert('Descargar Factura Para: ' + nombreCompleto);
    // Puedes personalizar esta función para mostrar los detalles relevantes para cada fila.
  }
</script>
        </div>
    </div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
