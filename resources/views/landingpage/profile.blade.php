<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')
<body>
	@include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Profile Sekolah</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Profile Sekolah</li>
            </ul>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="course-single">
                        <div class="course-single-top">
                            <div class="course-img"><img src="foto/g.jpeg" width="150" alt="Course Image">
                            </div>
                           
                            <h2 class="course-title">PROFILE SMK NEGERI 1 DLANGGU</h2>
                            <div class="course-single-meta"> <a href="course.html"><i
                                        class="fas fa-tags"></i> SMKN 1 DLANGGU </a> <a href="course.html"><i
                                        class="far fa-clock"></i>04 April, 2022</a>
                                <div class="course-rating">
                                  
                                </div>
                            </div>
                        </div>
                        <div class="course-single-bottom">
                            <ul class="nav course-tab" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation"><a class="nav-link active" id="description-tab"
                                        data-bs-toggle="tab" href="#Coursedescription" role="tab"
                                        aria-controls="Coursedescription" aria-selected="true"><i
                                            class="fa-regular fa-bookmark"></i>Identitas sekolah</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" id="curriculam-tab"
                                        data-bs-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam"
                                        aria-selected="false"><i class="fa-regular fa-book"></i>Visi&Misi</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" id="instructor-tab"
                                        data-bs-toggle="tab" href="#instructor" role="tab" aria-controls="instructor"
                                        aria-selected="false"><i class="fa-regular fa-user"></i>Pimpinan</a></li>
                                {{-- <li class="nav-item" role="presentation"><a class="nav-link" id="reviews-tab"
                                        data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false"><i class="fa-regular fa-star-sharp"></i>Reviews</a></li> --}}
                            </ul>
                            <div class="tab-content" id="productTabContent">
                                <div class="tab-pane fade show active" id="Coursedescription" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <div class="course-description">
                                        <h5 class="h5">Identitas Sekolah</h5>
                                        {{-- <p>Berdiri Pada Tahun 2004</p><br/> --}}
                                        <p>Nama Sekolah     : SMK NEGERI 1 DLANGGU<br/>
                                        Status              :  NEGERI <br/>
                                        NPNS                : 20502729 <br/>
                                        Akreditasi          : Akreditasi A<br/>
                                        NSS                 : 341050313310</p>
                                        <h5 class="h5">Alamat Sekolah</h5>
                                        <p>Alamat           : Jl. Jend A.Yani No.1 Ds. Pohkecik - Dlanggu <br/>
                                           Kode Pos         : 61371 <br/>
                                           No Tlpn          : 0321513093<br/>
                                           Email            : info@smkndlanggu.sch.id<br/></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="curriculam" role="tabpanel"
                                    aria-labelledby="curriculam-tab">
                                    <div class="course-curriculam">
                                        <h5 class="h5">Visi</h5>
                                        <p>Visi dari sekolah kami yaitu “Menghasilkan tamatan yang profesional,
                                            kompetitif secara nasional dan internasional, 
                                            beriman dn bertaqwa serta cinta tanah air dan mampu berwirausaha”.</p>
                                            <h5 class="h5">Misi</h5>
                                            <p class="mb-30">
                                                1.Melaksanakan kurikulum berstandar kompetensi untuk menyiapkan tamatan yang siap pakai di dunia kerja.<br/>
                                                2.Meningkatkan professional dan akuntabilitas SMKN 1 Dlanggu sebagai pusat pendidikan yang berstandar nasional.<br/>
                                                3.Meningkatkan profesionalisme tenaga pendidik yang mempunyai kompetensi sesuai dengan bidang keahlian<br/>
                                                4.Meningkatkan kualitas tamatan yang menguasai teknologi yang dilansadi iman dan taqwa.</p>
                                            
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="instructor" role="tabpanel"
                                    aria-labelledby="instructor-tab">
                                    <div class="course-instructor">
                                        <div class="course-description">
                                            <h5 class="h5">Kepala Sekolah</h5>
                                           
                                            <p>Nama             :   Drs. Ladi,MM.<br/>
                                               NIP              :   196509151989031013 </p>
                                            <h5 class="h5">Wakil Kepala Sekolah</h5>
                                            <p>Waka.Kurikulum        : Nizar Agus Diarochmah <br/>
                                               Waka.Humas            : Huddy Siswanto <br/>
                                               Waka.Kesiswaan        : Samsul Hadi<br/>
                                               Waka.Sarana Prasarana : Frans Umila<br/></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="course-Reviews">
                                        <div class="as-comments-wrap">
                                            <ul class="comment-list">
                                                <li class="review as-comment-item">
                                                    <div class="as-post-comment">
                                                        <div class="comment-avater"><img
                                                                src="assets/img/blog/comment-author-3.jpg"
                                                                alt="Comment Author"></div>
                                                        <div class="comment-content">
                                                            <h4 class="name">Mark Jack</h4><span class="commented-on"><i
                                                                    class="fal fa-calendar-alt"></i>22 April,
                                                                2022</span>
                                                            <div class="star-rating" role="img"
                                                                aria-label="Rated 5.00 out of 5"><span
                                                                    style="width:100%">Rated <strong
                                                                        class="rating">5.00</strong> out of 5 based on
                                                                    <span class="rating">1</span> customer rating</span>
                                                            </div>
                                                            <p class="text">Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod tempor incididunt ut
                                                                labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="review as-comment-item">
                                                    <div class="as-post-comment">
                                                        <div class="comment-avater"><img
                                                                src="assets/img/blog/comment-author-2.jpg"
                                                                alt="Comment Author"></div>
                                                        <div class="comment-content">
                                                            <h4 class="name">Alexa Deo</h4><span class="commented-on"><i
                                                                    class="fal fa-calendar-alt"></i>26 April,
                                                                2022</span>
                                                            <div class="star-rating" role="img"
                                                                aria-label="Rated 5.00 out of 5"><span
                                                                    style="width:100%">Rated <strong
                                                                        class="rating">5.00</strong> out of 5 based on
                                                                    <span class="rating">1</span> customer rating</span>
                                                            </div>
                                                            <p class="text">The purpose of lorem ipsum is to create a
                                                                natural looking block of text (sentence, paragraph,
                                                                page, etc.) that doesn't distract from the layout. A
                                                                practice not without controversy, laying out pages.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="review as-comment-item">
                                                    <div class="as-post-comment">
                                                        <div class="comment-avater"><img
                                                                src="assets/img/blog/comment-author-1.jpg"
                                                                alt="Comment Author"></div>
                                                        <div class="comment-content">
                                                            <h4 class="name">Tara sing</h4><span class="commented-on"><i
                                                                    class="fal fa-calendar-alt"></i>26 April,
                                                                2022</span>
                                                            <div class="star-rating" role="img"
                                                                aria-label="Rated 5.00 out of 5"><span
                                                                    style="width:100%">Rated <strong
                                                                        class="rating">5.00</strong> out of 5 based on
                                                                    <span class="rating">1</span> customer rating</span>
                                                            </div>
                                                            <p class="text">The passage experienced a surge in
                                                                popularity during the 1960s when Letraset used it on
                                                                their dry-transfer sheets, and again during the 90s as
                                                                desktop publishers bundled the text with their software.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="as-comment-form">
                                            <div class="form-title">
                                                <h3 class="blog-inner-title">Add a review</h3>
                                            </div>
                                            <div class="row">
                                                <div class="form-group rating-select d-flex align-items-center">
                                                    <label>Your Rating</label>
                                                    <p class="stars"><span><a class="star-1" href="#">1</a> <a
                                                                class="star-2" href="#">2</a> <a class="star-3"
                                                                href="#">3</a> <a class="star-4" href="#">4</a> <a
                                                                class="star-5" href="#">5</a></span></p>
                                                </div>
                                                <div class="col-12 form-group"><textarea placeholder="Write a Message"
                                                        class="form-control"></textarea> <i
                                                        class="text-title far fa-pencil-alt"></i></div>
                                                <div class="col-md-6 form-group"><input type="text"
                                                        placeholder="Your Name" class="form-control"> <i
                                                        class="text-title far fa-user"></i></div>
                                                <div class="col-md-6 form-group"><input type="text"
                                                        placeholder="Your Email" class="form-control"> <i
                                                        class="text-title far fa-envelope"></i></div>
                                                <div class="col-12 form-group"><input id="reviewcheck"
                                                        name="reviewcheck" type="checkbox"> <label
                                                        for="reviewcheck">Save my name, email, and website in this
                                                        browser for the next time I comment.<span
                                                            class="checkmark"></span></label></div>
                                                <div class="col-12 form-group mb-0"><button class="as-btn">Post
                                                        Review</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-4">
                            <aside class="sidebar-area">
                                <div class="widget widget_info">
                                    <div class="as-video"><img src="foto/g.jpeg" alt="video"> <a
                                            href="https://www.youtube.com/watch?v=5y3o4Z5DFY4" class="play-btn popup-video"><i
                                                class="fas fa-play"></i></a></div>
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
    {{-- <div class="col-xxl-4 col-lg-5">
        <aside class="sidebar-area">
            <div class="widget widget_search">
                <form class="search-form"><input type="text" placeholder="Search..."> <button
                        type="submit"><i class="far fa-search"></i></button></form>
            </div>
            <div class="widget widget_search">
                        <iframe src="jur/vid.sija.mp4"></iframe>
            </div>
           
        </aside>
    </div> --}}
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
@include('landingpage.layout.footer')
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js')}}">
	</script>
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/app.min.js')}}">
	</script>
	<script src="{{asset ('1/yeye/html/acadu/demo/assets/js/main.js')}}">
	</script><!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:30:06 GMT -->
</body>
</html>