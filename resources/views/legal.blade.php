@extends('layouts.main-pages')

@section('title')
    Legal
@endsection

@section('content')
    <div class="uk-section uk-padding-remove-vertical in-liquid-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a class="uk-text-primary" href="{{ url('legal') }}">Legal</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section in-liquid-14">
        <div class="uk-container">
            <div class="uk-grid-large uk-flex uk-flex-middle uk-grid" data-uk-grid="">
                <div class="uk-width-expand@m uk-first-column">
                    <h2>Legal</h2>
                    <p>
                        The content provided on this website is for informational purposes only. Digital Trading Options is not responsible for, and explicitly disclaims, all liability for damages of any kind arising out of the use, reference to or reliance on any information contained within the website.<br><br>
                        Although the Digital Trading Options website may include links with direct access to other internet resources / websites, it is not responsible for the accuracy or content of the information listed on these sites. Links from the Digital Trading Options website to third party websites do not constitute an endorsement by Digital Trading Options of those parties or their products and services.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
