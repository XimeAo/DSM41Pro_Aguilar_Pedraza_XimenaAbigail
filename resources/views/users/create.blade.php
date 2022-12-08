@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Alta de Usuarios</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta de Usuario</h6>
            </div>
            <div class="card-body">
                
            <form action="/users" method="POST">
                {!!csrf_field()!!}
                <label for=""> Nombre:</label>
                <input class="form-control" type="text"  name="name" id="name">
                @error('name')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Teléfono:</label>
                <input class="form-control" type="num"  name="phone" id="phone">
                @error('phone')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Correo electrónico:</label>
                <input class="form-control" type="text"  name="email" id="email">
                @error('email')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Contraseña:</label>
                <input class="form-control" type="password"  name="password" id="password">
                @error('password')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Fecha de nacimiento:</label>
                <input class="form-control" type="date"  name="birthday" id="birthday">
                @error('birthday')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Sexo:</label>
                <p><input  type="radio" value="Femenino" name="sex" id="sex">Femenino</p>
                <p><input  type="radio" value="Masculino" name="sex" id="sex">Masculino</p>
                @error('sex')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Localidad:</label>
                <input class="form-control" type="text"  name="location" id="location">
                @error('location')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Calle:</label>
                <input class="form-control" type="text"  name="street" id="street">
                @error('street')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Número exterior:</label>
                <input class="form-control" type="num"  name="outdoor_number" id="outdoor_number">
                @error('outdoor_number')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Número Interior:</label>
                <input class="form-control" type="num"  name="indoor_number" id="indoor_number">
                <label for=""> Código Postal:</label>
                <input class="form-control" type="num"  name="postal_code" id="postal_code">
                @error('postal_code')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Entre calles:</label>
                <input class="form-control" type="text"  name="between_streets" id="between_streets">
                @error('between_streets')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for="">Estado</label><br>
                <select id="estates" name="estates" class="form-control">
                    <option value="">Seleccionar</option>
                    @foreach ($estates as $estate)
                        <option value="{{ $estate->id }}">{{ $estate->id }} -> {{ $estate->estate }} </option>
                    @endforeach
                </select><br>
                @error('estates')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for="">Municipio</label><br>
                <select id="municipalities" name="municipalities" class="form-control">
                    <option value="">Seleccionar</option>
                    @foreach ($municipalities as $municipality)
                        <option value="{{ $municipality->id }}">{{ $municipality->id }} -> {{ $municipality->municipality }} </option>
                    @endforeach
                </select><br>
                @error('municipalities')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for="">Tipo de Usuario:</label><br>
                <select id="typeusers" name="typeusers" class="form-control">
                    <option value="">Seleccionar</option>
                    @foreach ($typeusers as $typeuser)
                        <option value="{{ $typeuser->id }}">{{ $typeuser->id }} -> {{ $typeuser->type_user }} </option>
                    @endforeach
                </select><br>
                @error('typeusers')
                    <small>{{$message}}</small>
                @enderror <br>
                
                
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>