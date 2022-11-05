@include('Layouts.header')
@include('Layouts.menu')

    <!-- Begin Page Content -->
    <div class="container-fluid">

     
   

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h1 class="m-0 font-weight-bold text-primary">Producto</h1>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
            
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
                                            <th>Marca_id</th>
                                            <th>Modelo_id</th>
                                            <th>Categoria_id</th>
                                       </tr>
                                   </thead>
                                   
                                   <tbody>
                                       <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->product}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->stock}}</td>
                                            <td>{{$product->marks_id}}</td>
                                            <td>{{$product->modelos_id}}</td>
                                            <td>{{$product->categories_id}}</td>
                                       </tr>
                                       
                                   </tbody>
                               </table>


                    
                </div>
            </div>

          
        </div>


        </div>

    </div>
    <!-- /.container-fluid -->




    @include('Layouts.footer')
