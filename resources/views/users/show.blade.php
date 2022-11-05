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
                        <h1 class="m-0 font-weight-bold text-primary">Usuarios</h1>
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
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                        <th>Correo Electrónico</th>
                                        <th>Contraseña</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Sexo</th>
                                        <th>Localidad</th>
                                        <th>Calle</th>
                                        <th>Número Exterior</th>
                                        <th>Número Interior</th>
                                        <th>Código Postal</th>
                                        <th>Entre Calles</th>
                                        <th>Estados_id</th>
                                       </tr>
                                   </thead>
                                   
                                   <tbody>
                                       <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->password}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->birthday}}</td>
                                        <td>{{$user->sex}}</td>
                                        <td>{{$user->location}}</td>
                                        <td>{{$user->street}}</td>
                                        <td>{{$user->outdoor_number}}</td>
                                        <td>{{$user->indoor_number}}</td>
                                        <td>{{$user->postal_code}}</td>
                                        <td>{{$user->between_streets}}</td>
                                        <td>{{$user->estates_id}}</td>
                                          
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
