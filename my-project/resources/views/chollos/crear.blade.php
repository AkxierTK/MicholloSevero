
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{URL::asset('style/style.css')}}">
  <title>Chollo Severo</title>
</head>

    <body class="test">
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0 text-white ">
      <div class="container caja">
        <div class="card login-card login bg-dark shadow-sm">
            <div class="col-md-12">
              <div class="card-body logeador">
                <div class="brand-wrapper">
                  <img src="{{URL::asset('media/logoChollo.png')}}"  alt="logo" class="logo">
                </div>
                @if(session('mensaje'))
                  <p>{{session('mensaje')}}</p>
                @endif
                <span class="text-uppercase font-weight-bold display-4 mb-1">Crea Chollo</span>
                <form action="{{ route('cholloCreado') }}" method="post">
                  @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
                  <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" class="form-control inputs campo" required>
                  </div>
                  <div class="form-group mb-4">
                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control inputs campo" required >
                  </div>
                  <div class="form-group mb-4">
                    <label for="url">URL</label>
                    <input type="url" name="url" id="url" class="form-control inputs campo" required >
                  </div>
                  <div class="form-group mb-4">
                    <label for="categoria">Categoria</label>
                      <select name="categoria" class="form-select" aria-label="Default select example">
                        <option value="Tecnología">Tecnología</option>
                        <option value="Hogar" selected>Hogar</option>
                        <option value="Videojuegos">Videojuegos</option>
                      </select>
                  </div>
                  <div class="form-group mb-4">
                    <label for="precio">Precio</label>
                    <input type="text" name="precio" id="precio" class="form-control inputs campo" required >
                  </div>
                  <div class="form-group mb-4">
                    <label for="precioDescuento">Precio con Descuento</label>
                    <input type="text" name="precioDescuento" id="precioDescuento" class="form-control inputs campo" required >
                  </div>
                   {{-- <div class="form-group mb-4"> --}}
                    {{-- <label for="archivo" accept="image/png"><b>Foto: </b></label>
                    <input type="file" name="archivo" required>
                  </div> --}}
                  <input name="login" id="login" class="btn btn-block login-btn mb-4 boton font-weight-bold" type="submit" value="Crear">
                </form>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>