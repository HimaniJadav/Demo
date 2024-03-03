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
                        <h6 class="mb-4">VIEW gallery</h6>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('admin.gallery.create')}}">
                            <button type="button" style="float: right;" class="btn btn-primary m-2">ADD gallery<i class="fa fa-home ms-2"></i></button>
                        </a>
                    </div>
                </div>

                <div class="table-responsive">

                    <table id="myDataTable" class="table">
                        <thead>
                            <tr>
                                <th scope="col">Item NAME</th>
                                <th scope="col">item PHOTO</th>
                                <th scope="col">ACTION</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gdata as $gdata)
                            <tr>

                                <td>{{ $gdata->name }}</td>
                                <td><img src="{{ url('/gallery') }}/{{ $gdata->photo }}" style="width: 100px; height: 100px; border-radius: 15px;" alt="gallery Photo"></td>
                                <td>
                                    <a href="{{ route('admin.gallery.edit', $gdata->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a> &nbsp;
                                    <a href="{{ route('admin.gallery.delete', $gdata->id) }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
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