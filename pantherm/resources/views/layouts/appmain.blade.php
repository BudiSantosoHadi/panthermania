
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!--------- -->

    <!-- Scripts -->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('dropdown/css/style.css') }}">
    {{-- admin --}}
    <link rel="stylesheet" href="{{ asset('admin/admin2/vendor/fontawesome-free/css/all.js') }}">
    <link rel="stylesheet" href="{{ asset('dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/admin2/css/sb-admin-2.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/admin2/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/admin2/vendor/bootstrap/js/bootstrap.min.js') }}">
    <link rel="stylesheet" href="{{ asset('admin/admin2/vendor/fontawesome-free/js/all.js') }}">
    <link rel="stylesheet" href="{{ asset('admin/admin2/vendor/fontawesome-free/css/all.js') }}">

    <script src="{{ asset('admin/admin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/admin2/vendor/bootstrap/js/jquery.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/admin2/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('admin/admin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('tablem/fonts/icomoon/style.css') }} ">

    <link rel="stylesheet" href="{{ asset('tablem/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('tablem/css/bootstrap.min.css') }} ">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('tablem/css/style.css') }} ">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .btn-logout{
            background: red;
            color: #ffffff;
            font-size: 14px;
            font-weight: 600;
            padding: 9px;
            text-decoration: none;
            border-right: 3px solid rgb(7, 41, 230);
            box-shadow: 2px 3px 2px rgba(100, 100, 100, 0.114);
        }


        .label-selects{
            font-size: 17px;
            color: #031c7e;
            font-weight: 600;
        }
        .img {
            background-image: url({{ asset('img/background/bg-main.jpg') }});
            background-size: cover;
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
                width: 100% !important;
            }
            .emltext{
                font-size: 8px;
            }
            .img {
                display: block;
                background-size: cover;
                padding: 0;
                background-repeat: no-repeat;
                background-image: url({{ asset('img/background/bg-phone.jpg') }});

            }


        }

        th,
        tr,
        td {
            text-align: center;
            font-size: 16px;

        }

        thead.head-tbmember {
            background-color: rgba(4, 96, 201, 0.986);
            color: rgb(226, 226, 226);

        }

        footer {
            width: 100%;
            text-align: center;
            display: flex;
            justify-content: end;
            bottom: 0;
            padding: 10px 0 ;
            position: fixed;
        }
    </style>

</head>

