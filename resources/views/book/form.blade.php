<div class="col mb-2">
  <label for="title" class="form-label">{{__('Title')}}</label>
  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $book->title) }}">
  @error('title')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col mb-2">
  <label for="author" class="form-label">{{ __('Author') }}</label>
  <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author', $book->author) }}">
  @error('author')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col mb-2">
  <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</div>