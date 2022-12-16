<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Class Axioo</h1>
            <ul class="breadcumb-menu">
                <li>
                    <a href="/">Beranda</a>
                </li>
                <li>Class Axioo</li>
            </ul>
        </div>
    </div>
    <section class="as-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="as-blog blog-single">
                        {{-- <div class="blog-img">
                        <img src="foto/g.jpeg" width="2500" alt="Blog Image">
                    </div> --}}
                        <div class="blog-content">
                            <div class="blog-meta">
                            </div>
                            <h2 class="blog-title">{{$data->judul}}</h2>
                            <p>{!! $data->deskaxio !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info">
                            <div class="as-video"><img
                                    src="{{ asset('1/yeye/html/acadu/demo/assets/img/widget/video_1.jpg') }}"
                                    alt="video">
                                <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                        
                        <div class="widget">
                            <h4 class="widget_title">Gallery Posts</h4>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb"><img class="gg" src="{{ asset('foto/kegiatan1.jpg') }}"
                                        alt="Gallery Image" class="w-100"></div>
                                <div class="gallery-thumb"><img class="gg" src="{{ asset('foto/kegiatan2.jpg') }}"
                                        alt="Gallery Image" class="w-100"></div>
                                <div class="gallery-thumb"><img class="gg" src="{{ asset('foto/kegiatan3.jpg') }}"
                                        alt="Gallery Image" class="w-100"></div>
                                <div class="gallery-thumb"><img class="gg"
                                        src="{{ asset('1/yeye/html/acadu/demo/assets/img/widget/gal-1-4.jpg') }}"
                                        alt="Gallery Image" class="w-100"></div>
                                <div class="gallery-thumb"><img class="gg"
                                        src="{{ asset('1/yeye/html/acadu/demo/assets/img/widget/gal-1-5.jpg') }}"
                                        alt="Gallery Image" class="w-100"></div>
                                <div class="gallery-thumb"><img class="gg"
                                        src="{{ asset('1/yeye/html/acadu/demo/assets/img/widget/gal-1-6.jpg') }}"
                                        alt="Gallery Image" class="w-100"></div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        @include('landingpage.layout.footer')
        <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/app.min.js') }}"></script>
        <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/main.js') }}"></script>
        <!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:30:06 GMT -->
</body>

</html>
