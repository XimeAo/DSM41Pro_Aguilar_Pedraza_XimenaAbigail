@include('layouts.header')

@include('layouts.menu')



@section('header')

@endsection
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Refaccionaria el Parque</h1>
        
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
                        <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar la Imagen?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Informacion de la Imagen</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="/images">Continuar</a>
                    </div>
                </div>
            </div>
        </div>
                <div class="card-body">
                    <!-- DataTales Example -->
                    
                            
                            <div class="card-body">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                @foreach ($products as $product)
                                                           
                                <div class="card" style="width: 18rem;">
                                   <center> <img src="{{asset($product->images->image)}}" class="card-img-top" alt="..." style="width: 150px"></center>
                                    <div class="card-body">
                                      <h5 class="card-title">{{$product->product}}</h5>
                                      <p class="card-text">{{$product->description}}</p>
                                      <p class="card text-center" >Precio: {{$product->price}}</p>
                                      
                                    </div>
                                  </div>
                                     
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
              
                </div>
            </div>
    