@include('administrativo.components.header')
@include('administrativo.components.navbar')

<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <!-- add categoria -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProducto">
                    Agregar Productos
                </button>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th class="justify-center" scope="col">#</th>
                        <th class="justify-center" scope="col">imagen</th>
                        <th class="justify-center" scope="col">nombre</th>
                        <th class="justify-center" scope="col">descripcion</th>
                        <th class="justify-center" scope="col">estado</th>
                        <th class="justify-center" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                        <th scope="row">{{ $producto->id }}</th>
                        <td scope="row"><img class="d-block img m-auto" src='{{ $producto->imagen }}' width="50" height="50"></td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->observacion }}</td>
                        <td>
                            <div class='row'>
                                <form class="col-md-2 mx-1" method='POST' action="{{ route('EliminarProducto', $producto->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">D</button>
                                </form>
                                <div class="col-md-2 mx-1">
                                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editarproducto{{$producto->id}}">
                                    E
                                  </button>
                                </div>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">

            </div>
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="addProducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('AddProducto')}}">
              @csrf

              <div class="form-floating mb-3">
                <select name='categoria_id' class="form-select" id="categoria_id" aria-label="Floating label select example" required>
                  <option selected>Abre y selecciona una categoria</option>
                  @foreach ($categorias as $categoria)
                  <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                  @endforeach
                </select>
                <label for="categoria_id">Selecciona una categoria</label>
              </div>

              <div class="form-floating mb-3">
                <select name='subcategoria_id' class="form-select" id="subcategoria_id" aria-label="Floating label select example" required>
                  <option selected>Abre y selecciona una subcategoria</option>
                  @foreach ($subcategorias as $subcategoria)
                  <option value="{{$subcategoria->id}}">{{$subcategoria->nombre}}</option>
                  @endforeach
                </select>
                <label for="subcategoria_id">Selecciona una subcategoria</label>
              </div>

              <div class="form-floating mb-3">
                <input name='nombre' type="text" autofocus required class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nombre</label>
              </div>

              <div class="form-floating mb-3">
                <input name='descripcion' type="text" required class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Descripcion</label>
              </div>

              <div class="form-floating mb-3">
                <input name='observacion' type="text" required class="form-control" id="floatingobservacion" placeholder="observacion">
                <label for="floatingobservacion">Observacion</label>
              </div>

              <div class="form-floating mb-3">
                <input name='precio' type="number" required class="form-control" id="floatingprecio" placeholder="precio">
                <label for="floatingprecio">precio</label>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</main>

@include('administrativo.components.footer')