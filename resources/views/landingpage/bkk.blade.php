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
                <li>BKK</li>
            </ul>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="tinv-wishlist woocommerce tinv-wishlist-clear">
                <div class="tinv-header">
                    <h2 class="mb-30">Bursa Kerja Khusus</h2>
                </div>
                <section class="space-bottom">
                    <div class="container">
                        <div class="row">
                            @foreach ($data as $bk )
                            <div class="col-xl-4 mb-20 mb-xl-0">
                                <div class="cta-card"
                                    data-bg-src="foto/{{ $bk->fotobk }}">
                                    <div class="title-area mb-40"><span class="sub-title"><i
                                                class="fal fa-book me-2"></i>Lowongan Kerja</span>
                                        <h4 class="sec-title">{{ $bk->perusahaan }}</h4>
                                    </div><a href="bkkdetail" class="as-btn">Selengkapnya<i
                                            class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
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
