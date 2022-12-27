<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Beasiswa</h1>
            <ul class="breadcumb-menu">
                <li>
                    <a href="/">Beranda</a>
                </li>
                <li>Beasiswa</li>
            </ul>
        </div>
    </div>
    <section class="as-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="as-blog blog-single has-post-thumbnail">
                        @foreach ($data as $bs)
                        <img class="imgg" src="{{ asset('foto/'.$bs->foto) }}"alt="Blog Image">
                        <br/>
                        <div class="blog-content">
                            <h2 class="blog-title">{{ $bs->name }}</h2>
                            <p class="blog-text">{!! $bs->desk !!}</p>
                        </div>
                        <br/>
                        <br/>
                        @endforeach
                    </div>
                
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget">
                            <h3 class="widget_title">Berita Terbaru</h3>
                            <div class="recent-post-wrap">
                                @foreach ($blog as $bg)          
                                <div class="recent-post">
                                    <div class="media-img"><a href="/blogdetail/{{$bg->id}}"><img
                                                src="{{ asset('foto/' . $bg->foto) }}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><i class="far fa-calendar"></i>{{ $bg->created_at->format('D M Y')}}</div>
                                        <h6 class="overflow1" class="post-title"><a class="text-inherit" href="/blogdetail/{{$bg->id}}">{{ $bg->judul }}</a></h6>
                                    </div>
                                </div>
                                @endforeach 
                            </div>
                        </div>  
                            
                    </aside>
                </div>
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
