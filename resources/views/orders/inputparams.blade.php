@extends('layouts.coretemplate');

@section('css')
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection



@section('content')

<h2> Input Parameters</h2>
<form action="/orders/inputparams'" method="get">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label"> Product ID </label>
        <input id="product_id" name="product_id" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Date Order </label>
        <input id="date_order" name="date_order" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Customer ID </label>
        <input id="customer_id" name="customer_id" type="text" class="form-control" tabindex="3">
    </div>
    <a href="/orders" class="btn btn-secondary" tabindex="5"> Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="4"> Consult </button>
</form>

<br>
<table id="orders" class="table table-bordered table-striped shadow-lg mt-4" style="width:100%">
    
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> Date order </th>
            <th scope="col"> Customer name </th>
            <th scope="col"> Customer ID </th>
            <th scope="col"> Customer address </th>
            <th scope="col"> Customer email </th>
            <th scope="col"> Order currency </th>
            <th scope="col"> Product ID </th>
            <th scope="col"> Product name </th>
            <th scope="col"> Product quantity </th>
            <th scope="col"> Product unit of measure</th>
            <th scope="col"> Net product value </th>     
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->date_order}}</td>
            <td>{{$order->customer_name}}</td>
            <td>{{$order->customer_id}}</td>
            <td>{{$order->customer_address}}</td>
            <td>{{$order->customer_email}}</td>
            <td>{{$order->order_currency}}</td>
            <td>{{$order->product_id}}</td>
            <td>{{$order->product_name}}</td>
            <td>{{$order->product_quantity}}</td>
            <td>{{$order->product_unit_of_measure}}</td>
            <td>{{$order->net_product_value}}</td>
            <td>
            <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
                <a href="/orders/{{$order->id}}/edit" class="btn btn-info">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    


@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
         $('orders').DataTable();
        } );
    </script>
@endsection

@endsection