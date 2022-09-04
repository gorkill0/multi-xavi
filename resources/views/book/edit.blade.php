@extends('layouts.public')

@section('heading', 'Editar Libro')

@section('content')
<div class="row">
  <div class="col-12 col-md-5">
    <form method="post" action="{{ route('book.update', $book) }}" class="mt-3">
      @csrf
      @method('PATCH')
      @include('book.form')
    </form>
  </div>
</div>
@endsection