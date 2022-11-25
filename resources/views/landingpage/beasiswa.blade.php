<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Beasiswa</h1>
            <ul class="breadcumb-menu">
                <li>
                    <a href="/">Beranda</a>
                </li>
                <li>Beasiswa</li>
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
                            <h2 class="blog-title">{{$data->name}}</h2>
                            <p>{!! $data->desk !!}</p>
                        </div>

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
