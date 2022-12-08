@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Alta de Modelos</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Modelo</h6>
            </div>
            <div class="card-body">
                
            <form action="/modelos" method="POST">
                {!!csrf_field()!!}
                <label for=""> Modelo:</label>
                <input class="form-control" type="text"  name="modelo" id="modelo">
                @error('modelo')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Año:</label>
                <input class="form-control" type="num"  name="year" id="year">
                @error('year')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Marca:</label>
                <select id="marks" name="marks" class="form-control">
                    <option value="">Seleccionar</option>
                    @foreach ($marks as $mark)
                        <option value="{{ $mark->id }}">{{ $mark->id }} -> {{ $mark->mark }} </option>
                    @endforeach
                </select> 
                @error('marks')
                    <small>{{$message}}</small>
                @enderror <br>
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>