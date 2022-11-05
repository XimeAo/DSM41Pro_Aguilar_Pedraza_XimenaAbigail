@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edición de Ventas</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Venta</h6>
            </div>
            <div class="card-body">
                
            <form>
                <label for=""> Cantidad:</label>
                <input class="form-control" type="num" value="quantity" name="quantity" id="quantity">
                <label for=""> Precio:</label>
                <input class="form-control" type="num" value="price" name="price" id="price">
                <label for="">Venta</label><br>
                <select id="sales" name="sales" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($sales as $sale)
                        <option value="{{ $sale->id }}">{{ $sale->id }} -> {{ $sale->total }} </option>
                    @endforeach
                </select>
                <label for="">Producto</label><br>
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