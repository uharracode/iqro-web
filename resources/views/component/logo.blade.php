<div class="flex gap-4 items-center">
    @foreach ($logos as $logo )
        <img src="{{ $logo->path_image }}" alt="{{ $logo->title }}" class="logo-yys  img-fluid mb-4 mx-5 mt-4">
    @endforeach
  </div>