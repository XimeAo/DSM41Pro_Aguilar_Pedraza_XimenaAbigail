@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Alta de Productos</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Producto</h6>
            </div>
            <div class="card-body">
                
            <form action="/products" method="POST">
                {!!csrf_field()!!}
                <label for=""> Producto:</label>
                <input class="form-control" type="text"  name="product" id="product">
                <label for=""> Descripción:</label>
                <input class="form-control" type="text"  name="description" id="description">
                <label for=""> Precio:</label>
                <input class="form-control" type="num"  name="price" id="price">
                <label for=""> Existencias:</label>
                <input class="form-control" type="num"  name="stock" id="stock">
                <label for="">Marca</label><br>
                <select id="marks" name="marks" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($marks as $mark)
                        <option value="{{ $mark->id }}">{{ $mark->id }} -> {{ $mark->mark }} </option>
                    @endforeach
                </select><br>
                <label for="">Modelo</label><br>
                <select id="modelos" name="modelos" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($modelos as $modelo)
                        <option value="{{ $modelo->id }}">{{ $modelo->id }} -> {{ $modelo->model }} </option>
                    @endforeach
                </select><br>
                <label for="">Categoria</label><br>
                <select id="categories" name="categories" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->id }} -> {{ $category->category }} </option>
                    @endforeach
                </select>
                
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>