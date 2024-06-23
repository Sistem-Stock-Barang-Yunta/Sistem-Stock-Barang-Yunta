<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>register &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="assets/img/stisla-fill.svg" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="text-center">Register</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="/register" class="needs-validation" novalidate="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input id="name" type="text" class="form-control" name="name"
                                            id="exampleInputEmail" aria-describedby="emailHelp" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your username
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            id="exampleInputEmail" aria-describedby="emailHelp" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control" name="password"
                                            id="exampleInputPassword" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password_confirmation</label>
                                        <input id="password" type="password" class="form-control"
                                            name="password_confirmation" id="exampleInputPassword" required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your password_confirmation
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="role">Pilih Jenis </label>
                                        <select class="form-control selectric" id="role" name="role">
                                            <option value="admin">Admin</option>
                                            <option value="staf">Staf</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input"
                                                tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Register
                                        </button>
                                    </div>
                                    <div class="mt-5 text-muted text-center">
                                        Sudah punya akun? <a href="{{ route('login') }}">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="assets/modules/jquery.min.js"></script>
    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(45deg, #49a09d, #5f2c82);
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            color: #333;
        }
        .card-header {
            background-color: #28a745;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 10px;
        }
        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #218838;
            border-color: #218838;
        }
        label {
            color: #fff;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-color: #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #28a745;
        }
        select {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-color: #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
        }
        select:focus {
            outline: none;
            border-color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>{{ __('Register') }}</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <label for="role">{{ __('Role') }}</label>
                                <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" required>
                                    <option value="admin">{{ __('Admin') }}</option>
                                    <option value="staff">{{ __('Staff') }}</option>
                                </select>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
>>>>>>> origin/FajarAngga
