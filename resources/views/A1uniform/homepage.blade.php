@extends('masters.homepageMaster')

@section('main')
    <!-- banner -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item item1 active">
                <div class="banner-style d-flex align-items-center">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption-banner" style="max-width:1200px">
                                <img class="d-block w-100" src="{{asset('storage/images/carousel1.jpg')}}" alt="First slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item2">
                <div class="banner-style d-flex align-items-center">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption-banner" style="max-width:1200px">
                                <img class="d-block w-100" src="{{asset('storage/images/carousel2.jpg')}}" alt="Second slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- //banner -->

@endsection
