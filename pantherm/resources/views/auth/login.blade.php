
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Panther Mania</title>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- framework bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- datepicker bootstrap -->
    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>


</head>

<body class="img container js-fullheight" style="">


    <style>
        .img {
            background-image: url({{ asset('img/background/bg-main.jpg') }});
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            z-index: 100;

        }

        .modal-box {
            font-family: 'Noto Sans JP', sans-serif;
        }

        .modal-box .show-modal {
            color: rgba(255, 255, 255, 0.7);
            background: linear-gradient(#14525c, #16444f);
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
            padding: 10px 20px 11px;
            margin: 80px auto 0;
            border: none;
            outline: none;
            display: block;
            border-radius: 50px;
            transition: all 0.3s ease 0s;
        }

        .modal-box .show-modal:hover,
        .modal-box .show-modal:focus {
            color: #fff;
            box-shadow: 7px 7px rgba(0, 0, 05, 0.1);
            outline: none;
        }

        .modal-backdrop.in {
            opacity: 0;
        }

        .modal-box .modal-dialog {
            width: 400px;
            margin: 100px auto 0;
        }

        .modal.fade .modal-dialog {
            transform-origin: top center;
            transform: scaleY(0);
        }

        .modal.in .modal-dialog {
            transform: scaleY(1);
        }

        .modal-box .modal-dialog .modal-content {
            color: #555;
            background: linear-gradient(45deg, #fff, #fcfcfc, #fff);
            text-align: center;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .modal-box .modal-dialog .modal-content .close {
            color: rgba(255, 255, 255, 0.7);
            background-color: #11586a;
            font-size: 16px;
            font-weight: 600;
            text-shadow: none;
            line-height: 15px;
            height: 28px;
            width: 28px;
            border-radius: 50%;
            overflow: hidden;
            opacity: 1;
            position: absolute;
            left: auto;
            right: 5px;
            top: 5px;
            z-index: 1;
            transition: all 0.3s;
        }

        .modal-box .modal-dialog .modal-content .close:hover {
            color: #fff;
        }

        .modal-box .modal-dialog .modal-content .close:focus {
            outline: none;
        }

        .modal-box .modal-dialog .modal-content .modal-body {
            padding: 0 30px !important;
        }

        .modal-box .modal-dialog .modal-content .modal-body .modal-icon {
            color: #fff;
            background: linear-gradient(#14525c, #16444f);
            font-size: 40px;
            line-height: 100px;
            width: 100px;
            height: 100px;
            margin: -50px auto 35px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 50%;
        }

        .modal-box .modal-dialog .modal-content .modal-body .title {
            font-size: 20px;
            font-weight: 600;
            margin: 0 0 30px;
        }

        .modal-box .modal-dialog .modal-content .modal-body .title span {
            font-size: 16px;
            font-weight: 400;
        }

        .modal-box .modal-dialog .modal-content .modal-body .form-control {
            background-color: #e7e7e7;
            font-size: 15px;
            font-weight: 500;
            text-align: center;
            height: 45px;
            border: 2px solid #e7e7e7;
            border-radius: 50px;
            box-shadow: none;
        }

        .modal-box .modal-dialog .modal-content .modal-body .form-control:focus {
            background-color: #fff;
            box-shadow: none;
        }

        .modal-box .modal-dialog .modal-content .modal-body .btn {
            color: #fff;
            background: linear-gradient(#14525c, #16444f);
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            width: 100%;
            padding: 12px 10px 13px;
            margin: 25px 0 35px;
            border: none;
            border-radius: 50px;
            transition: all 0.3s ease 0s;
        }

        .modal-box .modal-dialog .modal-content .modal-body .btn:hover {
            text-shadow: 3px 3px rgba(0, 0, 0, 0.4);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .modal-box .modal-dialog .modal-content .modal-body .btn:focus {
            outline: none;
        }

        .modal-box .modal-dialog .modal-content .modal-footer {
            background-color: #f5f5f5;
            text-align: center;
        }

        .modal-box .modal-dialog .modal-content .modal-footer ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .modal-box .modal-dialog .modal-content .modal-footer ul li {
            display: inline-block;
            padding: 0 10px;
        }

        .modal-box .modal-dialog .modal-content .modal-footer ul li:first-child {
            border-right: 1px solid #999;
        }

        .modal-box .modal-dialog .modal-content .modal-footer ul li a {
            color: #555;
            font-weight: 500;
            transition: all 0.3s ease 0s;
        }

        .modal-box .modal-dialog .modal-content .modal-footer ul li a:hover {
            color: #0094B9;
        }

        @media only screen and (max-width: 576px) {
            .modal-dialog {
                width: 90% !important;
            }

            .img {
                display: block;
                background-size: cover;
                padding: 0;
                background-repeat: no-repeat;
                background-image: url({{ asset('img/background/bg-phone.jpg') }});

            }


        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class=" col " style=" margin-top:480px;">
                <div class="modal-box">
                    <!-- Button trigger modal -->
                    <button type="button" class=" btn btn-secondary btn-lg show-modal" data-toggle="modal"
                        data-target="#myModal" style="padding: 13px 46px">
                        Login
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content clearfix">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                                <div class="modal-content clearfix">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <div class="modal-icon">
                                            <img src="{{ asset('img/logo/logo.png') }}" width="70px" height="60px">
                                        </div>
                                        <h3 class="title">Hello User! <span>Welcome back :)</span></h3>
                                        <div class="login-wrap p-4">

                                            <form class="p-1" method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="form-group">
                                                    <input type="text"
                                                        class="form-control @error('email')
                                                            is-invalid
                                                        @enderror"
                                                        name="email" value="{{ old('email') }}" placeholder="example@gmail.com" autofocus required>
                                                </div>
                                                <div class="form-group">

                                                    <input class="form-control" id="password-field" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password"
                                                        placeholder="Password" required>

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <br>
                                                    <p>Show Your Password</p>
                                                    <span toggle="#password-field"
                                                        class="fa fa-fw fa-eye field-icon toggle-password">
                                                    </span>
                                                </div>


                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="form-control btn btn-primary submit px-3">Sign
                                                In</button>
                                        </div>
                                        <div class="form-group d-md-flex">
                                            <div class="w-50">
                                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                                    <input type="checkbox" name="remember" id="remember"
                                                        {{ old('remember') ? 'checked' : '' }}>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('login-form/js/jquery.min.js') }}"></script>
        <script src="{{ asset('login-form/js/popper.js') }}"></script>
        <script src="{{ asset('login-form/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('login-form/js/main.js') }}"></script>


</body>

</html>
