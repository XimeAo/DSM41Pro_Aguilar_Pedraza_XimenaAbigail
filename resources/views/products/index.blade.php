@include('layouts.header')

@include('layouts.menu')



@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Productos</h1>
    
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
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el Producto?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Informacion del Producto</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/products">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-dark">Lista De Productos</h3>
                            <div class="d-flex justify-content-end">
                                <label for=""></label>
                                    <a class="btn btn-info" href="products/create"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
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
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                            <th>Precio</th>
                                            <th>Existencias</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Categoria</th>
                                            <th>Imagen</th>
                                            <th>Ver</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->product}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->stock}}</td>
                                            <td>{{$product->marks?->mark}}</td>
                                            <td>{{$product->modelos?->model}}</td>
                                            <td>{{$product->categories?->category}}</td>
                                            <td>
                                                <img src="{{asset($product->images->image)}}" alt="" style="width: 150px">
                                            </td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="products/{{$product->id}}"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="products/{{$product->id}}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-4">
                                                    <form action="products/{{$product->id}}" method="POST">
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
