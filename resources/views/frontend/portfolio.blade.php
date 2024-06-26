@extends('frontend.main_master')
@section('main')
@section('title')
Portfolio - {{config('app.name', 'Laravel') }}
@endsection
@php
    $multiImages = App\Models\MultiImage::all()->sortDesc()->take(6);
@endphp
<!-- breadcrumb-area -->
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">Portfolios</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__wrap__icon">
        <ul>
            @foreach ($multiImages as $multiImage)
                <li><img src="{{ $multiImage->multi_image }}" alt=""></li>
            @endforeach
        </ul>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- portfolio-area -->
<section class="portfolio__inner">
    <div class="container">
        <div class="portfolio__inner__active">

            @foreach ($portfolios as $portfolio)
                <div class="portfolio__inner__item grid-item cat-two cat-three">
                    <div class="row gx-0 align-items-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__thumb">
                                <a href="{{ route('portfolio.details', $portfolio->id) }}">
                                    <img src="{{ $portfolio->portfolio_image }}" alt="{{ $portfolio->portfolio_name }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__content">
                                <h2 class="title"><a href="{{ route('portfolio.details', $portfolio->id) }}" href="portfolio-details.html">{{ $portfolio->portfolio_title }}</a></h2>
                                <p>{!! Str::limit($portfolio->portfolio_description, 200) !!}</p>
                                <a href="{{ route('portfolio.details', $portfolio->id) }}" class="link">View Case Study</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- portfolio-area-end -->
@endsection