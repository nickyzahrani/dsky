@extends('layouts.landing.landing')

@section('content')

<body>
<div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>D'Sky Billiard</h1>
                            <!-- <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span> -->
                            <h2>Yang Mewah Ngga Selalu Mahal </h2>
                            <p>Restoran, Cafe, dan Billiard</p>
                            <!-- <div class="book-btn">
                                <a href="/login" class="table-btn hvr-underline-from-center">Reservasi Sekarang</a>
                            </div> -->
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> Tentang Kami </h2>
                        <h3>IT STARTED, QUITE SIMPLY, LIKE THIS...</h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, nostrud exercitation ullamco. </p>

                        <p> Aenean commodo ligula eget dolor aenean massa. Cum sociis nat penatibu set magnis dis parturient montes, nascetur ridiculus mus. quam felisorat, ultricies nec, Aenean commodo ligula eget dolor penatibu set magnis is parturient montes, nascetur ridiculus mus. quam felisorat, ultricies nec, pellentesque eu, pretium quis, sem. quat massa quis enim. Donec vitae sapien ut libero venenatis fauci Nullam quis ante. Etiam sit amet rci eget eros. </p>

                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, nostrud exercitation ullamco. </p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="{{asset ('images/dsky2.jpeg')}}" alt="About Main Image">
                            <img class="about-inset" src="{{asset ('images/meja2.jpeg')}}" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="fasilitas" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Fasilitas </h2>
                        <h5 class="title-caption text-center"> Fasilitas Unggulan Kami </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            BILLIARD
                                            <div class="line"></div>
                                            <div class="dit-line">Nikmati permainan billiard di meja berkualitas dengan suasana yang nyaman.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="{{asset ('images/meja.jpg')}}" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            CAFE
                                            <div class="line"></div>
                                            <div class="dit-line">Santai sejenak dan nikmati minuman serta makanan lezat di cafe kami.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="{{asset ('images/cafe.jpeg')}}" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            MUSHOLLA
                                            <div class="line"></div>
                                            <div class="dit-line">Beribadahlah dengan tenang di musholla yang bersih dan nyaman.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="{{asset ('images/musholla.jpeg')}}" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            KAMAR MANDI
                                            <div class="line"></div>
                                            <div class="dit-line">Fasilitas untuk kamar mandi pria dan wanita.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="{{asset ('images/kamarmandi.jpeg')}}" alt="sp-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div id="pricing" class="pricing-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
						Harga 	
					</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut orci varius, elementum lectus nec, aliquam lectus. Duis neque augue, maximus in sapien ut, porta pharetra odio.</p>
                </div>
                <div class="panel-pricing-in">
                    <!-- item -->
                    <div class="col-md-6 col-sm-6 text-center">
                        <div class="panel panel-pricing">
                            <div class="panel-heading">
                                <div class="pric-icon">
                                    <img src="{{asset ('images/siang.png')}}" alt="" />
                                </div>
                                <h3>Pukul 14.00 - 17.30 WIB</h3>
                            </div>
                            <!-- <div class="panel-body text-center">
                                <p><strong>$30/<span>Month</span></strong></p>
                            </div> -->
                            <ul class="list-group text-center">
                                <li class="list-group-item"><i class="fa fa-check"></i> Umum    = Rp 25.000 / Jam</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Pelajar = Rp 17.500 / Jam</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Paket 1 = Rp 50.000 2 Jam + 2 Es Teh</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Paket 2 = Rp 60.000 2 Jam + 2 Es Teh + Snack</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Paket 3 = Rp 80.000 2 Jam + 2 Es Teh + 2 Makan</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block hvr-underline-from-center" href="/login">Pesan Sekarang!</a>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->

                    <!-- item -->
                    <div class="col-md-6 col-sm-6 text-center">
                        <div class="panel panel-pricing">
                            <div class="panel-heading">
                                <div class="pric-icon">
                                    <img src="{{asset ('images/malam.png')}}" alt="" />
                                </div>
                                <h3>Pukul 17.30 - 02.00 WIB</h3>
                            </div>
                            <!-- <div class="panel-body text-center">
                                <p><strong>Setelah<span> 17.30</span></strong></p>
                            </div> -->
                            <ul class="list-group text-center">
                                <li class="list-group-item"><i class="fa fa-check"></i> Umum    = Rp 35.000 / Jam</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Pelajar = Rp 27.500 / Jam</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Paket 1 = Rp 70.000 2 Jam + 2 Es Teh</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Paket 2 = Rp 85.000 2 Jam + 2 Es Teh + Snack</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Paket 3 = Rp 100.000 2 Jam + 2 Es Teh + 2 Makan</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block hvr-underline-from-center" href="/login">Pesan Sekarang!</a>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end pricing-main -->

   
</body>
@endsection
