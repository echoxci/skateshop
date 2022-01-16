@extends('layouts.front')

@section('title')
    Welcome to Extreme Skateshop
@endsection

@section('content')
    @include('layouts.inc.frontslider')
    <div class="container px-4 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5 mt-5">
                    Skateshop sa nachádza v Turčianskych Tepliciach a ponúka tie najkvalitnejšie skateboardove komponenty na predaj. <br>
                    K dispozícií sú skate komplety, dosky, trucky, kolieska, ložiská a hardware od svetových značiek.
                </p>
                <a class="btn btn-primary btn-xl" href="#portfolio" aria-expanded="false">Fotky skateshopu</a>
            </div>
        </div>
    </div>
    <div id="portfolio">
        <div class="container-fluid pt-5">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/images/portfolio/1.jpg') }}" title="Obrazok shopu">
                        <img class="img-fluid" src="{{ asset('assets/images/portfolio/1.jpg') }}" alt="..." />

                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/images/portfolio/1.jpg') }}" title="Obrazok shopu">
                        <img class="img-fluid" src="{{ asset('assets/images/portfolio/1.jpg') }}" alt="..." />

                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/images/portfolio/1.jpg') }}" title="Obrazok shopu">
                        <img class="img-fluid" src="{{ asset('assets/images/portfolio/1.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/images/portfolio/1.jpg') }}" title="Obrazok shopu">
                        <img class="img-fluid" src="{{ asset('assets/images/portfolio/1.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/images/portfolio/1.jpg') }}" title="Obrazok shopu">
                        <img class="img-fluid" src="{{ asset('assets/images/portfolio/1.jpg') }}" alt="..." />
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/images/portfolio/1.jpg') }}" title="Obrazok shopu">
                        <img class="img-fluid" src="{{ asset('assets/images/portfolio/1.jpg') }}" alt="..." />
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection