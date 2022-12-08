@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edición de Usuarios</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Usuario</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('users/' .$users->id)}}" method="POST">
                {!!csrf_field()!!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$users->id}}" placeholder="ID Asignado" aria-label="Disabled input example" disabled>
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" value="{{$users->name}}" name="name" id="name">
                <label for=""> Teléfono:</label>
                <input class="form-control" type="num" value="{{$users->phone}}" name="phone" id="phone">
                <label for=""> Correo electrónico:</label>
                <input class="form-control" type="text" value="{{$users->email}}" name="email" id="email">
                <label for=""> Contraseña:</label>
                <input class="form-control" type="password" value="{{$users->password}}" name="password" id="password">
                <label for=""> Fecha de nacimiento:</label>
                <input class="form-control" type="date" value="{{$users->birthday}}" name="birthday" id="birthday">
                <label for=""> Sexo:</label>
                <p><input  type="radio" value="Femenino" name="sex" id="sex">Femenino</p>
                <p><input  type="radio" value="Masculino" name="sex" id="sex">Masculino</p>
                <label for=""> Localidad:</label>
                <input class="form-control" type="text" value="{{$users->location}}" name="location" id="location">
                <label for=""> Calle:</label>
                <input class="form-control" type="text" value="{{$users->street}}"name="street" id="street">
                <label for=""> Número exterior:</label>
                <input class="form-control" type="num" value="{{$users->outdoor_number}}" name="outdoor_number" id="outdoor_number">
                <label for=""> Número Interior:</label>
                <input class="form-control" type="num" value="{{$users->indoor_number}}" name="indoor_number" id="indoor_number">
                <label for=""> Código Postal:</label>
                <input class="form-control" type="num" value="{{$users->postal_code}}" name="postal_code" id="postal_code">
                <label for=""> Entre calles:</label>
                <input class="form-control" type="text" value="{{$users->between_streets}}" name="between_streets" id="between_streets">
                <label for="">Estado</label><br>
                <select id="estates_id" name="estates_id" class="form-control">
                    <option value="{{$users->estates_id}}">{{$users->estates->estate}}</option>
                    @foreach ($estates as $estate)
                        <option value="{{ $estate->id }}">{{ $estate->id }} -> {{ $estate->estate }} </option>
                    @endforeach
                </select><br>
                <label for="">Municipio</label><br>
                <select id="municipalities_id" name="municipalities_id" class="form-control">
                    <option value="{{$users->municipalities_id}}">{{$users->municipalities->municipality}}</option>
                    @foreach ($municipalities as $municipality)
                        <option value="{{ $municipality->id }}">{{ $municipality->id }} -> {{ $municipality->municipality }} </option>
                    @endforeach
                </select><br>
                <label for="">Tipo de Usuario:</label><br>
                <select id="typeusers_id" name="typeusers_id" class="form-control">
                    <option value="{{$users->typeusers_id}}">{{$users->typeusers->type_user}}</option>
                    @foreach ($typeusers as $typeuser)
                        <option value="{{ $typeuser->id }}">{{ $typeuser->id }} -> {{ $typeuser->type_user }} </option>
                    @endforeach
                </select><br>
                
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>