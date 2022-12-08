@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Alta de Ventas</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Venta</h6>
            </div>
            <div class="card-body">
                
            <form action="/sales" method="POST">
                {!!csrf_field()!!}
                <label for=""> Estado de la Venta:</label>
                <div class="form-group" type="text" name="status" id="status">
                    <select name="status" id="status" class="form-control">
                        <option value="Pendiente de pago">Pendiente de pago</option> 
                        <option value="Pagado">Pagado</option> 
                        <option value="Empacado">Empacado</option> 
                        <option value="Enviado">Enviado</option> 
                        <option value="Recibido">Recibido</option> 
                    </select>
                    @error('status')
                    <small>{{$message}}</small>
                @enderror <br>
                </div>
                
                <label for=""> Número de Guía:</label>
                <input class="form-control" type="num"  name="guide_number" id="guide_number">
                @error('guide_number')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Subtotal:</label>
                <input class="form-control" type="num" name="subtotal" id="subtotal">
                @error('subtotal')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Iva:</label>
                <input class="form-control" type="num"  name="iva" id="iva">
                @error('iva')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Total:</label>
                <input class="form-control" type="num"  name="total" id="total">
                @error('total')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for="">Usuario</label>
                <select id="users" name="users" class="form-control">
                    <option value="">Seleccionar</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->id }} -> {{ $user->name }} </option>
                    @endforeach
                </select>
                @error('users')
                    <small>{{$message}}</small>
                @enderror <br>
                
                
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>