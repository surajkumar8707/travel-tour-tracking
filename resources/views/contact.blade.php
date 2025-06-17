@extends('layouts.app')
@section('title', 'Contact Page')
@section('content')
    <section class="py-5 theme-bg text-light text-center heading-section">
        <div class="container">
            <h1 class="display-6 fw-bold">Contact US {{ $settings->app_name }}</h1>
            <p class="lead">Your trusted partner in Himalayan trekking & travel experiences</p>
        </div>
    </section>

    <section class="contact-info-section">
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-6 info-section">
                    <div>
                        <!-- <span class="ts-service-icon">
                                                      <i class="fas fa-map-marker-alt mr-0"></i>
                                                    </span> -->
                        <div class="ts-service-box-content">
                            <h4>Address</h4>
                            <p>{{ $settings->address }}</p>
                        </div>
                    </div>

                    <div>
                        <!-- <span class="ts-service-icon">
                                                      <i class="fa fa-envelope mr-0"></i>
                                                    </span> -->
                        <div class="ts-service-box-content">
                            <h4>Email Us</h4>
                            <p>{{ $settings->email }}</p>
                        </div>
                    </div>

                    <div>
                        <!-- <span class="ts-service-icon">
                                                      <i class="fa fa-phone-square mr-0"></i>
                                                    </span> -->
                        <div class="ts-service-box-content">
                            <h4>Call Us</h4>
                            <p>+91 - {{ $settings->contact }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 contact-form-section">
                    <h3 class="column-title">Fill out our form below, an {{ $settings->app_name }}
                        Representative
                        will be in touch for further details!</h3>
                    <form id="request" class="main_form" method="POST" action="{{ route('front.save.contact') }}">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <input class="form-control" placeholder="First Name" type="text" name="fname">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="Last Name" type="text" name="lname">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <input class="form-control" placeholder="Email * " type="email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="Phone Number" type="number" name="phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control " name="city" id="subject" placeholder="City"
                                        type="text" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form-control-message" name="message" id="message" placeholder="Send Us a Message"
                                rows="4" required="" autocomplete="off"></textarea>
                        </div>
                        <div class="text-center"><br>
                            <button class="btn btn-primary solid blank form-button" type="submit">Send Your
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-image">

    </section>
@endsection
