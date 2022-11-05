@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Alta de Tipo de Usuarios</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Tipo de Usuario</h6>
            </div>
            <div class="card-body">
                
            <form action="/typeusers" method="POST">
                {!!csrf_field()!!}
                <label for=""> Tipo de Usuario:</label>
                <input class="form-control" type="text"  name="type_user" id="type_user">
                <select id="users" name="users" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->id }} -> {{ $user->name }} </option>
                    @endforeach
                </select>
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>