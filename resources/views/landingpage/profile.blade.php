<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')
<body>
	@include('landingpage.layout.header')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcum.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Profile Sekolah</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Beranda</a></li>
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
                            <div class="course-img"><img src="https://4.bp.blogspot.com/-hr6ko7FRlvY/VWByVK4DVgI/AAAAAAAAAWs/AAQ-yCBIMFg/s1600/DSC02781.JPG" width="150" alt="Course Image"></div>
                            <h2 class="course-title">PROFILE SMK NEGERI 1 DLANGGU</h2>
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

                            </ul>
                            <div class="tab-content" id="productTabContent">
                                <div class="tab-pane fade show active" id="Coursedescription" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <div class="course-description">
                                        <h5 class="h5">Identitas Sekolah</h5>
                                        <p>
                                            <strong>Nama Sekolah     : </strong>{{ $data->nama }}<br/>
                                            <strong>Status              :</strong>{{ $data->status }}<br/>
                                            <strong>NPNS                :</strong>{{ $data->NPNS }}<br/>
                                            <strong>Akreditasi          :</strong>{{ $data->akreditasi }}<br/>
                                            <strong>NSS                 :</strong>{{ $data->NSS }}
                                        </p>
                                        <h5 class="h5">Alamat Sekolah</h5>
                                        <p>
                                            <strong>Alamat           : </strong>{{ $data->alamat }} <br/>
                                            <strong>Kode Pos         :</strong>{{ $data->kode }}<br/>
                                            <strong>No Tlpn          :</strong>{{ $data->no }}<br/>
                                            <strong>Email            :</strong>{{ $data->email }}<br/>
                                        </p>
                                    </div>
                                </div>                         
                                @foreach ($visi as $vs)
                                <div class="tab-pane fade" id="curriculam" role="tabpanel"
                                    aria-labelledby="curriculam-tab">
                                    <div class="course-curriculam">
                                     <p>{!! $vs->deskripsi !!}</p> 
                                            
                                    </div>
                                </div>
                                @endforeach
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="course-Reviews">
                                        <div class="as-comment-form">
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
                                    <div class="course-img"><img src="https://4.bp.blogspot.com/-hr6ko7FRlvY/VWByVK4DVgI/AAAAAAAAAWs/AAQ-yCBIMFg/s1600/DSC02781.JPG" width="150" alt="Course Image">
                                    </div>
                                    <h3 class="widget_title">Kepala Sekolah</h3>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="fa-light fa-user"></i> <strong>Nama: </strong><span>Kevin
                                                    Perry</span></li>
                                            <li><i class="fa-light fa-file"></i> <strong>NIP: </strong><span>8</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget widget_info">
                                    <h3 class="widget_title">Wakil Kepala Sekolah</h3>
                                    <br />
                                    <div class="col-xl-12">
                                        <div class="row as-carousel" data-md-slide-show="2" data-slide-show="2">
                                            <div class="col-md-4 col-lg-4">
                                                <div class="team-box">
                                                    <div class="team-img">
                                                        <img class="yy" alt="Team" src="{{ asset('1/yeye/html/acadu/demo/assets/img/event/event_1_2.jpg') }}">

                                                    </div>
                                                    <div class="team-content">
                                                        <h6 class="team-title">Kevin Martin Ben</a></h6><span class="team-desig">Online Teacher</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="team-box">
                                                    <div class="team-img">
                                                        <img class="yy" alt="Team" src="{{ asset('1/yeye/html/acadu/demo/assets/img/event/event_1_2.jpg') }}">

                                                    </div>
                                                    <div class="team-content">
                                                        <h6 class="team-title">Michael Dania Tin</a></h6><span class="team-desig">Online Teacher</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="team-box">
                                                    <div class="team-img">
                                                        <img class="yy" alt="Team" src="{{ asset('1/yeye/html/acadu/demo/assets/img/event/event_1_2.jpg') }}">

                                                    </div>
                                                    <div class="team-content">
                                                        <h6 class="team-title">Aiden Samuel Jabin</a></h6><span class="team-desig">Online Teacher</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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