<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x XR&CO'2014, Wed, 09 Nov 2022 07:24:45 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="as-hero-wrapper hero-3">
        <div class="hero-slider-3 as-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-dots="true"
            data-xl-dots="true" data-ml-dots="true" data-lg-dots="true">
            @foreach ($slider as $sl )
            <div class="as-hero-slide">
                <div class="as-hero-bg" data-bg-src="foto/{{ $sl->foto }}"><img
                        src="{{ asset('1/yeye/html/acadu/demo/assets/img/hero/hero_overlay_8.png') }}" alt="overlay">
                </div>
                <div class="container z-index-common">
                    <div class="hero-style8">
                        <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">{{ $sl->judul }}</h1>
                        <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.6s"></p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="title-area text-center text-md-start">
                <span class="sub-title">Pilih SMKN 1 Dlanggu</span>
                <h2 class="sec-title fw-medium">Kenapa Harus SMKN 1 Dlanggu ?</h2>
            </div>         
            <div class="row gy-50">
                @foreach ($about as $ab)
                <div class="col-sm-6 col-xl-4">
                    <div class="category-card">
                        <div class="category-card_icon"><img alt="icon"
                                src="{{ asset('jur/' . $ab->icon) }}"></div>
                        <div class="category-card_content">
                            <h3 class="category-card_title"><a href="course.html">{{ $ab->judul }}</a></h3>
                            <p class="category-card_text">{{ $ab->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>       
        </div>
    </section>
    @foreach ($sambutan as $bp )
    <div class="space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="img-box5">
                        <div class="img1"><img
                                src="{{ asset('foto/'. $bp->fotokepsek )}}"
                                alt="about"></div>
                        <div class="shape">
                            <img
                                src="{{ asset('1/yeye/html/acadu/demo/assets/img/normal/about_shape_1.png') }}"
                                alt="shape"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-35"><span class="sub-title"></span>
                        <h2 class="sec-title fw-semibold">{{$bp->judul}}</h2>
                    </div>
                    <p class="mt-n2 mb-25">{!! $bp->sambutan !!}</p>
                </div>
            </div>
        </div>
        @endforeach
        <div class="shape-mockup" data-top="0%" data-right="0"><img
                src="{{ asset('1/yeye/html/acadu/demo/assets/img/shape/cloud_3.png') }}" alt="shape">
        </div>
    </div>
    <br />
    <br />
    <section class="" data-pos-for="#team-sec" data-sec-pos="bottom-half">
        @foreach ($vidio as $vid)
        <div class="container">
            <div class="video-box">
                <div class="overlay"></div><img alt="video" src="foto/{{ $vid->foto }}" width="2000">
                <div class="video-content">
                    <h2 class="video-title">{{ $vid->judul }}</h2>
                    <a class="icon-btn popup-video" href="{{ $vid->link }}">
                        <i class="fas fa-play"></i></a> <span class="video-text">PERHATIKAN</span>
                </div>
            </div>
        </div>
        @endforeach
        <div class="shape-mockup jump" data-left="6%" data-top="10%"><img alt="shapes"
                src="{{ asset('1/yeye/html/acadu/demo/assets/img/shape/circle_5.png') }}"></div>
        <div class="shape-mockup jump-reverse" data-left="6%" data-top="11%"><img alt="shapes"
                src="{{ asset('1/yeye/html/acadu/demo/assets/img/shape/hex_1.png') }}"></div>
    </section>
    <section class="space" data-bg-src="{{ asset('1/yeye/html/acadu/demo/assets/img/bg/team_bg_1.jpg') }}"
        id="team-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mb-5 mb-xl-0">
                    @foreach ($sambutan as $gr)
                    <div class="title-area mb-30 text-center text-xl-start">
                        <h2 class="sec-title fw-medium">{{ $gr->nama }}</h2>
                    </div>
                    <p class="mb-30 text-center text-xl-start">{!! $gr->katakata !!}</p>
                    @endforeach
                    <div class="text-center text-xl-start">
                        <a class="as-btn" href="/dataguru">Selengkapnya<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                  
                </div>
                <div class="col-xl-6">
					<div class="row as-carousel" data-md-slide-show="2" data-slide-show="2">
                        @foreach ($data as $yy)
						<div class="col-md-6 col-lg-4">
							<div class="team-box">
								<div class="team-img">
									<img alt="Team" src="{{ asset('guru/' . $yy->fotoguru) }}" width="500px" >
								</div>
                                <div class="team-content">
                                    <h3 class="team-title">{{$yy->nama}}</h3><span
                                        class="team-desig">{{$yy->subjabatan->subjabatan}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space">
        <div class="container z-index-common">
            <div class="title-area text-center"><span class="sub-title"><i class="fal fa-book me-2"></i>Ditampilkan
                    Acara</span>
                <h2 class="sec-title">Agenda<span class="text-theme fw-light">Sekolah</span></h2>
            </div>
            <div class="row">
                @foreach ($event as $row )
                <div class="col-xl-6">
                    <div class="event-card">
                        <div class="event-card_img"><img class="yy"
                                src="{{ asset('foto/' . $row->foto) }}"
                                alt="event"></div>
                        <div class="event-card_content">
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>{{ $row->tempat }}</p>
                                <p><i class="fa-light fa-calendar-days"></i>{{ $row->tanggalevent }}</p>
                                <p><i class="fal fa-clock"></i>{{ $row->jamevent }}</p>
                            </div>
                            <h3 class="event-card_title">{{ $row->namaevent }}</h3>
                            <div class="event-card_bottom"><a href="/detailevents/{{$row->id}}" class="as-btn">Lihat Acara</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-20 mt-xl-5">
                <a href="events" class="as-btn">Semua Agenda Sekolah<i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
        <div class="shape-mockup jump d-none d-md-block" data-top="0%" data-left="0%"><img
                src="{{ asset('1/yeye/html/acadu/demo/assets/img/shape/dot_shape_3.png') }}" alt="shapes">
        </div>
        <div class="shape-mockup jump d-none d-md-block" data-top="4%" data-right="0%"><img
                src="{{ asset('1/yeye/html/acadu/demo/assets/img/shape/cloud_1.png') }}" alt="shapes">
        </div>
        <div class="shape-mockup jump-reverse d-none d-md-block" data-top="8%" data-right="0%"><img
                src="{{ asset('1/yeye/html/acadu/demo/assets/img/shape/cloud_2.png') }}" alt="shapes">
        </div>

    </section>
    <section class="space bg-smoke">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">BERITA & BLOG TERBARU</span>
                <h2 class="sec-title fw-medium">Dapatkan Setiap Pembaruan</h2>
            </div>

            <div class="row slider-shadow as-carousel" data-lg-slide-show="2" data-md-slide-show="2"
                data-slide-show="3" data-sm-slide-show="1">
                @foreach ($gakenek as $ngelu)
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card">
                        <img class="imgg" src="blog/{{ $ngelu->foto }}"
                            alt="ab.png">
                        <div class="blog-content">
                            <div class="blog-meta style2">
                                <a href="blog.html"><i class="far fa-clock"></i>{{$ngelu->created_at}}</a> <a
                                    href="blog.html"><i class="far fa-folder"></i>{{ $ngelu->kategori->kategori }}</a>
                            </div>
                            <h3 class="blog-title"><a href="blogdetail/{{$ngelu->id}}">{{ $ngelu->judul}}</a></h3>
                            <a class="link-btn" href="blogdetail/{{$ngelu->id}}">Baca Lebih
                                Detail<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>

    </section>
    <div class="bg-smoke" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
        <div class="container as-container3 z-index-common">
            <div class="row gx-10 as-carousel" data-lg-slide-show="5" data-md-slide-show="4" data-slide-show="6"
                data-sm-slide-show="3" data-xs-slide-show="2">
                @foreach ($patner as $pt)
                <div class="col-auto">
                    <div class="insta-box">
                        <img alt="website" class="imgyeye" src="foto/{{ $pt->fotopatner }}"> <a class="icon-btn"
                            href="{{ $pt->link }}" target="_blank"><i
                                class="fa-solid fa-earth-americas"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('landingpage.layout.footer')
    <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/main.js') }}"></script>
    <!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x XR&CO'2014, Wed, 09 Nov 2022 07:30:06 GMT -->
</body>

</html>
