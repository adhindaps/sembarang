<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Gallery</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
                <li> Gallery</li>
            </ul>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="row gy-4 masonary-active">
                <div class="row">
                    @foreach ($data as $foto)
                        <div class="col-md-5 col-xxl-auto filter-item mb-xl-4">
                            <div class="gallery-card">
                                <div class="gallery-img"><img class="pp"src="foto/{{ $foto->fotokgt }}"
                                        alt="gallery image"><a href="foto/{{ $foto->fotokgt }}"
                                        class="gallery-btn popup-image"><i class="fas fa-eye"></i></a></div>
                                <div class="gallery-content">
                                    <h2 class="gallery-title">{{ $foto->judul }}</h2>
                                </div>
                            </div>
                        </div>
                        <br/>
                    @endforeach
                </div>
            </div>
        </div>
        {{ $data->links('vendor.pagination.default') }}
    </div>
    @include('landingpage.layout.footer')
    <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/main.js') }}"></script>
    <!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:30:06 GMT -->
</body>

</html>
