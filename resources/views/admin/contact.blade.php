@extends('frontend.main_master')
@section('main')
@section('title')
Contact - {{config('app.name', 'Laravel') }}
@endsection
@php
    $info = App\Models\Footer::find(1);
@endphp
<!-- breadcrumb-area -->
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">Contact us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__wrap__icon">
        <ul>
            @php
                $multi_images = App\Models\MultiImage::orderBy('created_at','desc')->take(6)->get();
            @endphp
            @foreach ($multi_images as $multi_image)
                <li><img src="{{ empty($multi_image->multi_image) ? url('upload/no_image.jpg') : url($multi_image->multi_image) }}" alt=""></li>
            @endforeach
        </ul>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- contact-map -->
<div id="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d40.6880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd"
        allowfullscreen loading="lazy"></iframe>
</div>
<!-- contact-map-end -->

<!-- contact-area -->
<div class="contact-area">
    <div class="container">
        <form action="{{ route('store.message') }}" id="myForm" class="contact__form" method="post">
            @csrf

            <div class="row">
                <div class="form-group col-md-6">
                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name*" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Enter your mail*">
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="subject" id="subject" placeholder="Enter your subject">
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="number" min="0" name="phone" id="phone" placeholder="Enter your Phone">
                </div>
            </div>
           <div class="form-group">
                <textarea class="form-control" name="message" id="message" placeholder="Enter your massage*"></textarea>
                <button type="submit" class="btn btn-info" id="sendMessage">send massage</button>
           </div>

        </form>
    </div>
</div>
<!-- contact-area-end -->

<!-- contact-info-area -->
<section class="contact-info-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img src="{{ asset('frontend') }}/assets/img/icons/contact_icon01.png" alt="">
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">address line</h4>
                        <span>{{ $info->address }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img src="{{ asset('frontend') }}/assets/img/icons/contact_icon02.png" alt="">
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">Phone Number</h4>
                        <span>+{{ $info->number }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img src="{{ asset('frontend') }}/assets/img/icons/contact_icon03.png" alt="">
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">Mail Address</h4>
                        <span>{{ $info->email }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-area-end -->
@endsection