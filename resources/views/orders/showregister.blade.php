@extends('layouts.coretemplate');

@section('css')
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
<table id="orders" class="table table-dark table-striped shadow-lg mt-4">
    
    <thead>
        <tr>
            <th scope="col"> Product ID </th>
            <th scope="col"> Date order </th>
            <th scope="col"> Customer name </th>
            <th scope="col"> Customer ID </th>
            <th scope="col"> Customer address </th>
            <th scope="col"> Customer email </th>
            <th scope="col"> Order currency </th>           
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{$order->product_id}}</td>
            <td>{{$order->date_order}}</td>
            <td>{{$order->customer_name}}</td>
            <td>{{$order->customer_id}}</td>
            <td>{{$order->customer_address}}</td>
            <td>{{$order->customer_email}}</td>
            <td>{{$order->order_currency}}</td>
        </tr>
        @endforeach
    </tbody>
    
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
         $('#orders').DataTable();
        } );
    </script>
@endsection