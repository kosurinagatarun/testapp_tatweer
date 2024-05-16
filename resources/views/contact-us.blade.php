<!-- resources/views/contact-us.blade.php -->
@extends('layouts.admin')

@section('content')
    <!-- Start Hero -->
    <div class="cs-page_heading cs-style1 cs-center text-center cs-bg"
        data-src="storage/app/public/assets/tatweer-img/contact_hero_bg.jpeg">
        <div class="container">
            <div class="cs-page_heading_in">
                <h1 class="cs-page_title cs-font_50 cs-white_color">Contact Us</h1>
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Hero -->
    <div class="cs-height_150 cs-height_lg_80"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="cs-section_heading cs-style1">
                    <h3 class="cs-section_subtitle">Getting Touch</h3>
                    <h2 class="cs-section_title">Do you have a project <br>in your mind?</h2>
                </div>
                <div class="cs-height_55 cs-height_lg_30"></div>
                <ul class="cs-contact_info cs-style1 cs-mp0">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.08 11.82 12.69 11.9 12.41 12.17L10.21 14.37C7.38 12.93 5.06 10.62 3.62 7.79L5.82 5.58C6.1 5.31 6.18 4.92 6.07 4.57C5.7 3.45 5.5 2.25 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM9 0V10L12 7H18V0H9Z"
                                fill="#0067ffe6"></path>
                        </svg>
                        <span>(+971) 123 45678900</span>
                    </li>
                    <li>
                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 6.98V16C20 17.1 19.1 18 18 18H2C0.9 18 0 17.1 0 16V4C0 2.9 0.9 2 2 2H12.1C12.04 2.32 12 2.66 12 3C12 4.48 12.65 5.79 13.67 6.71L10 9L2 4V6L10 11L15.3 7.68C15.84 7.88 16.4 8 17 8C18.13 8 19.16 7.61 20 6.98ZM14 3C14 4.66 15.34 6 17 6C18.66 6 20 4.66 20 3C20 1.34 18.66 0 17 0C15.34 0 14 1.34 14 3Z"
                                fill="#0067ffe6"></path>
                        </svg>
                        <span>hello@tatweer.com</span>
                    </li>
                    <li>
                        <svg width="14" height="20" viewBox="0 0 14 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z"
                                fill="#0067ffe6"></path>
                        </svg>
                        <span>123 Sheikh Zayed Road, Dubai, United Arab Emirates</span>
                    </li>
                </ul>
                <div class="cs-height_0 cs-height_lg_50"></div>
            </div>
            <div class="col-lg-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="row">
                    @csrf
                    {{-- <input type="hidden" name="access_key" value="6d7bc3fc-6190-43c5-8298-89ac5ef7494f">
                    <input type="checkbox" name="botcheck" style="display: none;">
                    <input type="hidden" name="subject" value="Submission from Laralink Template"> --}}

                    <div class="col-sm-6 form-group">
                        <label class="cs-primary_color">Full Name*</label>
                        <input type="text" id="name" name="name" class="cs-form_field" required>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="cs-primary_color">Email*</label>
                        <input type="email" id="email" name="email" class="cs-form_field" required>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="cs-primary_color">Service*</label>
                        <input type="text" class="cs-form_field" id="service_type" name="service_type[]"required>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                    </div>

                    <div class="col-sm-6 form-group">
                        <label class="cs-primary_color">Mobile*</label>
                        <input type="text" id="phone" name="phone" class="cs-form_field" required>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <label class="cs-primary_color">Write Details*</label>
                        <textarea cols="30" rows="7" class="cs-form_field" id="message" name="message" required></textarea>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="col-lg-12 ">
                        <button class="cs-btn cs-style1" type="submit">
                            <span>Send Message</span>
                            <svg width="26" height="12" viewBox="0 0 26 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        <div id="cs-result"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="cs-height_150 cs-height_lg_80"></div>
    <div class="cs-google_map cs-bg" data-src="assets/img/map_img.jpeg">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.7547554779883!2d55.27195311501162!3d25.204849983895827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4331d7f3f0b5%3A0x9b3a7a2c3b3cdbcb!2sBurj%20Khalifa!5e0!3m2!1sen!2sae!4v1621437733088!5m2!1sen!2sae"
            allowfullscreen="" loading="lazy"></iframe>

    </div>
    <div class="cs-height_50 cs-height_lg_40"></div>
@endsection
