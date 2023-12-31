<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up | Sencare</title>
<link rel="apple-touch-icon" sizes="57x57" href="frontend/assets/images/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="frontend/assets/images/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="frontend/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="frontend/assets/images/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="frontend/assets/images/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="frontend/assets/images/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="frontend/assets/images/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="frontend/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="frontend/assets/images/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="frontend/assets/images/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="frontend/assets/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="frontend/assets/images/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="frontend/assets/images/favicons/favicon-16x16.png">
<link rel="manifest" href="frontend/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="frontend/assets/images/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="frontend/assets/css/style.css">
<link rel="stylesheet" href="frontend/assets/css/mobile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="frontend/assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
</head>
<body>
 <!-- SIGN UP FORM SECTION -->
<section class="login-form sign-up-form d-flex align-items-center">
    <div class="container">
        <div class="login-form-title text-center">
            <figure class="login-page-logo">
                <a class="navbar-brand mr-0 p-0" href="index.html"><img src="./assets/images/sencare-logo2.png" alt="" class="img-fluid"></a>
            </figure>
            <h2>Create Your FREE Account</h2>
            {{--  show error  --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        </div>
        <div class="login-form-box">
            <div class="login-card">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input  class="input-field form-control" type="text" name="name" value="{{old('name')}}"   id="exampleInputName1" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input  class="input-field form-control" type="email" name="email" value="{{old('email')}}" id="exampleInputEmail1" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input  class="input-field form-control" type="password" name="password"  id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input  class="input-field form-control" type="password" name="password_confirmation"  id="exampleInputPassword1" placeholder="Confirm Password" required>
                    </div>
                    {{-- <div class="form-group">
                        <select id="inputNoncorehub" class="input-field form-control select-option">
                        <option selected>Please, choose the first interaction you remember.</option>
                        <option value="online_community">Online community (e.g. GitHub, Reddit, Stack Overflow, Hacker News, ...)</option>
                            <option value="article">Website article, blog (not ours)</option>
                            <option value="review_sites">Review site (e.g. G2, Capterra, ...)</option>
                            <option value="search">Search engine (e.g. Google, Bing, ...)</option>
                            <option value="mobile_app">App store listing (App Store, Google Play)</option>
                            <option value="social">Social media (e.g. Twitter / Quora / Facebook / LinkedIn...)</option>
                            <option value="youtube">YouTube</option>
                            <option value="friend">From a friend, colleague, ...</option>
                            <option value="message_groups">Message group (e.g. Discord, Slack, Telegram, ...)</option>
                            <option value="events">Event (e.g. workshop, conference or meet up)</option>
                            <option value="podcast">Podcast</option>
                            <option value="other">Other</option>
                        </select>
                    </div> --}}
                    <div>
                        <label class="font-weight-normal mb-md-4 mb-3" style="cursor: pointer;">
                        <input class="checkbox" type="checkbox">
                        Inform me about new features and updates (max. twice a month)
                        </label>
                    </div>
                    <button type="submit" class="hover-effect btn btn-primary mb-0">Register Now</button>
                </form>
            </div>
            <div class="join-now-outer text-center">
                <a href="{{ route('login') }}">Already have an account?</a>
            </div>
        </div>   
    </div>
</section>
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="frontend/assets/js/animations.js"></script>
    <script src="frontend/assets/js/bootstrap.min.js"></script>
    <script src="frontend/assets/js/jquery-3.6.0.min.js"></script>
    <script src="frontend/assets/js/popper.min.js"></script>
    <script src="frontend/assets/js/custom-script.js"></script>
    <script src="frontend/assets/js/owl.carousel.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="frontend/assets/js/text-animations.js"></script>
    <script src="frontend/assets/js/carousel.js"></script>
</body>
</html>
    