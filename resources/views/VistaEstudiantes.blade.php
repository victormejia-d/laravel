<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Victor - Lista de estudiantes</title>
  <link 
    rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous"
  >
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <h4 style="margin-top: 30px">Lista de estudiantes</h4>

      <div class="col-xl-12">
        <form action="{{route('Lista.index')}}" method= "get">
          <div class="form row">
            <div class="col sm-4">
              <input type="text" class="form-control" name="texto">
            </div>
            <div class="col auto">
              <input type="submit" class="btm btn-primary" value="Buscar">
            </div>
          </div>
        </form>
      </div-class-col>

      <div class="col-xl-12">
        <div class="table-responsive">
          
          <table class="table table-striped">
            <thead class="thead-light">
              <tr>
                <th> Matrícula</th>
                <th> Nombre</th>
                <th> Dirección </th>
                <th> Acciones </th>
              </tr>
            </thead>
    
            <tbody>
              @foreach ($estudiante as $estudiantes)
              <tr>
                <td>{{$estudiantes->Matricula}}</td>
                <td>{{$estudiantes->Nombre}}</td>
                <td>{{$estudiantes->Direccion}}</td>
                <td class="row">
                  <a
                    href="{{ route ('Lista.edit',$estudiantes->id) }}"
                    class="btn btn-warning"
                    style="margin-right: 5px"
                  >Editar</a>
                  <form method="POST" action="{{ url("Lista/{$estudiantes->id}") }}">
                    @csrf
                    @method('DELETE')
                    <button
                      class="btn btn-danger"
                      type="submit"
                      onclick="return confirm ('¿Deseas Borrar el alumno {{$estudiantes->Matricula}}?');"
                    >Eliminar</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div-class-col>
    </div>
  </div>
</body>
</html>