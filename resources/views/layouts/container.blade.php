@yield('container')
@include('layouts.menu')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Refaccionaria el Parque</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
      </svg> Iniciar sesion</a>
  </div>

<!-- Content Row -->

<!-- Content Row -->


    <div class="row mx-auto container-fluid">
      @foreach ($images as $image)
          
      
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="{{asset($image->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$image->products->product}}</h5>
              <p class="card-text">{{$image->products->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
        

    </div>

  </div>


  


  
<!-- /.container-fluid -->


<!-- End of Main Content -->
    