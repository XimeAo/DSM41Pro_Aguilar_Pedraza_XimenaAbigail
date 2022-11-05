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
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" value="name" name="name" id="name">
                <label for=""> Teléfono:</label>
                <input class="form-control" type="num" value="phone" name="phone" id="phone">
                <label for=""> Correo electrónico:</label>
                <input class="form-control" type="text" value="email" name="email" id="email">
                <label for=""> Contraseña:</label>
                <input class="form-control" type="text" value="password" name="password" id="password">
                <label for=""> Fecha de nacimiento:</label>
                <input class="form-control" type="date" value="birthday" name="birthday" id="birthday">
                <label for=""> Sexo:</label>
                <input class="form-control" type="radio" value="Femenino" name="sex" id="sex">
                <input class="form-control" type="radio" value="Masculino" name="sex" id="sex">
                <label for=""> Localidad:</label>
                <input class="form-control" type="text" value="location" name="location" id="location">
                <label for=""> Calle:</label>
                <input class="form-control" type="text" value="street" name="street" id="street">
                <label for=""> Número exterior:</label>
                <input class="form-control" type="num" value="outdoor_number" name="outdoor_number" id="outdoor_number">
                <label for=""> Número Interior:</label>
                <input class="form-control" type="num" value="indoor_number" name="indoor_number" id="indoor_number">
                <label for=""> Código Postal:</label>
                <input class="form-control" type="num" value="postal_code" name="postal_code" id="postal_code">
                <label for=""> Entre calles:</label>
                <input class="form-control" type="text" value="between_streets" name="between_streets" id="between_streets">
                <label for="">Estado</label><br>
                <select id="estates" name="estates" class="form-select">
                    <option value="">Seleccionar</option>
                    @foreach ($estates as $estate)
                        <option value="{{ $estate->id }}">{{ $estate->id }} -> {{ $estate->estate }} </option>
                    @endforeach
                </select><br>
                
                    <button type="submit" class="btn btn-primary m-3">Guadar</button>

                </div>
            </form>
            </div>
        </div>