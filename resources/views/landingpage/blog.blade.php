<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')


<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Blog</h1>
            <ul class="breadcumb-menu">
                <li>
                    <a href="/">Beranda</a>
                </li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
    <section class="as-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row"> 
                <div class="col-md-6 col-xl-4">
                {{-- <div class="widget widget_search">
                    <form class="search-form"><input type="text" placeholder="Search..."> <button type="submit"><i
                                class="far fa-search"></i></button></form>
                </div> --}}
            </div>
        </div>
        <div class="row">
            @foreach ($data as $row)
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card">
                        <img class="imgg" src="{{asset('blog/'.$row->foto )}}" width="100px" alt="Gambar">
                        <div class="blog-content">
                            <div class="blog-meta style2">
                                <a href="#"><i
                                        class="fa-light fa-calendar-days"></i>{{$row->created_at}}</a>
                                <a href="#"><i class="far fa-folder"></i>{{ $row->kategori->kategori }}</a>
                            </div>
                            <h6 class="overflow1" class="blog-title">{{ $row->judul }}</h6>
                            <a class="link-btn" href="/blogdetail/{{$row->id}}">Baca Lebih Detail<i class="fas fa-arrow-right"></i></a>
                            <br/>
                            <br/>
                        </div>
                    </div>
                    <br/>
                    <br/>
                </div>
            @endforeach
            {{ $data->links('vendor.pagination.default') }}
        </div>
    </section>
</body>
@include('landingpage.layout.footer')
<script src="{{ asset('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('1/yeye/html/acadu/demo/assets/js/app.min.js') }}"></script>
<script src="{{ asset('1/yeye/html/acadu/demo/assets/js/main.js') }}"></script>
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->

</html>
