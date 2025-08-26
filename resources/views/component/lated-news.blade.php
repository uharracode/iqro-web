<div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row gy-4">
    @foreach ($articles as $article)
      @php
        $media = $article->media->where('label', 'berita')->first(); // hanya media berlabel gambar
      @endphp

      <div class="col-lg-4">
        <article>

          <div class="post-img">
            @php
              $media = $article->media->where('label', 'berita')->first();
            @endphp

            @if($media)
              <img src="{{ Storage::url($media->file_path) }}" alt="{{ $article->title }}" class="img-fluid">
            @endif
          </div>

          <p class="post-category">{{ $article->judul ?? '' }}</p>

          <h2 class="title">
            <a href="{{ $article->url_click ?? '#' }}">{{ $article->title ?? '' }}</a>
          </h2>

          <div class="d-flex align-items-center">
            <img src="" alt="" class="img-fluid post-author-img flex-shrink-0">
            <div class="post-meta">
              <p class="post-author"></p>
              <p class="post-date">
                <time datetime=""></time>
              </p>
            </div>
          </div>

        </article>
      </div><!-- End post list item -->
    @endforeach
  </div>
</div>
