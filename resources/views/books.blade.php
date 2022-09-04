@extends('layouts.public')

@section('heading', __('Books'))

@section('content')
<a href="{{ route('book.create')}}" class="btn btn-primary">{{__('Create')}}</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">{{__('Title')}}</th>
      <th scope="col">{{__('Author')}}</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $books as $book )
    <tr>
      <td>{{ $book->id }}</td>
      <td>{{ $book->title }}</td>
      <td>{{ $book->author }}</td>
      <td>
        <div>
          <form action="{{ route('book.destroy',  $book) }}" method="post">
            <a class="btn btn-primary" href="{{ route('book.edit',$book) }}" role="button">{{__('Edit')}}</a>
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger d-inline" onclick="return confirm(`{{__('confirm delete')}}`)" value="{{__('Delete')}}">
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection