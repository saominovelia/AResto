<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/bootstrap.min.css" />
    <!-- untuk mengambil css dari file lain, url digunakan untuk mengambil host dan folder base -->
</head>
<body>

    <div class="header" style="background-image:url({{url('/')}}/assets/img/gradient.png);height:88px;position:relative;">
        <div class="container">

            <!-- {{-- <nav style="background-image:url({{url('/')}}/assets/img/gradient.png);height:88px;position:relative;"> --}} -->
            <div class="row align-items-center">
                <div class="col-12 align-self-center mt-4">
                    <img src="{{url('/')}}/assets/img/arestowhite.png" class="logo-top" alt="">
                </div>
            </div>
            <!-- {{-- </nav> --}} -->
        </div>
    </div>

    <div class="container mb-5">

        <div class="row mb-3">
            <div class="col-lg-12 text-center">
                <p class="terms">Terms & Conditions</p>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <p class="text-L">{!!$configs->terms_condition!!}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="text-L">{!!$configs->terms_condition!!}</p>
            </div>
        </div>

    </div>


    <div class="align-items-end footer-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 align-self-center text-center mt-3">
                    <img src="{{url('/')}}/assets/img/aresto.png" class="img-fluid " alt="Responsive image">
                </div>

                <div class="col-lg-4 text-center mt-3">

                    <div class="row justify-content-center mb-3 mt-3">
                        <div class="col-3">
                            <a href="{!!$configs->fb_link!!}"><img src="{{url('/')}}/assets/img/facebook.png" alt=""></a>
                        </div>
                        <div class="col-3">
                            <a href="{!!$configs->ig_link!!}"><img src="{{url('/')}}/assets/img/instagram.png" alt=""></a>
                        </div>
                        <div class="col-3">
                            <a href="{!!$configs->wa_link!!}"><img src="{{url('/')}}/assets/img/whatsapp.png" alt=""></a>
                        </div>



                    </div>

                    <div class="row" >
                        <div class="col-lg-12">
                            <h5 style="text-align: center;">{!!$configs->address!!}</h5>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <h5 class="text-center">{!!$configs->phone_number!!}</h5>
                        </div>

                    </div>


                </div>

                <div class="col-lg-4 text-center align-self-center mb-3 mt-3">

                    <div class="row align-items-center">

                        <div class="col-lg-12">
                            <h5 class="text-terms">Terms Conditions</h5>
                        </div>
                        <div class="col-lg-12">
                        <h5 class="text-privacy"><a href="{{url('/')}}/contact/privacy">Privacy Policy</a></h5>
                        </div>

                    </div>

                </div>

                <div class="col-lg-12 text-center">
                        <h6 class="text-copyright">Copyright ©2020 Avatar Solutions</h6>
                </div>

            </div>



        </div>
    </div>



</body>
</html>
