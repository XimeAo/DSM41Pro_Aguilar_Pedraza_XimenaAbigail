@include('layouts.header')

@include('layouts.menu')



@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ventas</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <!--   <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista De  Carreras</h6>
            </div> -->
             <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar la Venta?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Informacion de la venta</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/sales">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-dark">Lista De Ventas</h3>
                            <div class="d-flex justify-content-end">
                                <label for=""></label>
                                    <a class="btn btn-info" href="sales/create"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                      </svg></a>
                            </div>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Usuario</th>
                                            <th>Día y hora de la compra</th>
                                            <th>Subtotal</th>
                                            <th>Iva</th>
                                            <th>Total</th>
                                            <th>Estado de la Venta </th>
                                            <th>Número de Guía</th>
                                            <th>Ver</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    
                                    <tbody>
                                    @foreach($sales as $sale)
                                        <tr>
                                            <td>{{$sale->id}}</td>
                                            <td>{{$sale->users?->name}}</td>
                                            <td>{{$sale->created_at}}</td>
                                            <td>{{$sale->subtotal}}</td>
                                            <td>{{$sale->iva}}</td>
                                            <td>{{$sale->total}}</td>
                                            <td>{{$sale->status}}</td>
                                            <td>{{$sale->guide_number}}</td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="sales/{{$sale->id}}"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="sales/{{$sale->id}}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-4">
                                                    <form action="sales/{{$sale->id}}" method="POST">
                                                        {!! csrf_field() !!}
                                                        @method("DELETE")
                                                    <button class="btn btn-danger m-3" type="submit"><i class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                            </div>
                                           
                                            
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
          
            </div>
        </div>
