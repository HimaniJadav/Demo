@extends('layouts.admin')
@section('main_content')
<!-- error or success msg start -->

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- error or success msg end -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">

            <div class="bg-secondary rounded h-100 p-4">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-4">VIEW PRODUCTS</h6>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('admin.products.create')}}">
                            <button type="button" style="float: right;" class="btn btn-primary m-2">ADD PRODUCTS<i class="fa fa-home ms-2"></i></button>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">

                    <!-- <table class="table" id="myDataTable"> -->
                    <table class="table" id="myDataTable">
                        <thead>
                            <tr>
                                <th scope="col">PRODUCT NAME</th>
                                <th scope="col">PRODUCT PHOTO</th>
                                <th scope="col">PRODUCT DESCRIPTIOM</th>
                                <th scope="col">PRODUCT PRICE</th>
                                <th scope="col">PRODUCT CATEGORY</th>
                                <th scope="col">ACTION</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $product)
                            <tr>

                                <td>{{ $product->name }}</td>
                                <td><img src="{{ url('/product') }}/{{ $product->image }}" style="width: 100px; height: 100px; margin-top: 50%; border-radius: 15px;" alt="Category Photo"></td>
                                <td>{{ $product->detail }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->c_id }}</td>
                                <td><br><br>
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a><br><br>
                                    <a href="{{ route('admin.products.delete', $product->id) }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection