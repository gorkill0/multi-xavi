@extends('layouts.public')

@section('heading', __('Add Book'))

@section('content')
<div class="row">
  <div class="col-12 col-md-5">
    <form method="post" action="{{ route('book.store') }}" class="mt-3">
      @csrf
      @include('book.form')
    </form>
  </div>
</div>
@endsection
