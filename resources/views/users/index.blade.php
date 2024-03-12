@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


<h2 class="text-center text-dark">Lista Usuarios</h2>
<div>
    <a class="btn btn-success " href="{{ route('users.create')}}">Nuevo usuario</a>
</div>
<table class="table">
    <tr>
        <th>#</th>
        <th>Usuario </th>
        <th>Roles   </th>
        <th>Nombre </th>
        <th>Correo </th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->rol_descripcion}}</td>
        <td>{{$user->usu_nombres}}</td>
        <td>{{$user->email}}</td>
        <td>


        <a href="{{ route('users.edit',$user->usu_id) }}" class="btn btn-primary btn-sm">
            <span class="material-symbols-outlined">
edit
</span> 
</a>
           

            <form action="{{ route('users.destroy',$user->usu_id)}}" method="POST" onsubmit="return confirm('Desea eliminar el Usuario?')">

            @csrf
            @method('DELETE')
            <button type="submit" class="bg-danger btn btn-danger btn-sm"><span class="material-symbols-outlined">
delete
</span>
</button>

        </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection