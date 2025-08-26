<section id="featured-posts" class="init-swiper featured-posts-slider mb-5">
    <!-- Konfigurasi Swiper -->
    <script class="swiper-config" type="application/json">
        {
            "loop": true,
            "speed": 600,
            "autoplay": {
                "delay": 5000,
                "disableOnInteraction": false
            },
            "slidesPerView": 1,
            "spaceBetween": 20,
            "breakpoints": {
                "768": { "slidesPerView": 2 },
                "1200": { "slidesPerView": 3 }
            }
        }
    </script>

    <div class="swiper-wrapper">
        @foreach($articles as $item)
            @php
                $beritaImages = $item->media->where('label', 'berita')->values();
            @endphp
            <div class="swiper-slide">
                <article class="card border-0 shadow-sm h-100">
                    {{-- Gambar dari relasi media label "berita" --}}
                    @if ($beritaImages->count())
                        <img src="{{ asset('storage/' . $beritaImages->first()->file_path) }}" alt="{{ $item->title }}" class="card-img-top" style="object-fit: cover; height: 200px;">
                    @else
                        <img src="{{ asset('assets/img/blog/blog-post-portrait-1.webp') }}" alt="{{ $item->title }}" class="card-img-top" style="object-fit: cover; height: 200px;">
                    @endif

                    <div class="card-body">
                        <ul class="list-inline text-muted small mb-2">
                            <li class="list-inline-item">
                                <i class="bi bi-calendar"></i>
                                @if ($item->publish_at)
                                    {{ \Carbon\Carbon::parse($item->publish_at)->format('M d, Y') }}
                                @else
                                    Tidak ada tanggal
                                @endif
                            </li>
                        </ul>

                        <h5 class="card-title text-warning-emphasis fw-bold">
                            {{ \Illuminate\Support\Str::limit(strip_tags($item->title), 60) }}
                        </h5>

                        <p class="text-muted small mb-2">{{ $item->posisi }}</p>

                        @if ($item->url_click)
                            <a href="{{ $item->url_click }}" class="text-primary text-decoration-none" target="_blank">
                                Kunjungi Link →
                            </a>
                        @endif
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</section>
