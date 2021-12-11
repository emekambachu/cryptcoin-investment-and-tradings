<!DOCTYPE html>
<html lang="eng" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Cryptcoin Investment and Tradings">
    <meta name="keywords" content="Cryptcoin Investment and Tradings">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fc5b3f" />
    <!-- Site Properties -->
    <title>Admin Login - Cryptcoin Investment and Tradings</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{ asset('main/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('main/css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('main/css/style.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{ asset('main/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('main/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{ asset('main/fonts/inter-v2-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('main/fonts/inter-v2-latin-500.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('main/fonts/inter-v2-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="{{ asset('logoonly.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('logoonly.png') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('main/css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">

    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
</head>

<body>
<!-- preloader begin -->
<div class="in-loader">
    <div></div>
    <div></div>
    <div></div>
</div>
<!-- preloader end -->
<main>
    <!-- section content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid" data-uk-height-viewport="expand: true">
                <div class="uk-width-2-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url({{ asset('main/img/in-signin-image.jpg') }});">
                </div>
                <div class="uk-width-expand@m uk-flex uk-flex-middle">
                    <div class="uk-grid uk-flex-center">
                        <div class="uk-width-3-5@m">
                            <div class="in-padding-horizontal@s">
                                <!-- logo begin -->
                                <a class="uk-logo" href="{{ url('/') }}">
                                    <img src="{{ asset('logo.png') }}" data-src="{{ asset('logo.png') }}"
                                         alt="logo" width="160" height="34" data-uk-img>
                                </a>
                                <!-- logo end -->
                                <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Log into your account</p>
                                <!-- login form begin -->
                                <form class="uk-grid uk-form" action="{{ route('admin-login') }}" method="post">
                                    @csrf
                                    <label>Email</label>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                        <input class="@error('username') is-invalid @enderror uk-input uk-border-rounded"
                                               id="username" name="username" type="text" placeholder="Username" required>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label>Password</label>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                        <input class="@error('password') is-invalid @enderror @error('password') is-invalid @enderror uk-input uk-border-rounded"
                                               type="password" name="password" placeholder="Password"
                                               autocomplete="new-password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1">
                                        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Sign in</button>
                                    </div>
                                </form>
                                <!-- login form end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
<!-- Javascript -->
<script src="{{ asset('main/js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('main/js/vendors/blockit.min.js') }}"></script>
<script src="{{ asset('main/js/config-theme.js') }}"></script>
</body>

</html>
