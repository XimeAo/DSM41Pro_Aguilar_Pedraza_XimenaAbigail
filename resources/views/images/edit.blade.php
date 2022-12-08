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
                
                <form action="{{url('images/' .$images->id)}}" method="POST" enctype="multipart/form-data">
                    {!!csrf_field()!!}
                    @method("PATCH")
                <input class="form-control" type="text" value="{{$images->id}}" placeholder="ID Asignado" aria-label="Disabled input example" disabled>
                <label for=""> Imagen:</label> <br>
                <input  type="file"  name="image" id="image" value="{{$images->image}}" accept="image/*"><br>
                @error('image')
                    <small class="text-danger">{{$message}}</small>
                @enderror <br>
                
                
                
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>