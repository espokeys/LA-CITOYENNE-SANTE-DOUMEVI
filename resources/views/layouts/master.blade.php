<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ secure_asset('assets/images/logo2.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Doumevi</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ secure_asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/templatemo-finance-business.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/owl.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;800&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



    <!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
    <style>
        .sub-header {
            position: relative;
            /* pour le menu positionné */
        }

        .sub-header .navbar {
            height: 100%;
        }

        .service-card {
            transition: transform 1.0s ease, box-shadow 1.0s ease;
        }

        .service-card:hover {
            transform: translateY(-25px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2) !important;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            position: relative;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-left: 5px solid #28a745;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-left: 5px solid #dc3545;
        }

        .alert-dismissible .btn-close {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none;
            border: none;
            font-size: 20px;
            line-height: 1;
            color: #000;
            cursor: pointer;
        }

        .footer-item img {
            max-width: 180px;
            height: auto;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    @include('layouts.partials.topbar')

    @yield('content')

    @include('layouts.partials.footer')

    <!--

    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
              Copyright &copy; 2020 Financial Business Co., Ltd. - Design:
              <a
                rel="nofollow noopener"
                href="https://templatemo.com"
                target="_blank"
                >TemplateMo</a
              ><br />
              Distributed By:
              <a
                rel="nofollow noopener"
                href="https://themewagon.com"
                target="_blank"
                >ThemeWagon</a
              >
            </p>
          </div>
        </div>
      </div>
    </div>
 -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ secure_asset('assets/js/custom.js') }}"></script>
    <script src="{{ secure_asset('assets/js/owl.js') }}"></script>
    <script src="{{ secure_asset('assets/js/slick.js') }}"></script>
    <script src="{{ secure_asset('assets/js/accordions.js') }}"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) {
            //declaring the array outside of the
            if (!cleared[t.id]) {
                // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ""; // with more chance of typos
                t.style.color = "#fff";
            }
        }
    </script>
</body>


</html>
