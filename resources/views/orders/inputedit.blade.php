@extends('layouts.coretemplate');

@section('content')
<h2> Consult Orders</h2>
<form action="/orders/showregister" method="GET">
    @csrf
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <div class="mb-3">
                <label for="" class="form-label"> Product ID </label>
                <input id="product_id" name="product_id" type="text" class="form-control" tabindex="2">
            </div>
        </div>
        <div class="col-auto">
            <div class="mb-3">
                <label for="" class="form-label"> Date order </label>
                <input id="date_order" name="date_order" type="text" class="form-control" tabindex="1">
            </div>
        </div>
        <div class="col-auto">
            <div class="mb-3">
                <label for="" class="form-label"> Customer ID </label>
                <input id="customer_id" name="customer_id" type="text" class="form-control" tabindex="3">
            </div>
        </div>
        <div>
        <a href="/order" class="btn btn-secondary" tabindex="5"> <i class="fa-solid fa-xmark"></i></a>
        <button type="submit" class="btn btn-primary" tabindex="4"> <i class="fa-solid fa-magnifying-glass"></i> </button>
        </div>
    </div>
</form>
@endsection