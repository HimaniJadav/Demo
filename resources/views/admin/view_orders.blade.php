@extends('layouts.admin')
@section('main_content')<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">

            <div class="bg-secondary rounded h-100 p-4">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-4">VIEW ORDERS</h6>
                    </div>

                </div>

                <div class="table-responsive">

                    <table id="myDataTable" class="table">
                        <thead>
                            <tr>
                                <th scope="col"> USER</th>
                                <th scope="col">PRODUCT</th>
                                <th scope="col">quantity</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $order)
                            <tr>
                                <!-- <th scope="row">1</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>jhon@email.com</td>
                                <td>USA</td> -->
                                <td>{{ $order->user_id }}</td>

                                <td>{{ $order->product_id }}</td>
                                <td>{{ $order->quantity }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>@endsection