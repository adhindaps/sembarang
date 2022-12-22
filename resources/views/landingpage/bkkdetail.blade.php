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
    {{-- <div class="space">
        <div class="container">
            <div class="row">
                @foreach ($data as $haha) 
                <div class="col-xl-5">
                    <div class="img-box8">
                        <div class="img1"><img
                            src="{{ asset('foto/' . $haha->fotobk) }}" alt="about">
                        </div>
                        <div class="shape"><img
                            src="{{ asset('1/yeye/html/acadu/demo/assets/img/normal/about_shape_2.png') }}" alt="shape">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 ps-xl-5">
                    <div class="title-area mb-35"><span class="sub-title">
                            Lowongan pekerjaan</span>
                        <h2 class="sec-title fw-semibold">{{ $haha->perusahaan }}</h2>
                    </div>
                    <p class="mt-n2 mb-35">{!! $haha->deskripsi !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <section class="as-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    @foreach ($data as $haha) 
                    <div class="as-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="blog-img"><img class="zz" src="{{ asset('foto/' . $haha->fotobk) }}" alt="Blog Image"> </div>
                                <a href="#"><i class="far fa-city"></i>Admin</a>
                                    <a href="#"><i
                                        class="far fa-location"></i></a></div>
                            <h2 class="blog-title"> {{ $haha->perusahaan }}</h2> 
                            <p>{!! $haha->deskripsi !!}</p>              
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">                  
                        <div class="widget">
                            <h3 class="widget_title">Lowongan Terbaru</h3>
                            <div class="recent-post-wrap">
                                @foreach ($lowongan as $bkk) 
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img
                                                src="{{ asset('foto/' . $bkk->fotobk) }}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><i class="far fa-calendar"></i>{{ $bg->created_at}}\</div>
                                        <h6 class="overflow1" class="post-title"><a class="text-inherit" href="/blogdetail/{{$bg->id}}">{{ $bg->judul }}</a></h6>
                                    </div>
                                </div>
                                @endforeach   
                            </div>
                        </div>                    
                    </aside>
                </div> --}}
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
