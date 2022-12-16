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
    <section class="as-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    @foreach ($data as $bs)
                    <div class="as-blog blog-single has-post-thumbnail">
                        <img class="imgg" src="{{ asset('foto/'.$bs->foto) }}"alt="Blog Image">
                        <br/>
                        <div class="blog-content">
                            <h2 class="blog-title">{{ $bs->name }}</h2>
                            <p class="blog-text">{!! $bs->desk !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                                    <div class="as-pagination">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
                        </ul>
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
