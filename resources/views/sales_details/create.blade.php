@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Alta de Detalle de Ventas</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Registro Venta_Detalle</h6>
            </div>
            <div class="card-body">
                
            <form action="/sales_details" method="POST">
                {!!csrf_field()!!}
                <label for=""> Cantidad:</label>
                <input class="form-control" type="num"  name="quantity" id="quantity">
                <label for=""> Precio:</label>
                <input class="form-control" type="num"  name="price" id="price">
                <label for="">Venta</label><br>
                <select id="sales" name="sales" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($sales as $sale)
                        <option value="{{ $sale->id }}">{{ $sale->id }} -> {{ $sale->total }} -> {{$sale->users_id}} </option>
                    @endforeach
                </select><br>
                <label for="">Producto</label>
                <select id="products" name="products" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->id }} -> {{ $product->product }} </option>
                    @endforeach
                </select>
                
                
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>