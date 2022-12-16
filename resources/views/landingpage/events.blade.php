<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{asset ('foto')}}">
        <div class="container z-index-common">
            <h1 class="breadcumb-title"> Agenda</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
                <li> Agenda</li>
            </ul>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container z-index-common">
            <div class="row">
                @foreach ($data as $row)
                <div class="col-xl-6">
                    <div class="event-card">
                        <div class="event-card_img"><img  class="yy" src="foto/{{ $row->foto }}" alt="event"></div>
                        <div class="event-card_content">
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>{{ $row->tempat }}</p>
								<p><i class="fa-light fa-calendar-days"></i>{{ $row->tanggalevent }}</p>
                                <p><i class="fal fa-clock"></i>{{ $row->jamevent }}</p>
                            </div>
                            <h3 class="event-card_title">{{ $row->namaevent }}</h3></h3>
                            <div class="event-card_bottom"><a href="/detailevents/{{$row->id}}" class="as-btn">Lihat Acara</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-20 mt-xl-4">
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