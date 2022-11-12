<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')
<body>
	@include('landingpage.layout.header')
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">Contact Us</h1>
        <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</div>
<div class="map-sec space">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.214831443387!2d112.47793521400968!3d-7.551537776652838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78731ce537479f%3A0x350a36480b9ea39f!2sSMK%20Negeri%201%20Dlanggu%20Mojokerto!5e0!3m2!1sid!2sid!4v1668063638210!5m2!1sid!2sid" 
            allowfullscreen="" loading="lazy" ></iframe></div>
    <div class="container">
        <div class="map-contact">
            <h3 class="border-title">Berhubungan</h3>
            <p class="mt-n1 mb-30">Punya pertanyaan atau umpan balik untuk kami? Isi formulir di bawah ini untuk menghubungi kami
                tim. silahkan hubungi kami di smkdlanggu@gmail.com.</p>
            <div class="contact-info">
                <div class="contact-info_icon"><i class="fal fa-location-dot"></i></div>
                <div class="media-body">
                    <h4 class="contact-info_title">Alamat kami</h4><span class="contact-info_text">Jalan Jendral Ahmad Yani No.17, 
                        Kedunglengkong, Dlanggu, Jabaran, Pohkecik, Kec. Dlanggu, Kabupaten Mojokerto, Jawa Timur 61371</span>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-info_icon"><i class="fal fa-phone"></i></div>
                <div class="media-body">
                    <h4 class="contact-info_title">Nomor telepon</h4><span class="contact-info_text"><span>Mobile: <a
                                href="0321-513093">0321-513093</a></span> </span>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-info_icon"><i class="fal fa-clock"></i></div>
                <div class="media-body">
                    <h4 class="contact-info_title">Jam Operasional</h4><span
                        class="contact-info_text"><span>Senin - Jumat: (07.00-15.00 WIB)</span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-9">
                <div class="title-area text-center"></div>
            </div>
        </div>
        <div class="contact-form-wrap" data-bg-src="assets/img/bg/contact_bg_1.png"><span class="sub-title">KONTAK DENGAN KAMI!</span>
            <h2 class="border-title">Ada pertanyaan?</h2>
            <p class="mt-n1 mb-25 sec-text">Apabila Anda memiliki saran atau pertanyaan, silahkan menghubungi kami dengan mengisi formulir di bawah ini..</p>
            <form action="https://angfuzsoft.com/html/acadu/demo/mail.php" method="POST"
                class="contact-form ajax-contact">
                <div class="row">
                    <div class="form-group col-md-6"><input type="text" class="form-control style3" name="name"
                            id="name" placeholder="Masukkan Nama"> <i class="fal fa-user"></i></div>
                    <div class="form-group col-md-6"><input type="email" class="form-control style3" name="email"
                            id="email" placeholder="Alamat Email "> <i class="fal fa-envelope"></i></div>
                   
                    <div class="form-group col-md-6"><input type="tel" class="form-control style3" name="number"
                            id="number" placeholder="Nomor Telepon"> <i class="fal fa-phone"></i></div>
                    <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                            class="form-control style3" placeholder="Pesan Kamu"></textarea> <i
                            class="fal fa-comment"></i></div>
                    <div class="form-btn col-12 mt-10"><button class="as-btn">Kirim Pesan<i
                                class="fas fa-long-arrow-right ms-2"></i></button></div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </form>
        </div>
    </div>
</section>

<section class="" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
    <div class="container">
        <div class="cta-wrap">
            <div class="row flex-row-reverse justify-content-between">
                <div class="col-lg-6">
                    <div class="cta-img"><img src="foto/hal1.jpg" alt="Image"></div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="cta-content">
                        <h2 class="fs-40 fw-light text-theme mb-10">SMK N 1 DLANGGU</h2>
                        <h2 class="mb-25">MOJOKERTO</h2><a href="/"
                            class="as-btn">Beranda</a>
                    </div>
                </div>
            </div>
            <div class="shape-mockup movingX z-index-n1" data-bottom="0%" data-left="44%"><img
                    src="{{asset ('1/yeye/html/acadu/demo/assets/img/shape/dot_shape_1.png')}}" alt="shapes"></div>
        </div>
    </div>
</section>
@include('landingpage.layout.footerhal')
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js')}}">
	</script>
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/app.min.js')}}">
	</script>
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/main.js')}}">
	</script><!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:30:06 GMT -->
</body>
</html>