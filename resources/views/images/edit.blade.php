@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edición de Imagenes</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Imágen</h6>
            </div>
            <div class="card-body">
                
            <form>
                <input class="form-control" type="text" placeholder="ID Asignado" aria-label="Disabled input example" disabled>
                <label for="">Imagen</label>
                <input class="form-control" type="text" value="" name="">
                <select id="products" name="products" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->id }} -> {{ $product->product }} </option>
                    @endforeach
                </select>
                
                    <button type="submit" class="btn btn-primary m-3">Guadar</button>

                </div>
            </form>
            </div>
        </div>