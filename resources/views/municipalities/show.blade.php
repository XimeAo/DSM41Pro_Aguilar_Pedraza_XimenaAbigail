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
                        <h1 class="m-0 font-weight-bold text-primary">Municipio</h1>
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
                                            <th>Municipio</th>
                                            <th>Estado_id</th>
                                       </tr>
                                   </thead>
                                   
                                   <tbody>
                                       <tr>
                                            <td>{{$municipality->id}}</td>
                                            <td>{{$municipality->municipality}}</td>
                                            <td>{{$municipality->estates_id}}</td>
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
