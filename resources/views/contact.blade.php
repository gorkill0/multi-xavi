@extends('layouts.public')

@section('heading', __('Contact'))

@section('content')
<div class="row">
  <div class="col-12 col-md-9">
    <form method="post" action="{{ route('send') }}" class="mt-3">
      @csrf
      <div class="col mb-2">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="{{ __('example email') }}">
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="col mb-2">
        <label for="message" class="form-label">{{ __('Message') }}</label>
        <input type="textarea" class="form-control @error('message') is-invalid @enderror" id="message" name="message" value="{{ old('message') }}">
        @error('message')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <div class="col mb-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
      </div>
    </form>
  </div>
</div>
@endsection