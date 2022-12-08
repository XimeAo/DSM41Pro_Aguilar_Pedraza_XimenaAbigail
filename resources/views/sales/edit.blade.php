@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edición de Ventas</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Venta</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('sales/' .$sales->id)}}" method="POST">
                {!!csrf_field()!!}
                @method("PATCH")
                <label for=""> Estado de la Venta:</label>
                <div class="form-group" type="text" aria-placeholder="{{$sales->status}}" value="{{$sales->status}}" name="status" id="status">
                    <select  value="{{$sales->status}}" name="status" id="status"  class="form-control">
                        <option value="Pendiente de pago">Pendiente de pago</option> 
                        <option value="Pagado">Pagado</option> 
                        <option value="Empacado">Empacado</option> 
                        <option value="Enviado">Enviado</option> 
                        <option value="Recibido">Recibido</option> 
                    </select>
                </div>
                <label for=""> Número de Guía:</label>
                <input class="form-control" type="num" value="{{$sales->guide_number}}" name="guide_number" id="guide_number">
                <label for=""> Subtotal:</label>
                <input class="form-control" type="num" value="{{$sales->subtotal}}" name="subtotal" id="subtotal">
                <label for=""> Iva:</label>
                <input class="form-control" type="num" value="{{$sales->iva}}" name="iva" id="iva">
                <label for=""> Total:</label>
                <input class="form-control" type="num" value="{{$sales->total}}" name="total" id="total">
                <label for="">Usuario</label>
                <select id="users_id" name="users_id" value="{{$sales->users?->name}}" class="form-control">
                    <option value="{{$sales->users_id}}">{{$sales->users?->name}}</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->id }} -> {{ $user->name }} </option>
                    @endforeach
                </select>
                
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>