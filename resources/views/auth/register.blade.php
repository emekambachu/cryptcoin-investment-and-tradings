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
    <title>Sign in - Cryptcoin Investment and Tradings</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{ asset('main/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('main/css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('main/css/style.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{ asset('fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{ asset('fonts/inter-v2-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/inter-v2-latin-500.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/inter-v2-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="{{ asset('logoonly.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('logoonly.png') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('main/css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
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
                <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url({{ asset('main/img/in-signin-image.jpg') }});">
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
                                <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">
                                    Don't have an account? <a href="#">Register here</a></p>
                                <!-- login form begin -->
                                <form class="uk-grid uk-form" action="" method="post">
                                    @csrf
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="username" value=""
                                               type="text" placeholder="Username">
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                        <input class="uk-input uk-border-rounded" id="password" value="" type="password" placeholder="Password">
                                    </div>
                                    <div class="uk-margin-small uk-width-auto uk-text-small">
                                        <label><input class="uk-checkbox uk-border-rounded" type="checkbox"> Remember me</label>
                                    </div>
                                    <div class="uk-margin-small uk-width-expand uk-text-small">
                                        <label class="uk-align-right"><a class="uk-link-reset" href="#">Forgot password?</a></label>
                                    </div>
                                    <div class="uk-margin-small uk-width-1-1">
                                        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Sign in</button>
                                    </div>
                                </form>
                                <!-- login form end -->
                                <p class="uk-heading-line uk-text-center"><span>Or sign in with</span></p>
                                <div class="uk-margin-medium-bottom uk-text-center">
                                    <a class="uk-button uk-button-small uk-border-rounded in-brand-google" href="#"><i class="fab fa-google uk-margin-small-right"></i>Google</a>
                                    <a class="uk-button uk-button-small uk-border-rounded in-brand-facebook" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
                                </div>
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
<script src="{{ asset('js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('js/vendors/blockit.min.js') }}"></script>
<script src="{{ asset('js/config-theme.js') }}"></script>
</body>

</html>
