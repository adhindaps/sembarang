<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="{{asset ('foto')}}">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Detail Agenda</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
                <li><a href="/events">Kembali</a></li>
            </ul>
        </div>
    </div>
    <section class="space">
        <div class="container">
            @foreach ($data as $data )
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="event-details">
                        <div class="event-img"><img src="{{ asset('foto/' . $data->foto) }}" width="500" alt="Event Image"></div>
                        <h3 class="h3 mt-n2">{{ $data->namaevent }}</h3>
                        <p class="mb-30">{!! $data->deskripsi !!}</p>
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
                                @foreach ($agenda as $bg)  
                                <div class="recent-post">
                                    <div class="media-img"><a href="/detailevents/{{$bg->id}}"><img class="gg"
                                                src="{{ asset('foto/' . $bg->foto) }}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><a href="/detailevents/{{$bg->id}}"><i
                                                    class="far fa-calendar"></i>{{ $bg->jamevent }}</a></div>
                                        <h6 class="overflow1" class="post-title"><a class="text-inherit" href="/detailevents/{{$bg->id}}">{{ $bg->namaevent }}</a></h6>
                                    </div>
                                </div>
                                @endforeach 
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