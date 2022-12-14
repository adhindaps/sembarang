<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">SEJARAH SEKOLAH</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
                <li>SEJARAH</li>
            </ul>
        </div>
    </div>
    <section class="as-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="as-blog blog-single">
                        {{-- <div class="blog-img">
                            <img src="foto/{{ $data->fotosjr }}" width="1500" alt="Blog Image">
                        </div> --}}
                        <div class="blog-content">
                            <h2 class="blog-title">{{$data->nama}}</h2>
                            <p>{!! $data->deskripsi !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget">
                            <h4 class="widget_title">Gallery Posts</h4>
                         
                            <div class="sidebar-gallery">
                                @foreach ($foto as $foto)   
                                <div class="gallery-thumb"><img src="foto/{{ $foto->fotokgt }}"
                                    width="100px"  alt="Gallery Image"></div>
                                @endforeach  
                            </div> 
                        </div>
                        <div class="widget">
                            <h3 class="widget_title">Berita Terbaru</h3>
                            <div class="recent-post-wrap">
                                @foreach ($blog as $bg)          
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.html"><img class="gg"
                                                src="{{ asset('foto/' . $bg->foto) }}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <div class="recent-post-meta"><a href="/blogdetail/{{$bg->id}}"><i
                                                    class="far fa-calendar"></i>{{ $bg->created_at->format('D M Y')}}</a></div>
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
        <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/app.min.js') }}"></script>
        <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/main.js') }}"></script>
        <!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:30:06 GMT -->
</body>

</html>
