<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{asset ('foto')}}">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Detail Event</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
                <li>Detail Event</li>
            </ul>
        </div>
    </div>
    <section class="space">
        <div class="container">
            @foreach ($data as $data )
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="event-details">
                        <div class="event-img"><img src="foto/{{ $data->foto }}" alt="Event Image"></div>
                        <h3 class="h3 mt-n2">{{ $data->namaevent }}</h3>
                        <p class="mb-30">{{ $data->deskripsi }}</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info">
                            <h3 class="widget_title">Informasi Events</h3>
                            <div class="info-list">
                                <ul>
                                    <li><i class="fa-light fa-calendar-days"></i> <strong>Tanggal: </strong><span>{{ $data->tanggalevent }}</span></li>
                                    <li><i class="fa-light fa-clock"></i> <strong>Waktu: </strong><span>{{ $data->jamevent }}</span></li>
                                    <li><i class="fa-light fa-location-dot"></i> <strong>Lokasi: </strong><span>{{ $data->tempat }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget_title">Agenda Terbaru</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img
                                                src="{{asset ('1/yeye/html/acadu/demo/assets/img/blog/recent-post-1-1.jpg')}}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><a href="blog.html"><i
                                                    class="far fa-calendar"></i>05/03/2022</a></div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Sosialisasi Pendaftaran Online PPDB</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img
                                                src="{{asset ('1/yeye/html/acadu/demo/assets/img/blog/recent-post-1-2.jpg')}}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><a href="blog.html"><i
                                                    class="far fa-calendar"></i>07/03/2022</a></div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Rekrutmen Operator Produksi PT.Sai</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img
                                                src="{{asset ('1/yeye/html/acadu/demo/assets/img/blog/recent-post-1-3.jpg')}}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><a href="blog.html"><i
                                                    class="far fa-calendar"></i>08/03/2022</a></div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Absensi Siswa Prakerin Gl.1</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</body>
@include('landingpage.layout.footer')
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js')}}">
	</script>
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/app.min.js')}}">
	</script>
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/main.js')}}">
	</script><!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:30:06 GMT -->
</html>