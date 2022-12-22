<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Bursa Kerja Khusus</h1>
            <ul class="breadcumb-menu">
                <li>
                    <a href="/">Beranda</a>
                </li>
                <li> <a href="/bkk">Kembali</a></li>
            </ul>
        </div>
    </div>
    <section class="as-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    @foreach ($data as $haha)
                        <div class="as-blog blog-single">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="far fa-city"></i>{{ $haha->perusahaan }}</a>
                                    <a href="#"><i class="far fa-location-dot"></i>{{ $haha->alamat }}</a>
                                </div>
                                <h2 class="blog-title"> {{ $haha->judul }}</h2>
                                <p>{!! $haha->deskripsi !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-xxl-3 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget">
                            <h3 class="widget_title">Deskripsi Perusahaan</h3>
                            @foreach ($perusahaan as $bekaka)
                                <div class="recent-post-wrap">
                                    <div class="course-img"><img src="{{ asset('foto/' . $haha->fotobk) }}"
                                            width="150" alt="Course Image">
                                    </div>
                                    <br/>
                                    <h5 class="blog-title"> {{ $bekaka->perusahaan }}</h5>
                                    <p>{!! $bekaka->deskperusahaan !!}</p>
                                </div>
                            @endforeach
                        </div>
                    </aside>
                    <div class="widget">
                        <h3 class="widget_title">Lowongan Terbaru</h3>
                        <div class="recent-post-wrap">
                            @foreach ($lowongan as $bkk)
                                <div class="recent-post">
                                    <div class="media-img"><a href="/blogdetail/{{ $bkk->id }}"><img
                                                src="{{ asset('foto/' . $bkk->fotobk) }}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><i
                                                class="far fa-calendar"></i>{{ $bkk->perusahaan }}\</div>
                                        <h6 class="overflow1" class="post-title"><a class="text-inherit"
                                                href="/blogdetail/{{ $bkk->id }}">{{ $bkk->judul }}</a></h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('landingpage.layout.footer')
    <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/main.js') }}"></script>
    <!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:30:06 GMT -->
</body>

</html>
