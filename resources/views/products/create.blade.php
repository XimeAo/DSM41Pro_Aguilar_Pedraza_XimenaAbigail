@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Alta de Productos</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Producto</h6>
            </div>
            <div class="card-body">
                
            <form action="/products" method="POST">
                {!!csrf_field()!!}
                <label for=""> Producto:</label>
                <input class="form-control" type="text"   name="product" id="product">
                @error('product')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Descripción:</label>
                <input class="form-control" type="text"  name="description" id="description">
                @error('description')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Precio:</label>
                <input class="form-control" type="num"  name="price" id="price">
                @error('price')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for=""> Existencias:</label>
                <input class="form-control" type="num"  name="stock" id="stock">
                @error('stock')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for="">Marca</label><br>
                <select id="marks" name="marks" class="form-control">
                    <option value="">Seleccionar</option>
                    @foreach ($marks as $mark)
                        <option value="{{ $mark->id }}">{{ $mark->id }} -> {{ $mark->mark }} </option>
                    @endforeach
                </select>
                @error('marks')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for="">Modelo</label><br>
                <select id="modelos" name="modelos" class="form-control">
                    <option value="">Seleccionar</option>
                    @foreach ($modelos as $modelo)
                        <option value="{{ $modelo->id }}">{{ $modelo->id }} -> {{ $modelo->model }} </option>
                    @endforeach
                </select>
                @error('modelos')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for="">Categoria</label><br>
                <select id="categories" name="categories" class="form-control">
                    <option value="">Seleccionar</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->id }} -> {{ $category->category }} </option>
                    @endforeach
                </select>
                @error('categories')
                    <small>{{$message}}</small>
                @enderror <br>
                <label for="">Imagen</label><br>
                <select id="images" name="images" class="form-control">
                    <option value="">Seleccionar</option>
                    @foreach ($images as $image)
                        <option value="{{ $image->id }}">{{ $image->id }} -> 
                            <img src="{{ asset($image->image) }}" alt=""></option>
                    @endforeach
                </select>
                @error('images')
                    <small>{{$message}}</small>
                @enderror <br>
                
                
                    <button type="submit" class="btn btn-primary m-3">Guardar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>