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
                                <img src="foto/{{ $data->fotoecho }}" alt="video"> 
                                <a href="{{$data->link}}" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                            </div>
                           
                            <h3 class="widget_title">Informasi</h3>
                            <div class="info-list">
                                <ul>
                                    <li><i class="fa-light fa-clock"></i> <strong>Buka: </strong><span>{{ $data->jam }}</span></li>
                                    <li><i class="fa-light fa-location-dot"></i> <strong>Lokasi: </strong><span>{{$data->lokasi}}</span></li>
                                    <li><i class="fa-light fa-map"></i> <strong>Alamat: </strong><span>{{$data->alamat}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-smoke" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
        <div class="container as-container3 z-index-common">
            <div class="row gx-10 as-carousel" data-lg-slide-show="5" data-md-slide-show="4" data-slide-show="6"
                data-sm-slide-show="3" data-xs-slide-show="2">
                @foreach ($galerieco as $eco)
                <div class="col-auto">
                 
                        <img alt="website" class="imgyeye" src="foto/{{ $eco->foto11 }}">

                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
@include('landingpage.layout.footer')
<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js')}}">
</script>
<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/app.min.js')}}">
</script>
<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/main.js')}}">
</script><!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:30:06 GMT -->
</body>
</html>