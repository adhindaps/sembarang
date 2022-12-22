<header class="as-header header-layout2">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    @foreach ($email as $ee)
                    <div class="header-links">
                        <ul>
                            <li>
                                <i class="fas fa-envelope"></i><b>Email:</b> <a href="mailto:{{ $ee->email }}">{{ $ee->email }}</a>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i><b>Telepon:</b> <a href="tel:{{ $ee->no }}5">{{ $ee->no }}</a>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li>
                                @foreach ($sosmed as $sos )
                                <div class="header-social">
                                    <a href="{{ $sos->sosmed }}"><i class="fab fa-instagram "width="100px"></i></a>
                                     <a href="https://twitter.com/HumasSMKN1DLG"><i class="fab fa-twitter"></i></a>
                                      
                                       <a href="https://www.instagram.com/humas_smkn1dlanggu/"><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.youtube.com/channel/UC9l3e9tfY3P-grNXww2Mz_A"><i class="fab fa-youtube"></i></a>
                                </div>
                                @endforeach
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <img src="http://www.smkn1dlanggu.sch.id/websmk/asset/logo/logo.png" id="logo" width="400">
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <nav class="main-menu d-none d-lg-inline-block">
                                        <ul>
                                            <li>
                                                <a href="/">Beranda</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Program</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="programkeahlian">Program Studi</a>
                                                    </li>
                                                    <br/>
                                                    <li>
                                                        <a href="extrakulikuler">EXTRAKULIKULER</a>
                                                    </li>
                                                    <br/>
                                                    <li>
                                                        <a href="http://lsp.smkn1dlanggu.sch.id/#">LSP</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Tentang Kami</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="profile">Profile Sekolah</a>
                                                    </li>
                                                    <br/>
                                                    <li>
                                                        <a href="sejarah">Sejarah Sekolah</a>
                                                    </li>
                                                   <br/>           
                                                   <li>
                                                    <a href="prestasi">Prestasi Sekolah</a>
                                                   </li>
                                                   <br/>  
                                                   <li>
                                                    <a href="dataguru">Data Guru & Karyawan</a>
                                                   </li>                                                                                               
                                                </ul>
                                            </li>
                                    
                                            <li>
                                                <a href="bkk">BKK</a>
                                            </li>
                                            <li>
                                                <a href="kontak">Kontak</a>
                                            </li>
                                        </ul>
                                    </nav><button class="as-menu-toggle d-inline-block d-lg-none" type="button"><i class="far fa-bars"></i></button>
                                </div>
                                <div class="col-auto d-none d-xxl-block">
                                    {{-- <div class="header-button">
                                        <button class="simple-icon searchBoxToggler" type="button"><i class="far fa-search"></i></button> <a class="as-btn ml-15" href="contact.html">Become Teacher<i class="fas fa-arrow-right ms-2"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>