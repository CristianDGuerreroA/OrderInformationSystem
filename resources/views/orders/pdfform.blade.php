@extends('layouts.coretemplate');

@section('content')
<h2> Generate PDF</h2>
<form action="/orders" method="get">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label"> Enter product ID </label>
        <input id="product_id" name="product_id" type="text" class="form-control" tabindex="1">
    </div>
    <a href="/order" class="btn btn-secondary" tabindex="5"> Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="4"> Generate PDF </button>
</form>
@endsection  
