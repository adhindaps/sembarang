<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Prestasi Detail</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
                <li><a href="/prestasi">kembali</a></li>
            </ul>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="course-single">
                        @foreach ($data as $prestasi )
                        <div class="course-single-top">
                            <div><img src="{{ asset('foto/'.$prestasi->fotopres )}}" width="450px" alt="Course Image"></div>
                            <br/>
                            <h2 class="course-title">{{ $prestasi->judul }}</h2>
                            <p>{!! $prestasi->deskripsi !!}</p>
                        </div>
                    </div>
                 </div>
                 @endforeach
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget">
                            <h3 class="widget_title">Agenda Terbaru</h3>
                            <div class="recent-post-wrap">
                                @foreach ($agenda as $blog)  
                                <div class="recent-post">
                                    <div class="media-img"><a href="/blogdetail/{{$blog->id}}"><img class="gg"
                                                src="{{ asset('foto/' . $blog->foto) }}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><a href=""><i
                                                    class="far fa-calendar"></i>{{ $blog->created_at}}</a></div>
                                        <h6 class="overflow1" class="post-title"><a class="text-inherit" href="/blogdetail/{{$blog->id}}"></a></h6>
                                    </div>
                                </div>
                                @endforeach 
                            </div>
                        </div>
                    </aside>
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