<body>
    {{-- none display --}}
    <div style="display: none;" id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>



    <div id="app">

            <div id="wrapper">

                <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                    <li  class="nav-item bg-gradient-light pt-4" style="text-align: center;">
                        <img class="rounded-circle mb-2" width="70px" src="{{ asset('admin/admin2/img/undraw_profile.svg') }}"><br>
                        <span class=" mt-2 px-1 bg-success text-light shadow-lg rounded font-weight-400" style="font-size: 12px;">
                            {{ Auth::user()->name }}
                        </span>
                        <p class="emltext mt-0 px-1 text-light rounded font-weight" style="font-size: 14px; overflow: hidden;">
                            {{ Auth::user()->email }}
                        </p>
                    </li>
                    <hr class="sidebar-divider">
                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item {{ $active === 'dashboard' ? 'active' : '' }}" aria-checked="true">
                        <a class="nav-link" href="/">
                            <img src="{{ asset('img/logo/homes.png') }}" width="39px" height="39px" alt="" srcset="">
                            <span>Dashboard</span></a>
                    </li>


                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading text-secondary bg-light">

                        Akun Data

                    </div>

                    <li class="nav-item {{ $active === 'profiles' ? 'active' : '' }}" aria-checked="true">
                        <a class="nav-link" href="/profiles">
                            <img src="{{ asset('img/logo/userakun.png') }}" width="39px" height="39px" alt="" srcset="">
                            <span>Profile Akun</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading text-secondary bg-light">

                        Master Data

                    </div>

                    <!-- Nav Item - Dashboard -->
                    @if (Auth::user()->role_id == 1)
                    <!-- pbo -->
                    <li class="nav-item {{ $active === 'bpo.active' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Admin.index.bpo') }}">
                            <img src="{{ asset('img/logo/pbousers.png') }}" width="28px" height="28px" alt="" srcset="">
                            <span>BPO</span></a>
                    </li>
                    <!-- chapter -->
                    <li class="nav-item {{ $active === 'chapter.active' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Admin.index.chapter') }}">
                            <img src="{{ asset('img/logo/chapterlogo.png') }}" width="28px" height="28px" alt="" srcset="">
                            <span>Chapter</span></a>
                    </li>
                    <!-- carwil -->
                    <li class="nav-item {{ $active === 'korwil.active' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Admin.index.korwil') }}">
                            <img src="{{ asset('img/logo/carwillogo.png') }}" width="28px" height="28px" alt="" srcset="">
                            <span>Korwil</span></a>
                    </li>
                    @endif
                    <!--menu route Pbo.chapter.corwil --->

                    @if (Auth::user()->role_id == 2)
                    <!-- pbo -->
                    <li class="nav-item {{ $active === 'bpo.active' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('bpoAdmin.index.bpo') }}">
                            <img src="{{ asset('img/logo/pbousers.png') }}" width="28px" height="28px" alt="" srcset="">
                            <span>BPO</span></a>
                    </li>
                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>
                    @endif


                    @if (Auth::user()->role_id == 3)
                    <!-- chapter -->
                    <li class="nav-item {{ $active === 'chapter.active' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('chapterAdmin.index.chapter') }}">
                            <img src="{{ asset('img/logo/chapterlogo.png') }}" width="28px" height="28px" alt="" srcset="">
                            <span>Chapter</span></a>
                    </li>
                        <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">

                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>
                    @endif
                    @if (Auth::user()->role_id == 4)
                    <!-- carwil -->
                    <li class="nav-item {{ $active === 'korwil.active' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('korwilAdmin.index.korwil') }}">
                            <img src="{{ asset('img/logo/carwillogo.png') }}" width="28px" height="28px" alt="" srcset="">
                            <span>Korwil</span></a>
                    </li>
                        <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">

                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>
                    @endif
                    @if (Auth::user()->role_id == 1)
                    <!-- member -->
                    <li class="nav-item {{ $active === 'member.active' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Admin.index.member') }}">
                            <img src="{{ asset('img/logo/peoplelogo.png') }}" width="28px" height="28px" alt="" srcset="">
                            <span>Member</span></a>
                    </li>
                    <!-- user -->
                    <li class="nav-item {{ $active === 'user.active' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Admin.index.users') }}">
                            <img src="{{ asset('img/logo/userlogos.png') }}" width="28px" height="28px" alt="" srcset="">
                            <span>User</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading text-secondary bg-light">
                        Marchandise
                    </div>

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item {{ $active === 'products.active' ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('Admin.index.products') }}">
                            <img src="{{ asset('img/logo/brand-identity.png') }}" width="28px" height="28px" alt="" srcset="">
                            <span>Products</span></a>
                    </li>

                    <!-- Heading -->
                    <div class="sidebar-heading text-secondary bg-light">
                        FEED
                    </div>

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item {{ $active === 'agendak.active' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Admin.index.agendak') }}">
                            <img src="{{ asset('img/logo/timetable.png') }}" width="29" height="32"
                            alt="" srcset="">
                            <span>Agenda Kegiatan</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">



                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>
                    @endif

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>


                            <!-- Topbar Search -->
                            <form
                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">


                            </form>

                            <div class="group-form">

                                <a class="" href="/" style="float: right;">
                                    <img src="{{ asset('img/logo/logo.png') }}" width=" 110px" height="50px"><br>
                                </a>


                            </div>

                        </nav>
                        <!-- End of Topbar -->
                        <div class="container-fluid">
                            @yield('container')

                        </div>


                    </div>
                    <!-- End of Main Content -->


                <!-- End of Footer -->
            <!-- Footer -->
            <center>
                <footer class=" w-100 bg-white">
                    <div class="container-fluid">
                    <span class="">Copyright &copy PantherMania 2022</span>
                    </div>
                </footer>
            </center>

            </div>
            <!-- End of Content Wrapper -->

        </main>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin/admin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/admin2/vendor/bootstrap/js/jquery.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/admin2/vendor/jquery/jquery.min.map') }}"></script>
    <script src="{{ asset('admin/admin2/js/bootstrap.bundle.min.js') }}"></script>
    {{-- --}}
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{ asset('admin/admin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="{{ asset('admin/admin2/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="{{ asset('admin/admin2/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/admin2/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin/admin2/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('admin/admin2/js/demo/datatables-demo.js') }}"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    {{-- dropdown --}}
    <script src="{{ asset('dropdown/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dropdowm/js/popper.js') }}"></script>
    <script src="{{ asset('dropdown/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dropdown/js/main.js') }}"></script>

    {{-- tablem --}}
    <script src="{{ asset('tablem/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('tablem/js/popper.min.js') }}"></script>
    <script src="{{ asset('tablem/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tablem/js/main.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
            .create( document.querySelector( '#keterangan' ) )
            .catch( error => {
            console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#alamat_perusahaan' ) )
            .catch( error => {
            console.error( error );
            } );

            function previewImage()
            {
                const logo_image = document.querySelector('#logo_image');
                const imgpreview = document.querySelector('.img-preview');

                imgpreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(logo_image.files[0]);

                oFReader.onload = function(oFREvent)
                {
                    imgpreview.src = oFREvent.target.result;
                }
            }

            function previewImagePhotos_member()
            {
                const logo_photos_member = document.querySelector('#photos_members');
                const imgpreview = document.querySelector('.photos_members');

                imgpreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(logo_photos_member.files[0]);

                oFReader.onload = function(oFREvent)
                {
                    imgpreview.src = oFREvent.target.result;
                }
            }

            function previewImagePhotos_ktp()
            {
                const logo_photos_ktp = document.querySelector('#photos_ktp');
                const imgpreview = document.querySelector('.photos_ktp');

                imgpreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(logo_photos_ktp.files[0]);

                oFReader.onload = function(oFREvent)
                {
                    imgpreview.src = oFREvent.target.result;
                }
            }

            function previewImagePhotos_sim()
            {
                const logo_photos_sim = document.querySelector('#photos_sim');
                const imgpreview = document.querySelector('.photos_sim');

                imgpreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(logo_photos_sim.files[0]);

                oFReader.onload = function(oFREvent)
                {
                    imgpreview.src = oFREvent.target.result;
                }
            }

            function previewImagePhotos_bukti_transfer()
            {
                const logo_photos_bukti_tranfer = document.querySelector('#photos_bukti_tranfer');
                const imgpreview = document.querySelector('.photos_bukti_tranfer');

                imgpreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(logo_photos_bukti_tranfer.files[0]);

                oFReader.onload = function(oFREvent)
                {
                    imgpreview.src = oFREvent.target.result;
                }
            }


            function previewImagePhotos_stnk()
            {
                const photos_stnk = document.querySelector('#photos_stnk');
                const imgpreview = document.querySelector('.photos_stnk');

                imgpreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(photos_stnk.files[0]);

                oFReader.onload = function(oFREvent)
                {
                    imgpreview.src = oFREvent.target.result;
                }
            }

        </script>


</body>

</html>
