<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Nueva Cita Programada</h2>
<p>        
<strong>Datos personales</strong><br>
    Nombre: {{$contacto['nombres']}}<br>
    Email: {{$contacto['correo']}}<br>
    Tel. Celular: {{$contacto['telefono']}}<br>
    Inmueble: {{$contacto['inmueble']}}<br>
    Fecha: {{$contacto['cita']}}<br>
</p>
</body>
</html>