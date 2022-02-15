@extends('layouts.coretemplate')

@section('content')
<h2> EDIT USERS</h2>
<form action="/users/{{$user->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label"> Name </label>
        <input id="name" name="name" type="text" class="form-control" tabindex="1" value="{{$user->name}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Email </label>
        <input id="email" name="email" type="text" class="form-control" tabindex="2" value="{{$user->email}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Password </label>
        <input id="password" name="password" type="text" class="form-control" tabindex="3" value="{{$user->password}}">
    </div>
    <a href="/user" class="btn btn-secondary" tabindex="5"> Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="4"> Save </button>
</form>
@endsection