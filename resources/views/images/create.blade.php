@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Registro de Imagenes</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Registro Imagenes</h6>
            </div>
            <div class="card-body">
                
            <form action="/images" method="POST">
                {!!csrf_field()!!}
                <label for=""> Imagen:</label>
                <input class="form-control" type="text"  name="image" id="image">
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
