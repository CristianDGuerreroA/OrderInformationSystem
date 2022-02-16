@extends('adminlte::page')

@section('title', 'Menu')

@section('content_header')
    <center><h1>Initial Interface</h1></center>
@stop

@section('content')
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Menu
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="/users">Administrate Users</a>
      <a class="dropdown-item" href="/orders">Create orders</a>
      <a class="dropdown-item" href="/orders/inputparams">View Orders</a>
      <a class="dropdown-item" href="/orders/pdfform">Generate PDF</a>
      <a class="dropdown-item" href="#">Edit Orders </a>
    </div>
  </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop