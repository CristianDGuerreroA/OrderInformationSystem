@extends('layouts.coretemplate');

@section('content')
<a href="users/create" class="btn btn-primary"> CREATE </a>
<table class="table table-dark table-striped mt-4">
    
    <thead>
        <tr>
            <th scope="col"> Name </th>
            <th scope="col"> Email </th>
            <th scope="col"> Password </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                <a href="/users/{{$user->id}}/edit" class="btn btn-info">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>
   <table class="table table-dark table-striped mt-4">
    
</table> 

@endsection