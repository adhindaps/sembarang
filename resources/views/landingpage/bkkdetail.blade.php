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
            <div class="row">
                <div class="col-xl-5">
                    <div class="img-box8">
                        <div class="img1"><img
                            src="foto/{{ $data->fotobk }}" alt="about">
                        </div>
                        <div class="shape"><img
                            src="{{ asset('1/yeye/html/acadu/demo/assets/img/normal/about_shape_2.png') }}" alt="shape">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 ps-xl-5">
                    <div class="title-area mb-35"><span class="sub-title">
                            Lowongan pekerjaan</span>
                        <h2 class="sec-title fw-semibold">{{ $data->perusahaan }}</h2>
                    </div>
                    <p class="mt-n2 mb-35">{!! $data->deskripsi !!}</p>
                    <div class="checklist style3 mb-45">
                        <ul>
                            <li>Alumni SMK Jurusan Perhotelan atau Tata Boga.</li>
                            <li>Penampilan menarik.</li>
                            <li>Usia maksimal 25 tahun</li>
                        </ul>
                    </div>
                    <p class="mt-n2 mb-35">Bawa surat lamaran ke BKK SMKN 1 Dlanggu dengan melampirkan rekomendasi dari
                        BKK sekolah asal.<br>Pelaksanaan Tes akan dilaksanakan di SMKN 1 Dlanggu setelah kuota
                        terpenuhi.
                    </p>
                </div>
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
