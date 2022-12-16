<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Prestasi</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
                <li>Prestasi</li>
            </ul>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
           <div class="row gy-4 mb-30">
            @foreach ($data as $pr )
                        <div class="col-md-6 col-lg-4 col-xxl-3">
                            <div class="course-box style4">
                                <div class="course-img"><img src="foto/{{ $pr->fotopres }}" alt="course"> <span class="tag"></span></div>
                                <div class="course-content">
                                    <div class="course-author">
                                        <div class="author-info">
                                            <a href="course.html" class="author-name">Admin</a></div>
                                    </div>
                                    <h3 class="course-title"><a href="prestasidetail/{{$pr->id}}">{{ $pr->judul }}</a></h3>
                                    <div class="course-meta"><span><i class="fal fa-file"></i>Lesson 8</span> <span><i
                                                class="fal fa-user"></i>Students 50</span> <span><i
                                                class="fal fa-eye"></i>View: 12K</span></div>
                                </div>
                            </div>
                        </div>
            @endforeach
            </div>
            <div class="as-pagination text-center pt-20">
                <ul>
                    <li><a href="blog.html">1</a></li>
                    <li><a href="blog.html">2</a></li>
                    <li><a href="blog.html">3</a></li>
                    <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
                </ul>
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