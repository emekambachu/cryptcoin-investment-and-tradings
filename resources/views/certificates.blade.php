@extends('layouts.main-pages')

@section('title')
    Certifications and Awards
@endsection

@section('content')
    <div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a class="uk-text-primary" href="{{ url('about') }}">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="about-pattern">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 about-desc">
                    <h2 class="column-title title-small">
                        <span style="color: #0E608C; font-weight: bold;">CERTIFICATE OF MEMBERSHIP</span></h2>
                    <p>Certificate of Membership awarded by the Financial Commission</p>
                    <img width="700" src="{{ asset('main/certificates/certificate_of_membership.jpeg') }}"/>
                    <div class="gap-15"></div>

                    <h2 class="column-title title-small" style="margin-top: 30px;">
                        <span style="color: #0E608C; font-weight: bold;">CYPRUS INVESTMENT FIRM AUTHORIZATION</span></h2>
                    <img width="700" src="{{ asset('main/certificates/cyprus_investment_firm.jpeg') }}"/>
                    <div class="gap-15"></div>

                    <h2 class="column-title title-small">
                        <span style="color: #0E608C; font-weight: bold;">INVESTMENT DEALER (DISCOUNT BROKER) LICENSE</span></h2>
                    <p>Investment Dealer License awarded by the Financial Services Commission</p>
                    <img width="700" src="{{ asset('main/certificates/investment_dealer.jpeg') }}"/>
                    <div class="gap-15"></div>
                </div>


            </div>
            <!-- Main row end-->
        </div>
        <!-- Container 1 end-->
    </div>
    <!-- About pattern End-->
@endsection
