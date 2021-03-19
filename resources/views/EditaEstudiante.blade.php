<!DOCTYPE html>
<html lang="en">
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
    <title>Victor - Editar estudiantes</title>
  </head>

  <body>
    <div clas="container">
      <div class="row justify-content-center">
        <div class="col-6">
          <h2>Editar estudiantes</h2>

          <form method="post" action="{{route ('Lista.update' ,$estudiante)}}" >
          @method('PATCH')
              <div class="form-group">
                <input 
                  type="text" 
                  name="Matricula" 
                  class="form-control" 
                  placeholder="Matricula"
                  value="{{$estudiante->Matricula}}"
                  readonly
                >
              </div>

              <div class="form-group">
                <input 
                  type="text" 
                  name="Nombre" 
                  class="form-control"
                  placeholder="Nombre" 
                  autofocus
                  value="{{$estudiante->Nombre}}"
                >
              </div>

              <div class="form-group">
                <input 
                  type="text" 
                  name="Direccion" 
                  class="form-control"
                  placeholder="Dirección"
                  value="{{$estudiante->Direccion}}"
                ></textarea>
              </div>

              <div class="form-group row justify-content-center">
                <input 
                  type="submit" 
                  value="Actualizar" 
                  class="btn btn-primary"
                  style="margin-right: 5px"
                >
                <a
                  href="/Lista"
                  class="btn btn-danger"
                  style="margin-right: 5px"
                >Cancelar</a>
                {{ csrf_field() }}
              </div>
          </form>

        </div>
      </div>
    </div>
  </body>
</html>
