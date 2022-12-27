<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title"></h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
                <li><a href="/programkeahlian">Kembali</a></li>
            </ul>
        </div>
    </div>
    <section class="as-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                @foreach ($data as $data)
                <div class="col-xxl-8 col-lg-7">
                    <div class="as-blog blog-single">
                        <img src="{{ asset('foto/' . $data->foto) }}" width="600px" alt="Image">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="far fa-book"></i>Program Keahlian</a>
                            </div>
                            <h2 class="blog-title">{{ $data->jurusan }}</h2>
                            <p>{!! $data->deskripsi !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_info">
                            <a><img class="yy" alt="Team" src="{{ asset('foto/'. $kajur->fotokajur )}}"></a>
                            <h3 class="widget_title">Ketua Jurusan</h3>
                            <div class="info-list">
                                <ul>
                                    <li><i class="fa-light fa-user"></i> <strong>Nama:
                                        </strong><span>{{ $kajur->nama }}</span>
                                    </li>
                                    <li><i class="fa-light fa-phone"></i> <strong>Nip:
                                        </strong><span>{{ $kajur->nip }}</span>
                                    </li>
                                    <li><i class="fa-light fa-calendar-days"></i> <strong>Setatus: </strong><span>{{ $kajur->jurusan->jurusan }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                   
                        <div class="widget widget_info">
                            <h3 class="widget_title">Guru produktif</h3>
                            <br />
                                
                            <div class="col-xl-12">

                                <div class="row as-carousel" data-md-slide-show="2" data-slide-show="2">
                            @foreach ($guru as $g )

                                    <div class="col-md-4 col-lg-4">
                                        <div class="team-box">
                                            <div class="team-img">
                                                <img class="yy" alt="Team" src="{{asset('guru/'. $g->fotoguru )}}">
                                            </div>
                                            <div class="team-content">
                                                <h3 class="team-title">{{$g->nama}}</h3><span class="team-desig">{{$g->subjabatan->subjabatan}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                            @endforeach
                                   
                                </div>

                            </div>

                        </div>
                    </aside>
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
