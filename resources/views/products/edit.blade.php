@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edición de Productos</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Producto</h6>
            </div>
            <div class="card-body">
                
            <form>
                <input class="form-control" type="text" placeholder="ID Asignado" aria-label="Disabled input example" disabled>
                <label for="">Producto</label>
                <input class="form-control" type="text" value="" name="">
                <label for="">Descripción</label>
                <input class="form-control" type="text" value="" name="">
                <label for="">Precio</label>
                <input class="form-control" type="num" value="price" name="price" id="price">
                <label for="">Existencias</label>
                <input class="form-control" type="num" value="stock" name="stock" id="stock">
                <label for=""> Año</label>
                    <option value="">Seleccionar</option>
                    @foreach ($marks as $mark)
                        <option value="{{ $mark->id }}">{{ $mark->id }} -> {{ $mark->mark }} </option>
                    @endforeach
                </select>
                <select id="modelos" name="modelos" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($modelos as $modelo)
                        <option value="{{ $modelo->id }}">{{ $modelo->id }} -> {{ $modelo->modelo }} </option>
                    @endforeach
                </select>
                <select id="categories" name="categories" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->id }} -> {{ $category->category }} </option>
                    @endforeach
                </select>
                
                    <button type="submit" class="btn btn-primary m-3">Guadar</button>

                </div>
            </form>
            </div>
        </div>