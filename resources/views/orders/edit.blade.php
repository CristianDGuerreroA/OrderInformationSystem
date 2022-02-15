@extends('layouts.coretemplate')

@section('content')
<h2> EDIT ORDERS</h2>
<form action="/orders/{{$order->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label"> Date order </label>
        <input id="date_order" name="date_order" type="text" class="form-control" tabindex="1" value="{{$order->date_order}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Customer name </label>
        <input id="customer_name" name="customer_name" type="text" class="form-control" tabindex="2" value="{{$order->customer_name}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Customer id </label>
        <input id="customer_id" name="customer_id" type="text" class="form-control" tabindex="3" value="{{$order->customer_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Customer address </label>
        <input id="customer_address" name="customer_address" type="text" class="form-control" tabindex="3" value="{{$order->customer_address}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Customer_email </label>
        <input id="customer_email" name="customer_email" type="text" class="form-control" tabindex="3" value="{{$order->customer_email}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Order currency </label>
        <input id="order_currency" name="order_currency" type="text" class="form-control" tabindex="3" value="{{$order->order_currency}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Product id </label>
        <input id="product_id" name="product_id" type="text" class="form-control" tabindex="3" value="{{$order->product_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Product name </label>
        <input id="product_name" name="product_name" type="text" class="form-control" tabindex="3" value="{{$order->product_name}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Product quantity </label>
        <input id="product_quantity" name="product_quantity" type="text" class="form-control" tabindex="3" value="{{$order->product_quantity}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Product unit of measure </label>
        <input id="product_unit_of_measure" name="product_unit_of_measure" type="text" class="form-control" tabindex="3" value="{{$order->product_unit_of_measure}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Net product value </label>
        <input id="net_product_value" name="net_product_value" type="number" step="any" value="0.00" class="form-control" tabindex="3" value="{{$order->net_product_value}}">
    </div>
    <a href="/order" class="btn btn-secondary" tabindex="5"> Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="4"> Save </button>
</form>
@endsection