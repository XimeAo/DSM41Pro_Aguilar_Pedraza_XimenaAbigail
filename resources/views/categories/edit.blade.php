@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edición Categorias</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Categoria</h6>
            </div>
            <div class="card-body">
                
                <form action="{{url('categories/' .$category->id)}}" method="POST">
                    {!!csrf_field()!!}
                    @method("PATCH")
                <input class="form-control" type="text" value="{{$category->id}}" placeholder="ID Asignado" aria-label="Disabled input example" disabled>
                <label for=""> Categoria</label>
                <input class="form-control" type="text" value="{{$category->category}}" name="category" id="category">
                
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

@include('layouts.footer')