<!doctype html>
<html class="no-js" lang="en">

<!-- login.html  03:24:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets2/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets2/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets2/css/style.css">
    <link rel="stylesheet" href="assets2/css/custom.css">

</head>

<body>

	<section class="account">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="account-contents" style="background: url('assets2/img/about/about1.jpg'); background-size: cover;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2>Login now</h2>
                                    <p>login to follow all activities in IMFEA</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                    <form method="POST" action="{{ route('login')}}">
                                        @csrf
                                        <div class="single-acc-field">
                                            <label for="email">{{ __('E-Mail Address') }}</label>
                                            <input type="email" id="email" @error('email') is-invalid @enderror">

                                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>

                                        <div class="single-acc-field">
                                            <label for="password">Password {{ __('Password') }}</label>
                                            <input type="password" id="password" @error('password') is-invalid @enderror">

                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="single-acc-field boxes">
                                            <input type="checkbox" id="checkbox">
                                            <label for="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me {{ __('Remember Me') }}</label>
                                        </div>
                                        <div class="single-acc-field">
                                            <button type="submit">{{ __('Login') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>


<!-- JS
============================================ -->


<!-- Plugins JS -->
<script src="assets2/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets2/js/main.js"></script>



</body>

<!-- login.html  03:24:52 GMT -->
</html>