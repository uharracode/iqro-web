@extends('layout')
@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
<img src="{{ asset('assets/images/iqro.png')}}" alt="" data-aos="fade-in" class="">
<div class="hero-overlay"></div>
<div class="container">
<div class="row">
<div class="col-lg-10">
<h2 data-aos="fade-up" data-aos-delay="100" class="color-white-opacity-5">Yayasan IQRO' Bekasi</h2>
<p data-aos="fade-up" data-aos-delay="200" class="hero-desc">Selamat datang di website kami 🙏</p>
</div>
</div>
</div>
</section>
<!-- /Hero Section -->
{{-- beranda --}}

{{-- section berita --}}
<div class="site-section py-5">
<div class="container">
<div class="row justify-content-center text-center mb-5">
<div class="col-md-10">
<div class="heading-39101 mb-5">
<span class="backdrop text-center">Berita</span>
<span class="subtitle-39191">Updates</span>
<h3>Berita Terbaru</h3>
</div>
</div>
</div>
<div class="row">
<div data-aos="fade-up">

@include('component.berita')

</div>
</div>
</div>

<div class="site-section py-5">
<div class="container">
<div class="row align-items-center">
<div class="col-md-6">
<div class="heading-39101 mb-5">
<span class="backdrop">Visi</span>
<span class="subtitle-39191">Discover Goals</span>
<h3>Visi Kami</h3>
</div>
<p>Menjadi Yayasan Rujukan dalam menjadikan Nilai-Nilai</p>
<p>AL-Qur'an dan as-sunnah pada realita kehidupan umat</p>
</div>
<div class="col-md-6" data-aos="fade-right">
<img src="{{ asset('assets/images/pak sunu.png') }}" alt="Image" class="img-fluid">
</div>
</div>
<div
class="row gy-4 align-items-stretch justify-content-between features-item">
<br>

@include('component.profile')

</div>
</div>
</div>
{{-- logo lembaga dan unit --}}
<div class=" bg-light py-5">
<marquee class="container text-right">
<div class="row d-flex gap-3">

@include('component.logo')

</div>
</marquee>
</div>

{{-- poster --}}
<div class="site-section">
<div class="container">
<div class="row justify-content-center text-center">
<div class="col-md-7">
<div class="heading-39101 mb-5">
<span class="backdrop text-center">QUOTES</span>
<span class="subtitle-39191">Renungan Islami</span>
<h3>Dengarkan Renungan Islami dari kami</h3>
</div>
</div>
</div>
<div data-aos="fade-down">

@include('component.poster', ['poster' => $poster])

</div>  
</div>
</div>
{{-- slider --}}
<div class="site-section ">
<div class="row justify-content-center text-center mb-5">
<div class="col-md-10">
<div class="heading-39101 mb-5">
<span class="backdrop text-center">SEKOLAH</span>
<span class="subtitle-39191">Yayasan'</span>
<h3>IQRO'</h3>
</div>
</div>
</div>


<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">

{{-- Banner Carousel --}}
@include('component.banner', ['banner' => $banner])
</div>

{{-- slider end --}}
</div>
{{-- slider end --}}
<div class="site-section">
<div class="container">
<div class="row justify-content-center text-center">
<div class="col-md-10">
<div class="heading-39101 mb-5">
<span class="backdrop text-center">Yayasan</span>
<span class="subtitle-39191">LEMBAGA</span>
<h3>Lembaga yayasan IQRO'</h3>
</div>
</div>
<!-- Testimonials Section -->
      <section id="testimonials" class="testimonials section light-background">
        <div class="container">
          <div class="row align-items-center">
           @include('component.testimoni', ['testimoni' => $testimoni])
          </div>
        </div>
      </section>
      <!-- /Testimonials Section -->
</div>
{{-- lasted post --}}
</div>
</div>

<!-- Students Life Block Section -->
    <section id="students-life-block" class="students-life-block section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Students Life</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="content-wrapper">
              <div class="section-tag">
                Student Life
              </div>
              <h2>Excepteur sint occaecat cupidatat non proident sunt in culpa</h2>
              <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa.</p>

              <div class="stats-row">
                <div class="stat-item">
                  <span class="stat-number">85+</span>
                  <span class="stat-label">Student Organizations</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">150+</span>
                  <span class="stat-label">Annual Events</span>
                </div>
              </div>

              <div class="action-links">
                <a href="student-life.html" class="primary-link">Explore Student Life</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="visual-grid">
              <div class="main-visual">
                <img src="assets/img/education/students-7.webp" alt="Campus Life" class="img-fluid">
                <div class="overlay-badge">
                  <i class="bi bi-heart-fill"></i>
                  <span>Campus Community</span>
                </div>
              </div>

              <div class="secondary-visuals">
                <div class="small-visual">
                  <img src="assets/img/education/activities-8.webp" alt="Student Activities" class="img-fluid">
                  <div class="visual-caption">
                    <span>Student Activities</span>
                  </div>
                </div>

                <div class="small-visual">
                  <img src="assets/img/education/activities-5.webp" alt="Academic Excellence" class="img-fluid">
                  <div class="visual-caption">
                    <span>Academic Excellence</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="highlights-section">
          <div class="row g-4">
            <div class="col-lg-4">
              <div class="highlight-card">
                <div class="highlight-image">
                  <img src="assets/img/education/activities-7.webp" alt="Leadership Programs" class="img-fluid">
                </div>
                <div class="highlight-content">
                  <h5>Leadership Development</h5>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="highlight-card">
                <div class="highlight-image">
                  <img src="assets/img/education/activities-9.webp" alt="Cultural Events" class="img-fluid">
                </div>
                <div class="highlight-content">
                  <h5>Cultural Diversity</h5>
                  <p>Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="highlight-card">
                <div class="highlight-image">
                  <img src="assets/img/education/activities-3.webp" alt="Innovation Hub" class="img-fluid">
                </div>
                <div class="highlight-content">
                  <h5>Innovation Hub</h5>
                  <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Students Life Block Section -->

<div class="site-section">
<div class="container">
<div class="row justify-content-center text-center">
<div class="col-md-10">
<div class="heading-39101 mb-5">
<span class="backdrop text-center">News</span>
<span class="subtitle-39191">Lated</span>
<h3>Berita lainnya</h3>
</div>
{{-- berita lama --}}
<section id="latest-posts" class="latest-posts section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
<h2>Last News</h2>
<div><span>Ayo Baca</span> <span class="description-title">Juga berita lainnya</span></div>
</div><!-- End Section Title -->

@include('component.lated-news')

</div>
</div>
{{-- kontak  --}}
<section id="contact" class="contact section mt-5">
<!-- Section Title -->

@include('component.kontak')

</section><!-- /Contact Section -->
</div>
</div>

<div class="site-section bg-image overlay" style="background-image: {{asset('assets/images/iqro-pattern.png')}}">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-7 text-center">
<h2 class="font-weight-bold text-white">Join and Trip With Us</h2>
<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ut, doloremque quo molestiae nesciunt officiis veniam, beatae dignissimos!</p>
<p class="mb-0"><a href="#" class="btn btn-primary text-white py-3 px-4">Get In Touch</a></p>
</div>
</div>
</div>
</div>    

@endsection 