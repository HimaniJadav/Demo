@extends('layouts.admin')
@section('main_content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">

            <div class="bg-secondary rounded h-100 p-4">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-4">VIEW USERS</h6>
                    </div>

                </div>

                <div class="table-responsive">
                    <table id="myDataTable" class="table">
                        <thead>
                            <tr>
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">MOBILE</th>
                                <!-- <th scope="col">PHOTO</th> -->


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $users)
                            <tr>
                                <!-- <th scope="row">1</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>jhon@email.com</td>
                                <td>USA</td> -->
                                <td>{{ $users->name }}</td>

                                <td>{{ $users->email }}</td>
                                <td>{{ $users->address }}</td>
                                <td>{{ $users->mobile_no }}</td>
                                <!-- <td><img src="{{ url('/users') }}/{{ $users->photo }}" style="width: 100px; height: 100px;" alt="Category Photo"></td> -->

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>@endsection