<!-- Clients Section -->
<section id="clients" class="clients section">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            @foreach($logos as $logo)
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('storage/logo/' . $logo->path_image) }}" 
                         class="img-fluid" 
                         alt="{{ $logo->title ?? 'Client Logo' }}" />
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /Clients Section -->
