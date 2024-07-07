@extends('layouts.landing.landing')

@section('content')

<body>

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
                                <h3>Sebelum 17.30</h3>
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
                                <h3>Setelah 17.30</h3>
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