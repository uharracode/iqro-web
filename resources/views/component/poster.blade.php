<div class="owl-carousel slide-one-item">
    @foreach ($poster as $post)
        @php
            $quoteImage = $post->media->firstWhere('label', 'quote');
        @endphp

        <div class="testimonial-39191 d-flex justify-content-center">
            <div class="mr-4">
                @if ($quoteImage)
                    <img src="{{ asset('storage/' . $quoteImage->file_path) }}" alt="{{ $post->title }}" class="img-fluid">
                @else
                    {{-- Optional fallback --}}
                    <img src="{{ asset('assets/img/default-quote.jpg') }}" alt="Default Quote Image" class="img-fluid">
                @endif
            </div>
        </div>
    @endforeach
</div>

