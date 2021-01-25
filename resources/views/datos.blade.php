<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link 
    rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous"
  >
  <title>Victor - Página de contacto</title>
</head>

<body>
  <div clas="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <h2>Enviar mensaje</h2>
        <form method="post" action="{{ route('datos.store') }}">

          <div class="form-group">
            <input 
              type="text" 
              name="nombre" 
              class="form-control" 
              placeholder="Escribe tu nombre" 
              value="{{ old('nombre') }}"
              autofocus
            >
          </div>

          <div class="form-group">
            <input 
              type="email" 
              name="email" 
              class="form-control" 
              placeholder="Escribe tu email" 
              value="{{ old('email') }}"
            >
          </div>

          <div class="form-group">
            <textarea 
              name="mensaje" 
              class="form-control" 
              placeholder="Escribe tus comentarios" 
              value="{{ old('mensaje') }}"
            ></textarea>
          </div>

          <div class="form-group row justify-content-center">
            <input 
              type="submit" 
              value="Enviar" 
              class="btn btn-primary"
            >
          </div>

          {{ csrf_field() }}

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

        </form>
      </div>
    </div>
  </div>
</body>
