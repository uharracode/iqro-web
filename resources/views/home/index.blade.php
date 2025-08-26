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
<div class="container">
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
</div>
{{-- slider end --}}
<div class="site-section">
<div class="container">
<div class="row justify-content-center text-center">
<div class="col-md-10">
<div class="heading-39101 mb-5">
<span class="backdrop text-center">Testimonials</span>
<span class="subtitle-39191">Testimony</span>
<h3>Happy Customers</h3>
</div>
</div>
</div>
{{-- lasted post --}}
</div>
</div>

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