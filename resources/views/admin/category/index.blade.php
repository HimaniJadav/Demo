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
                        <h6 class="mb-4">VIEW CATEGORY</h6>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('admin.category.create')}}">
                            <button type="button" style="float: right;" class="btn btn-primary m-2">ADD CATEGORY<i class="fa fa-home ms-2"></i></button>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">

                    <table class="table" id="myDataTable">
                        <thead>
                            <tr>
                                <th scope="col">CATEGORY NAME</th>
                                <th scope="col">CATEGORY PHOTO</th>
                                <th scope="col">ACTION</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cdata as $cdata)
                            <tr>

                                <td>{{ $cdata->name }}</td>
                                <td><img src="{{ url('/category') }}/{{ $cdata->photo }}" style="width: 100px; height: 100px; border-radius: 15px;" alt="Category Photo"></td>
                                <td>
                                    <a href="{{ route('admin.category.edit', $cdata->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>&nbsp;
                                    <a href="{{ route('admin.category.delete', $cdata->id) }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
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