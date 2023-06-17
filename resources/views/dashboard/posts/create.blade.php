@extends('layouts.app')

@section('content')

<div class="container">
    <div class="abs-center">
 <h1>Crear publicaciones</h1>
        
  </div>
 </div>
   @include('dashboard.fragment._errors-form')
   <form action="{{route('posts.store')}}" method="post">
    @include('dashboard.posts._form')

</form>

@endsectiont