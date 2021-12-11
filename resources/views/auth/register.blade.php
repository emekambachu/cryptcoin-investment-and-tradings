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

    <style>
        .invalid-feedback{
            color: #cc0000;
        }
    </style>

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
                                <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">
                                    Have an account? <a href="{{ route('login') }}">Login here</a></p>
                                <!-- login form begin -->
                                <form class="uk-grid uk-form" action="{{ route('register') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <label>Full name<span class="invalid-feedback">*</span></label>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                        <input class="uk-input uk-border-rounded @error('name') is-invalid @enderror"
                                               id="username" name="name" type="text" placeholder="Name" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label>Email <span class="invalid-feedback">*</span></label>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-envelope-open-text fa-sm"></span>
                                        <input class="@error('email') is-invalid @enderror uk-input uk-border-rounded"
                                               id="username" name="email" type="email" placeholder="Email" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label>Mobile</label>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-phone fa-sm"></span>
                                        <input class="@error('mobile') is-invalid @enderror uk-input uk-border-rounded"
                                               id="username" name="mobile" type="tel" placeholder="Mobile">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label>Image <span class="invalid-feedback">*</span></label>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-image fa-sm"></span>
                                        <input class="@error('image') is-invalid @enderror uk-input uk-border-rounded"
                                               id="username" name="image" type="file" required>
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label>Valid ID</label>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-image fa-sm"></span>
                                        <input class="@error('valid_id') is-invalid @enderror uk-input uk-border-rounded"
                                               id="username" name="valid_id" type="file">
                                        @error('valid_id')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label>Password <span class="invalid-feedback">*</span></label>
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

                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                    <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                    <input class="uk-input uk-border-rounded"
                                           type="password" name="password_confirmation"
                                           autocomplete="new-password" placeholder="Confirm Password" required>
                                    </div>

                                    <label>Primary crypto wallet</label>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-wallet fa-sm"></span>
                                    <input class="@error('wallet_address[0][address]') is-invalid @enderror uk-input uk-border-rounded"
                                           type="text" name="wallet_address[0][address]"
                                           value="{{ old('wallet_address[0][address]') }}"
                                           placeholder="Primary Crypto Wallet Name">
                                    @error('wallet_address[0][address]')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>

                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-wallet fa-sm"></span>
                                    <input class="input @error('wallet_address[0][address]') is-invalid @enderror uk-input uk-border-rounded"
                                           type="text" name="wallet_address[0][address]"
                                           value="{{ old('wallet_address[0][address]') }}"
                                           placeholder="Primary Crypto Wallet Address">
                                    @error('wallet_address[0][address]')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>

                                    <label>Secondary crypto wallet</label>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-wallet fa-sm"></span>
                                    <input class="input @error('wallet_address[1][name]') is-invalid @enderror uk-input uk-border-rounded"
                                           type="text" name="wallet_address[1][name]"
                                           value="{{ old('wallet_address[1][name]') }}"
                                           placeholder="Secondary Crypto Wallet Name">
                                    @error('wallet_address[1][name]')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>

                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-wallet fa-sm"></span>
                                    <input class="input @error('wallet_address[1][address]') is-invalid @enderror uk-input uk-border-rounded"
                                           type="text" name="wallet_address[1][address]"
                                           value="{{ old('wallet_address[1][address]') }}"
                                           placeholder="Secondary Crypto Wallet Address">
                                    @error('wallet_address[1][address]')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>

                                    <label>Country <span class="invalid-feedback">*</span></label>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-globe fa-sm"></span>
                                    <select class="uk-input uk-border-rounded" id="country" name="country" required></select>
                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>

                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-globe fa-sm"></span>
                                    <select class="uk-input uk-border-rounded" id="state" name="state" required></select>
                                    @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>

                                    <script language="javascript">
                                        populateCountries("country", "state");
                                        populateCountries("country2");
                                    </script>

                                    <label>Address</label>
                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-home fa-sm"></span>
                                    <input class="uk-input uk-border-rounded @error('address') is-invalid @enderror"
                                           type="text" name="address" placeholder="Address (Optional)"
                                           value="{{ old('address') }}">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>

                                    <div class="uk-margin-small uk-width-1-1 uk-inline">
                                        <span class="uk-form-icon uk-form-icon-flip fas fa-handshake fa-sm"></span>
                                    <label>Referer (Include your referer address)</label>
                                    <input class="uk-input uk-border-rounded @error('referer') is-invalid @enderror" type="text"
                                           name="referer" value="{{ old('referer') }}"
                                           placeholder="Your referer (Optional)">
                                    @error('referer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>

{{--                                    <div class="uk-margin-small uk-width-auto uk-text-small">--}}
{{--                                        <label><input class="uk-checkbox uk-border-rounded" type="checkbox">--}}
{{--                                            Remember me</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="uk-margin-small uk-width-expand uk-text-small">--}}
{{--                                        <label class="uk-align-right"><a class="uk-link-reset" href="#">--}}
{{--                                                Forgot password?</a></label>--}}
{{--                                    </div>--}}
                                    <div class="uk-margin-small uk-width-1-1">
                                        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Sign up</button>
                                    </div>
                                </form>
                                <!-- login form end -->
                                <div class="uk-margin-medium-bottom uk-text-center">
                                    <a class="" href="{{ url('/') }}"><i class="uk-margin-small-right"></i>Home</a>
{{--                                    <a class="" href=""><i class="uk-margin-small-right"></i>Forgot Password</a>--}}
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
<script src="{{ asset('main/js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('main/js/vendors/blockit.min.js') }}"></script>
<script src="{{ asset('main/js/config-theme.js') }}"></script>
</body>

</html>
