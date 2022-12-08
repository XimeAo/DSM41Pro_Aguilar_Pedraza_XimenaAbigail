@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edición de Productos</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Producto</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('products/' .$products->id)}}" method="POST">
                {!!csrf_field()!!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$products->id}}" placeholder="ID Asignado" aria-label="Disabled input example" disabled>
                <label for="">Producto</label>
                <input class="form-control" type="text" value="{{$products->product}}" name="product" id="product">
                <label for="">Descripción</label>
                <input class="form-control" type="text" value="{{$products->description}}"  name="description" id="product">
                <label for="">Precio</label>
                <input class="form-control" type="num" value="{{$products->price}}" name="price" id="price">
                <label for="">Existencias</label>
                <input class="form-control" type="num" value="{{$products->stock}}" name="stock" id="stock">
                <label for="">Marca</label><br>
                <select id="marks_id" name="marks_id" class="form-control">
                    <option value="{{$products->marks_id}}">{{$products->marks->mark}}</option>
                    @foreach ($marks as $mark)
                        <option value="{{ $mark->id }}">{{ $mark->id }} -> {{ $mark->mark }} </option>
                    @endforeach
                </select><br>
                <label for="">Modelo</label><br>
                <select id="modelos_id" name="modelos_id" class="form-control">
                    <option value="{{$products->modelos_id}}">{{$products->modelos->model}}</option>
                    @foreach ($modelos as $modelo)
                        <option value="{{ $modelo->id }}">{{ $modelo->id }} -> {{ $modelo->model }} </option>
                    @endforeach
                </select><br>
                <label for="">Categoria</label><br>
                <select id="categories_id" name="categories_id" class="form-control">
                    <option value="{{$products->categories_id}}">{{$products->categories->category}}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->id }} -> {{ $category->category }} </option>
                    @endforeach
                </select>
                <label for="">Imagen</label><br>
                <select id="images_id" name="images_id" class="form-control">
                    <option value="{{$products->images_id}}">{{ asset($products->images->image) }}</option>
                    @foreach ($images as $image)
                        <option value="{{ $image->id }}">{{ $image->id }} ->{{ asset($image->image) }} </option>
                    @endforeach
                </select>
                
                
                    <button type="submit" class="btn btn-primary m-3" value="update">Guardar</button>

                </div>
            </form>
            </div>
        </div>