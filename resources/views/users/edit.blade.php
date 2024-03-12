@extends('layouts.app')
@section('content')
   <div class="container">
    <h1 class="text-center">Editar Usuario</h1>
      <form action="{{ route('cursos.update', $curso->cur_id) }}" method="POST">
      
        @csrf 
        @method('PUT')
        @include('cursos.fields')
      </form>

   </div>
@endsection