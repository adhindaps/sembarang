<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Data Guru</h1>
            <ul class="breadcumb-menu">
                <li>
                    <a href="/">Beranda</a>
                </li>
                <li>Data Guru</li>
            </ul>
        </div>
    </div>
    <section class="bg-white space">
        <div class="container">
            <div class="row gy-4">
            @foreach ($data as $data)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="team-grid">
                        <div class="team-img"><img class="imgg" src="foto/{{ $data->fotoguru }}" alt="Team"></div>
                        <div class="team-content">
                            <h3 class="team-title"><a href="team-details.html">{{ $data->nama }}</a></h3><span
                                class="team-desig">{!! $data->jabatan !!}</span>
                        </div>
                        <div class="team-info">
                            <span>NIP: {{ $data->nip }}</span> 
                            <span class="line"></span> 
                            <span>{{ $data->status }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
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