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


            <form action="{{route('admin.category.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="bg-secondary rounded h-100 p-4 ">
                    <div class="bg-secondary rounded h-100 p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-4">ADD CATEGORY</h6>
                            </div>
                            <div class="col-md-6 ">
                                <a href="{{route('admin.category.index')}}">
                                    <button type="button" style="float: right;" class="btn btn-primary mb-4">VIEW CATEGORY<i class="fa fa-home ms-2"></i></button>
                                </a>
                            </div>
                        </div>
                        <!-- <h2 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" class="mb-4">ADD CATEGORY</h2> -->

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="name" pattern="[a-zA-Z ]*$" placeholder="name@example.com" required>
                            <label for="floatingInput">CATEGORY NAME</label>
                        </div>

                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">CATEGORY IMAGE</label>
                            <input class="form-control bg-dark" name="photo" type="file" id="formFileMultiple" multiple>
                        </div>

                        <div class="form-floating">
                            <button type="submit" class="btn btn-primary mt-3 w-100 btn-block">ADD CATGEORY</button>

                        </div>

                    </div>
            </form>
        </div>
    </div>
</div>

@endsection