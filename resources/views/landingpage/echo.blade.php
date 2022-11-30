<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')
<body>
	@include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{asset ('foto')}}">
        <div class="container z-index-common">
            <h1 class="breadcumb-title"> Sudut Baca ECO</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
                <li> Sudut Baca ECO</li>
            </ul>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="event-details">
                        <div class="event-img"><img src="foto/ecooooooo.jpg" alt="foto"></div>
                        <h3 class="h3 mt-n2">{{$data->judul}}</h3>
                        <p class="mb-30">{!! $data->deskripsi !!}</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info">
                            
                            <div class="as-video">
                                <img src="https://4.bp.blogspot.com/-hr6ko7FRlvY/VWByVK4DVgI/AAAAAAAAAWs/AAQ-yCBIMFg/s1600/DSC02781.JPG " alt="video"> 
                                <a href="https://youtu.be/wbmQOyvitXU" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                            </div>
                           
                            <h3 class="widget_title">Informasi</h3>
                            <div class="info-list">
                                <ul>
                                    <li><i class="fa-light fa-clock"></i> <strong>Buka: </strong><span>8:00 am - 5:00
                                            pm</span></li>
                                    <li><i class="fa-light fa-location-dot"></i> <strong>Lokasi: </strong><span>SMKN 1 Dlanggu</span></li>
                                    <li><i class="fa-light fa-map"></i> <strong>Alamat: </strong><span>Jalan Jendral Ahmad Yani No.17, Kedunglengkong, Dlanggu, Jabaran, Pohkecik, Kec. Dlanggu, Kabupaten Mojokerto, Jawa Timur 61371</span></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@include('landingpage.layout.footer')
<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js')}}">
</script>
<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/app.min.js')}}">
</script>
<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/main.js')}}">
</script><!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:30:06 GMT -->
</body>
</html>