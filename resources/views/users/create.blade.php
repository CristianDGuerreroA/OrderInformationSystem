@extends('layouts.coretemplate');

@section('content')
<h2> Create Users</h2>
<form action="/users" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label"> Name </label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Email </label>
        <input id="email" name="email" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Password </label>
        <input id="password" name="password" type="password" class="form-control" tabindex="3">
    </div>
    <a href="/user" class="btn btn-secondary" tabindex="5"> Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="4"> Save </button>
</form>
@endsection