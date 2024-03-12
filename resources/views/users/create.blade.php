@extends('layouts.app')
@section('content')
<div class="container text-center">

<h2 class="text-center text-dark" >Crear Usuarios</h2>
<from action="{{ route('users.store')}}">
    @csrf
    @include('users.fields')
</from>

</div>
@endsection