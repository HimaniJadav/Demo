@extends('layouts.admin')
@section('main_content')
<div class="container-fluid pt-4 px-4" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
    <div class="row g-4">
        <div class="col-sm-12 ">
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

            <form action="{{route('admin.products.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="bg-secondary rounded h-100 p-4 ">
                    <div class="bg-secondary rounded h-100 p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-4">ADD PRODUCTS</h6>
                            </div>
                            <div class="col-md-6 ">
                                <a href="{{route('admin.products.index')}}">
                                    <button type="button" style="float: right;" class="btn btn-primary mb-4">VIEW PRODUCTS<i class="fa fa-home ms-2"></i></button>
                                </a>
                            </div>
                        </div>
                        <!-- <h2 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" class="mb-4">ADD CATEGORY</h2> -->

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" pattern="[a-zA-Z0-9]*$" id="floatingInput" name="name" placeholder="name@gmail.com">
                            <label for="floatingInput">PRODUCT NAME</label>
                        </div>

                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">IMAGE </label>
                            <input class="form-control bg-dark" name="image" type="file" id="formFileMultiple" multiple>
                        </div>

                        <div class="form-floating mt-5">
                            <textarea class="form-control" pattern="[a-zA-Z0-9]*$" name="detail" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                            <label for="floatingTextarea">DETAIL</label>
                        </div>
                        <div class="form-floating mt-5">
                            <textarea class="form-control" pattern="[a-zA-Z0-9]*$" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                            <label for="floatingTextarea">DESCRIPTION</label>
                        </div>

                        <div class="input-group mt-3">
                            <span class="input-group-text">
                                &#8377;</span>
                            <input type="text" name="price" required pattern="(\+?\d[- .]*){7,13}" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>
                        <div class="form-floating mt-3">
                            <select style="color:white" name="c_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Open this select menu for Category</option>
                                <!-- <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option> -->
                                @foreach($category as $category)
                                <option value="{{$category->id}}"> {{$category->name}}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Works with selects</label>
                        </div>
                        <!--  -->

                        <!--  -->
                        <div class="form-floating">
                            <button type="submit" class="btn btn-primary mt-3 w-100 btn-block">ADD PRODUCTS</button>

                        </div>

                    </div>
            </form>
        </div>
    </div>
</div>

@endsection