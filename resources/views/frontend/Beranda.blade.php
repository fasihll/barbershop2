@extends('frontend/template')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/beranda.css') }}">
@endsection
@section('content')

    {{-- jumbotron --}}
    <section id="home">
        <div class="jumbotron jumbotron-fluid">
            <img src="{{ url('images/banner.jpg') }}" class="img-fluid banner" alt="">
            <div class="container">
                <h1 class="display-4"> <span class="font-weight-bold"> Polkah </span><br> BarberShop</h1>
                <a href="" class="btn btn-warning button-banner">Gaya Rambut</a>
            </div>
        </div>
    </section>
    {{-- jumbotron --}}
    <div class="toggle-up">
        <a class="fas fa-arrow-up fa-3x" href="/#home"></a>
    </div>
    {{-- about --}}
    <section id="about">
        <div class="container">
            <h2 class="text-center about">About</h2>
            <div class="row justify-content-center " align="center">
                <div class="col-md">
                    <div class="border">
                        <img src="{{ url('images/about.jpg') }}" class="img-fluid about-img" alt="">
                    </div>
                </div>
                <div class="col-md about-text">
                    <h4>Polkah Barbershop</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus adipisci, quae assumenda
                        dolores iste nihil nobis minus in officiis praesentium natus provident dolore dolorem aut veniam
                        omnis sequi, non repudiandae ipsum quas? Ut, magnam cum atque vel pariatur, saepe eum dolorum
                        debitis, quos vero esse perferendis qui quasi aliquid est!</p>
                </div>
            </div>
        </div>
    </section>
    {{-- about --}}

    {{-- Hairstyle --}}
    <section id="hairstyle" class="bg-light">
        <div class="container">
            <h2 class="text-center mb-5 hairstyle">Hairstyle</h2>
            <div class="row">
                <div class="col-md-12">

                    <div class="carousel slide" id="carouselindicator" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselindicator" data-slide="0" class="active"></li>
                            <li data-target="#carouselindicator" data-slide="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            {{-- carousel item --}}
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/FADE.png') }}" alt=""></div>
                                            <div class="img-text">
                                                <h2>Fade</h2>
                                                <p>Gaya Rambut Fade atau biasa disebut dengan Fade Haircut merupakan
                                                    potongan rambut yang memotong hingga tipis bagian samping dan belakang
                                                    kepala dan membiarkan rambut bagian atas tetap panjang. Tren gaya rambut
                                                    fade ini termasuk salah satu yang mulai banyak dipakai anak muda saat
                                                    ini.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/MAN_BUN.png') }}" alt=""></div>
                                            <div class="img-text">
                                                <h2>SHORT BACK AND SIDES</h2>
                                                <p>Gaya rambut Short Back and Sides memiliki potongan yang panjang pada
                                                    bagian atas, gaya rambut ini dibentuk dengan menyisir rambut bagian atas
                                                    ke belakang dengan bentuk meruncing dibelakang. Gaya rambut Short Back
                                                    and Sides adalah pilihan ideal untuk pria yang ingin menambahkan
                                                    keunikan untuk gaya rambut mereka.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/POMPADOUR.png') }}" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>POMPADOUR</h2>
                                                <p>Pompadour pada umumnya ditandai dengan volume rambut yang banyak pada
                                                    bagian atasnya. Jenis rambut pria Pompadour ini banyak sekali jenisnya
                                                    dan untuk membuat gaya rambut ini lebih rapih sebaiknya kamu juga
                                                    menggunakan pomade agar kegantengan menggunakan rambut pompadour ini
                                                    lebih maksimal.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- vsrousel item --}}
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/SHORT_BACK_AND_SIDES.png') }}"
                                                    alt=""></div>
                                            <div class="img-text">
                                                <h2>MAN BUN</h2>
                                                <p>Gaya rambut Man Bun ini cocok untuk kamu yang berani tampil beda dan
                                                    pastinya mempunyai rambut yang agak panjang. Man Bun Hairstyle bisa
                                                    dibuat dengan cara menarik seluruh rambut kamu ke pusat kepala dan kamu
                                                    bisa menguncir rambut tersebut. Panjang pendeknya bisa kamu tentukan
                                                    sesuai dengan selera kamu.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/SIDE_PART.png') }}" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>TOP KNOT</h2>
                                                <p>Gaya rambut top knot ini mirip dengan Man Bun, Hanya saja Model rambut
                                                    top knot mempunyai sisi yang dipotong pendek, tidak seperti man bun yang
                                                    tetap tebal pada sisinya. Ikatan pada gaya rambut ini biasanya berada
                                                    pada pertengahan antara ujung atas dan ujung kepala belakang. Tapi
                                                    banyak juga yang menempatkan ikatan ini pada bagian kepala belakang..
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/TOP_KNOT.png') }}" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>SIDE PART</h2>
                                                <p>Model rambut ini biasa kita kenal dengan model rambut belah samping atau
                                                    belang pinggir. Model ini sudah sangat umum di lingkungan kita dan masih
                                                    tetap eksis hingga sekarang. Kalangan professional umumnya memakai
                                                    potongan rambut ini karna terlihat rapih dan tidak terkesan aneh-aneh.
                                                    Setidaknya pasti kamu pernah menggunakan model rambut belah pinggir ini
                                                    kan atau mungkin memang model belah pinggir ini yang sedang kamu gunakan
                                                    saat ini.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- carouser item --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- Hairstyle --}}

    {{-- testimoni --}}
    <section id="testimoni" class="bg-white">
        <div class="container my-5">
            <h2 class="text-center mb-5 testimoni">Testimoni</h2>
            <div class="row">
                <div class="col-md-12">
                    <div id="carousellink" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousellink" data-slide="0" class="active"></li>
                            <li data-target="#carousellink" data-slide="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/FADE.png') }}" alt=""></div>
                                            <div class="img-text">
                                                <h3>Nama</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    voluptates tempora, odit eum suscipit atque sapiente optio voluptate
                                                    aperiam quas quibusdam libero laboriosam magnam labore, totam, ullam
                                                    beatae saepe aspernatur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/FADE.png') }}" alt=""></div>
                                            <div class="img-text">
                                                <h3>Nama</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    voluptates tempora, odit eum suscipit atque sapiente optio voluptate
                                                    aperiam quas quibusdam libero laboriosam magnam labore, totam, ullam
                                                    beatae saepe aspernatur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/FADE.png') }}" alt=""></div>
                                            <div class="img-text">
                                                <h3>Nama</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    voluptates tempora, odit eum suscipit atque sapiente optio voluptate
                                                    aperiam quas quibusdam libero laboriosam magnam labore, totam, ullam
                                                    beatae saepe aspernatur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/FADE.png') }}" alt=""></div>
                                            <div class="img-text">
                                                <h3>Nama</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    voluptates tempora, odit eum suscipit atque sapiente optio voluptate
                                                    aperiam quas quibusdam libero laboriosam magnam labore, totam, ullam
                                                    beatae saepe aspernatur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/FADE.png') }}" alt=""></div>
                                            <div class="img-text">
                                                <h3>Nama</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    voluptates tempora, odit eum suscipit atque sapiente optio voluptate
                                                    aperiam quas quibusdam libero laboriosam magnam labore, totam, ullam
                                                    beatae saepe aspernatur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="{{ url('images/FADE.png') }}" alt=""></div>
                                            <div class="img-text">
                                                <h3>Nama</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                                                    voluptates tempora, odit eum suscipit atque sapiente optio voluptate
                                                    aperiam quas quibusdam libero laboriosam magnam labore, totam, ullam
                                                    beatae saepe aspernatur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- testimoni --}}

    <footer id="kontak" class="py-4">
        <div class="container my-4">
            <h3 class="text-center mb-5 text-white">Contact</h3>
            <div class="row justify-content-center">
                <div class="col-5">
                    <ul class="list-group bg-transparant kontak">
                        <li class="list-group-item fa fa-clock"> 07:00 - 22:00</li>
                        <li class="list-group-item fa fa-map-marker-alt"> Jl. KH Moch cholil Gg III e</li>
                        <li class="list-group-item fa fa-at"> fasihullisan091966@gmail.com</li>
                        <li class="list-group-item fa fa-phone"> +6285336076077</li>
                        <li class="list-group-item sosmed">
                            <i class="fab fa-facebook fa-2x"></i>
                            <i class="fab fa-instagram fa-2x"></i>
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-5 d-flex">
                    <iframe style="height: 300px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.9083008747382!2d112.74183015792103!3d-7.030830936688475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8058c77d1cda5%3A0x77fe1a76576f6717!2sJl.%20KH%20Moh.%20Kholil%20Gg.%20IIIF%2C%20Kec.%20Bangkalan%2C%20Kabupaten%20Bangkalan%2C%20Jawa%20Timur%2069115!5e0!3m2!1sid!2sid!4v1612056111903!5m2!1sid!2sid"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </footer>

@endsection
