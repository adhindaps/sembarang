<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('foto/upacar.jpg') }}">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">EXTRAKULIKULER</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
                <li>Extrakulikuler</li>
            </ul>
        </div>
    </div>

    <tbody>
    
        @foreach ($data as $ex)
            @if ($ex->id % 2 == 1)
            <div class="space">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="img-box8">
                                <tr>
                                    <div class="img3"><img class="yy" src="{{ asset('foto/brigpasda.jpg') }}"
                                            alt="about"></div>
                                    <div class="img1"><img class="rr" alt="foto"
                                            src="foto/{{ $ex->fotoex }}"></div>
                                    <div class="shape">
                                        <img
                                            src="{{ asset('1/yeye/html/acadu/demo/assets/img/normal/about_shape_2.png') }}"alt="shape">
                                    </div>
                                </tr>
                            </div>
                        </div>
                        <div class="col-xl-7 ps-xl-5">
                            <br />
                            <div class="title-area mb-35"><span class="sub-title">{{ $ex->subjudul }}</span>
                                <h2 class="sec-title fw-semibold">
                                    <td>{{ $ex->extra }}</td>
                                </h2>
                            </div>
                            <div class="mt-n2 mb-35">
                                <td>{!! $ex->deskripsi !!}</td>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="space">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 ps-xl-5">
                            <br />
                            <div class="title-area mb-35"><span class="sub-title">{{ $ex->subjudul }}</span>
                                <h2 class="sec-title fw-semibold">  <td>{{ $ex->extra }}</td></h2>
                            </div>
                            <p class="mt-n2 mb-35">
                                <td>{!! $ex->deskripsi !!}</td></p>
                        </div>
                        <div class="col-xl-5">
                            <div class="img-box8">
                                <div class="img3"><img class="yy" src="{{ asset('foto/CDA.jpg') }}" alt="about"></div>
                                <div class="img1"><img class="rr" src="foto/{{ $ex->fotoex }}" alt="about">
                                </div>
                                <div class="shape"><img
                                        src="{{ asset('1/yeye/html/acadu/demo/assets/img/normal/about_shape_2.png') }}"
                                        alt="shape"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </tbody>
    
    {{-- <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="img-box8">
                        <div class="img3"><img class="yy" src="{{ asset('foto/pmi.png') }}" alt="about"></div>
                        <div class="img1"><img class="rr" src="{{ asset('foto/pmr.jpg') }}" alt="about">
                        </div>
                        <div class="shape"><img
                                src="{{ asset('1/yeye/html/acadu/demo/assets/img/normal/about_shape_2.png') }}"
                                alt="shape"></div>
                    </div>
                </div>
                <div class="col-xl-7 ps-xl-5">
                    <br />
                    <div class="title-area mb-35"><span class="sub-title">Tentang Palang Merah Indonesia</span>
                        <h2 class="sec-title fw-semibold">Palang Merah Remaja</h2>
                    </div>
                    <p class="mt-n2 mb-35">Palang Merah Remaja adalah ekstrakurikuler dan organisasi yang bergerak di
                        bidang kemanusiaan yang memberikan ilmu medis, kesiapsiagaan bencana dan ilmu kemanusiaan dan
                        berbakti kepada masyarakat
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
</body>
@include('landingpage.layout.footer')
<script src="{{ asset('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('1/yeye/html/acadu/demo/assets/js/app.min.js') }}"></script>
<script src="{{ asset('1/yeye/html/acadu/demo/assets/js/main.js') }}"></script>
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:30:06 GMT -->

</html>
