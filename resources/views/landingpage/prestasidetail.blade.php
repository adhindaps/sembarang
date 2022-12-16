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
                <li>Prestasi Detail</li>
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
                            <div class="rr"><img src="{{ asset('foto/'.$prestasi->fotopres )}}" alt="Course Image">
                            </div>
                            <h2 class="course-title">{{ $prestasi->judul }}</h2>
                            <div class="course-single-meta"><a href="course.html">Admin<a href="course.html">
                                <i class="fas fa-tags"></i>Web Development</a> <a href="course.html">
                                <i class="far fa-clock"></i>04 April, 2022</a>
                            </div>
                            <div class="course-description">
                                <p>{!! $prestasi->deskripsi !!}</p>
                </div>
                        </div>
                    </div>
                 </div>
                 @endforeach
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info">
                            <div class="as-video"><img src="assets/img/widget/video_1.jpg" alt="video"> <a
                                    href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                        class="fas fa-play"></i></a></div><span class="h4 course-price">$90.00 <span
                                    class="tag">25% Off</span></span> <a href="cart.html" class="as-btn">Add To Cart</a>
                            <a href="cart.html" class="as-btn style4">Buy Now</a>
                            <h3 class="widget_title">Course Information</h3>
                            <div class="info-list">
                                <ul>
                                    <li><i class="fa-light fa-user"></i> <strong>Instructor: </strong><span>Kevin
                                            Perry</span></li>
                                    <li><i class="fa-light fa-file"></i> <strong>Lessons: </strong><span>8</span></li>
                                    <li><i class="fa-light fa-clock"></i> <strong>Duration: </strong><span>15h 30m
                                            36s</span></li>
                                    <li><i class="fa-light fa-tag"></i> <strong>Course level:
                                        </strong><span>Beginners</span></li>
                                    <li><i class="fa-light fa-globe"></i> <strong>Language:
                                        </strong><span>English</span></li>
                                    <li><i class="fa-light fa-puzzle-piece"></i> <strong>Quizzes:
                                        </strong><span>04</span></li>
                                </ul>
                            </div><a href="https://www.linkedin.com/" class="as-btn style5 mt-35 mb-0"><i
                                    class="far fa-share-nodes me-2"></i>Share This Course</a>
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