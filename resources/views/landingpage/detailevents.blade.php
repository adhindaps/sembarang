<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{asset ('foto')}}">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Detail Events</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Beranda</a></li>
                <li>Detail Events</li>
            </ul>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="event-details">
                        <div class="event-img"><img src="{{asset ('mpls/1.jpg')}}" alt="Event Image"></div>
                        <h3 class="h3 mt-n2">Event Description</h3>
                        <p class="mb-30">INFO KEGIATAN SISWA
                            Info Kegiatan Layanan BK/ Bimbingan Karir dilaksanakan pada :
                            <br/>
                            <br/>
                            Hari/ tgl : Selasa, 08 November 22
                            Jam ; 07.30 - 09.30 [2 Jam]
                            Tempat : Aula ECO
                            Agenda : Sosialisasi dari Perguruan Tinggi
                            Catatan : Khusus Grup Kuliah 2023
                            <br/>
                            <br/>
                            Kemudian dilanjutkan di Ruang kelas. 
                            <br/>
                            <br/>
                            Jadwalnya :
                            
                              # Kelas : XII TKJ 1,2 & M 1, 2 & RPL 1,2 & XIII SIJA 1 , 2
                                  Waktu : 09.45 - 10.45
                            
                               # Kelas : XII Anm 1,2 & TB 1,2,3 & PHT 1,2
                                  Waktu : 11.00 - 12.00
                            .</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info">
                            <h3 class="widget_title">Event Information</h3>
                            <div class="info-list">
                                <ul>
                                    <li><i class="fa-light fa-calendar-days"></i> <strong>Tanggal: </strong><span>November
                                            08, 2022</span></li>
                                    <li><i class="fa-light fa-clock"></i> <strong>Waktu: </strong><span>8:00 am - 11:00
                                            pm</span></li>
                                    <li><i class="fa-light fa-location-dot"></i> <strong>Lokasi: </strong><span>Aula ECO SMKN 1 Dlanggu</span></li>
                                    <li><i class="fa-light fa-map"></i> <strong>Alamat: </strong><span>Jalan Jendral Ahmad Yani No.17, Kedunglengkong, Dlanggu, Jabaran, Pohkecik, Kec. Dlanggu, Kabupaten Mojokerto, Jawa Timur 61371</span></li>
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
        </div>
    </section>

</body>
@include('landingpage.layout.footerhal')
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/app.min.js')}}"></script>
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/main.js')}}"></script>
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/event-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:23 GMT -->

</html>