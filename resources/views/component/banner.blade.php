<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    @foreach($banner as $key => $item)
      <button
        type="button"
        data-bs-target="#carouselBasicExample"
        data-bs-slide-to="{{ $key }}"
        @if($key == 0) class="active" aria-current="true" @endif
        aria-label="Slide {{ $key + 1 }}"
      ></button>
    @endforeach
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    @foreach($banner as $key => $item)
      @php
          $sliderImage = $item->media->firstWhere('label', 'slider');
      @endphp
      <div class="carousel-item @if($key == 0) active @endif">
        @if ($sliderImage)
          <img src="{{ asset('storage/' . $sliderImage->file_path) }}" class="d-block w-100" alt="{{ $item->title }}">
        @else
          <img src="{{ asset('assets/img/default-slider.jpg') }}" class="d-block w-100" alt="Default Image">
        @endif
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-white">{{ $item->title }}</h5>
        </div>
      </div>
    @endforeach
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselBasicExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselBasicExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
