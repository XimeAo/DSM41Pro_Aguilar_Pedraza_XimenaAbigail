@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edición de Modelo</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Modelo</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('modelos/' .$modelos->id)}}" method="POST">
                {!!csrf_field()!!}
                 @method("PATCH")
                <input class="form-control" type="text" value="{{$modelos->id}}" placeholder="ID Asignado" aria-label="Disabled input example" disabled>
                <label for="">Modelo</label>
                <input class="form-control" type="text" value="{{$modelos->model}}" name="modelo" id="modelo">
                <label for=""> Año</label>
                <input class="form-control" type="num" value="{{$modelos->year}}" name="year" id="year">
                <label for="">Marca</label>
                <select id="marks_id" name="marks_id" class="form-control">
                    <option value="{{$modelos->marks_id}}">{{$modelos->marks->mark}}</option>
                    @foreach ($marks as $mark)
                        <option value="{{ $mark->id }}">{{ $mark->id }} -> {{ $mark->mark }} </option>
                    @endforeach
                </select>
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>