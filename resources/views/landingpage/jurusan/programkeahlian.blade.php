<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from angfuzsoft.com/html/acadu/demo/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:32:21 GMT -->
@include('landingpage.layout.head')

<body>
    @include('landingpage.layout.header')
    <section class="space" data-bg-src="{{ asset('1/yeye/html/acadu/demo/assets/img/bg/feature_bg_1.jpg') }}">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title">Semua</span>
                <h2 class="sec-title fw-semibold text-white">Bidang Keahlian</h2>
            </div>
            <tbody>
               
                    <div class="row gy-4 justify-content-center">
                        @foreach ($data as $row)
                        <div class="col-lg-4 col-md-6">
                            <div class="feature-grid">
                                <tr>
                                    <th scope="row"></th>
                                    <img alt=" " src="foto/{{ $row->foto }}"width="100px" alt="icon">
                                    <br />
                                    <br />
                                    <h3 class="feature-grid_title text-black">
                                        <td>{{ $row->jurusan }}</td>
                                    </h3>
                                    <div class="overflow tambahan" >
                                        <p>{!! $row->deskripsi !!}</p>
                                    </div>
                                    <div class="text-center mt-20 mt-xl-5">
                                        <a href="/detail/{{ $row->id }}" class="as-btn">selengkapnya<i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                            </div>
                        </div>
                @endforeach
            </tbody>
            {{-- <div class="col-lg-4 col-md-6">
                    <div class="feature-grid">
                        <br/>
                        <br/>
                        <thead>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>  <img alt=" " src="foto/{{ $row->foto }}"width="100px"> </td>
                                <td>{{ $row->jurusan }}</td>
                                <td>{!! $row->deskripsi !!}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div> --}}
            {{-- <div class="col-lg-4 col-md-6">
                    <div class="feature-grid">
                        <img class="gg" src="{{asset ('foto/rpl-remove.png')}}" alt="icon">
                        <br/>
                        <br/>
                        <h3 class="feature-grid_title">Rekayasa Perangkat Lunak</h3>
                        <p class="overflow"class="feature-grid_text">Rekayasa perangkat lunak (RPL, atau dalam bahasa Inggris: Software Engineering atau SE) adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembanganan perangkat lunak dan manajemen kualitas.</p>
                        <div class="text-center mt-20 mt-xl-5">
                            <a href="rpl" class="as-btn">selengkapnya<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-grid">
                        <img class="gg" src="{{asset ('foto/tkj.png')}}" alt="icon">
                        <br/>
                        <br/>
                        <h3 class="feature-grid_title">Teknik Komputer & Jaringan</h3>
                        <p class="overflow"class="feature-grid_text">Sistem Informatika Jaringan dan Aplikasi (SIJA) merupakan satu-satunya program keahlian di SMK Negeri 1 Dlanggu Mojokerto yang menjalankan program SMK 4 tahun.
                            Program keahlian SIJA berdiri sejak tahun 2017 dengan jumlah sampai saat ini sebanyak 136 siswa .</p>
                            <div class="text-center mt-20 mt-xl-5">
                                <a href="tkj" class="as-btn">selengkapnya<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-grid">
                        <img class="gg" src="{{asset ('foto/animasi.png')}}" alt="icon">
                        <br/>
                        <br/>
                        <h3 class="feature-grid_title">Animasi</h3>
                        <p class="overflow" class="feature-grid_text">Program studi animasi dibentuk dengan aspek kemanfaatan mengembangkan sumber daya bangsa: baik manusia, alam, budaya, seni dan karakter lokal bercirikan ke-Indonesiaan yang mendunia. Hal ini terwujud dalam peran sertanya membangun sumber daya manusia yang kompeten dalam segi keahlian dan berkarakter.</p>
                        <div class="text-center mt-20 mt-xl-5">
                            <a href="anm" class="as-btn">selengkapnya<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-grid">
                        <img class="gg" src="{{asset ('1/yeye/html/acadu/demo/assets/img/icon/feature_2_3.png')}}" alt="icon">
                        <br/>
                        <br/>
                        <h3 class="feature-grid_title">Tata Boga</h3>
                        <p class="overflow"class="feature-grid_text">Tata boga adalah suatu disiplin ilmu terkait dengan seni dalam menyiapkan, memasak, dan menghidangkan makanan siap saji. Di Indonesia, disiplin ilmu ini dapat dipelajari di Sekolah Menengah Kejuruan (SMK) atau di tingkat sekolah tinggi terkait Industri pariwisata dan industri perhotelan.</p>
                        <div class="text-center mt-20 mt-xl-5">
                            <a href="tb" class="as-btn">selengkapnya<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div> --}}
        </div>
        </div>
    </section>
    @include('landingpage.layout.footer')
    <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    {{-- <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/app.min.js') }}"></script> --}}
    <script src="{{ asset('1/yeye/html/acadu/demo/assets/js/main.js') }}"></script>
    <!-- Mirrored from angfuzsoft.com/html/acadu/demo/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 07:30:06 GMT -->
</body>

</html>
