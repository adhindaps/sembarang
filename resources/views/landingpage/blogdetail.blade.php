<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')
<body>
	@include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Detail Blog</h1>
            <ul class="breadcumb-menu">
                <li>
                    <a href="/">Beranda</a>
                </li>
                <li> <a href="/blog">kembali</a></li>
            </ul>
        </div>
    </div>
    <section class="as-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    @foreach ($data as $item)
                    <div class="as-blog blog-single">
                       
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="blog-img"><img class="zz" src="{{asset('blog/'.$item->foto )}}" alt="Blog Image"> </div>
                                <a href="#"><i class="far fa-user"></i>Admin</a>
                                <a href="#"><i class="far fa-clock"></i>{{ $item->created_at}}</a>
                            </div>
                            <h2 class="blog-title"> {{ $item->judul }}</h2> 
                            <p>{!! $item->deskripsi!!}</p>              
                        </div>
                        <div class="share-links clearfix">
                            <div class="row justify-content-between">
                                @foreach ($data as $kg)
                                <div class="col-md-auto"><span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">{{ $kg->kategori->kategori }} </div>
                                </div>
                                @endforeach
                                <div class="col-md-auto text-xl-end"><span class="share-links-title">Share:</span>
                                    @foreach ($sosmed as $sosmed)
                                    <ul class="social-links">
                                        <li><a href="https://facebook.com/" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://linkedin.com/" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="https://www.instagram.com/humas_smkn1dlanggu/" target="_blank"><i
                                                    class="fab fa-instagram"></i></a></li>
                                    </ul> @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">                  
                        <div class="widget">
                            <h3 class="widget_title">Berita Terbaru</h3>
                            <div class="recent-post-wrap">
                                @foreach ($blog as $bg) 
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img class="gg"
                                                src="{{ asset('blog/' . $bg->foto) }}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><i class="far fa-calendar"></i>{{ $bg->created_at}}</div>
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