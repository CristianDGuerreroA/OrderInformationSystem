@extends('layouts.coretemplate');

@section('content')
<h2> Input Parameters</h2>
<form action="/orders/parameters" method="">
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
    <a href="/user" class="btn btn-secondary" tabindex="5"> Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="4"> Save </button>
</form>
@endsection