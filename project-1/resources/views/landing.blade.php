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
<body class="bg" style="background-image:url({{url('/')}}/assets/img/background.png)">

    <div class="container">

        <div class="row align-items-start mb-5">

            <div class="col-lg-6">
                    <img src="{{url('/')}}/assets/img/arestowhite.png" class="img-fluid" alt="Responsive image">
                    <img src="{{url('/')}}/assets/img/Sunmi2.png" class="img-fluid img" alt="Responsive image">
            </div>


            <div class="col-lg-6 align-self-center">

            <h2 class="title" style="color: #FFFFFF ">{!!$configs->landing_title!!}</h2>
            <p class="desc" style="color: #FFFFFF" >{!!$configs->landing_desc!!}</p>

                    <button onclick="gotocontact()" class="btn-contact" ><h5 style="color: #FFAE05;">CONTACT US</h5></button>
                    <!-- onclick berfungsi untuk menjalankan fungsi javascript saat tombol ditekan -->
            </div>

        </div>
        {{-- rows end --}}


    </div>
    {{-- container end --}}

    <div class="align-items-end footer-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 align-self-center text-center">
                    <img src="{{url('/')}}/assets/img/aresto.png" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-lg-4 text-center">

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

                <div class="col-lg-4 text-center align-self-center mb-3">

                    <div class="row align-items-center">

                        <div class="col-lg-12">
                            <h5><a href="{{url('/')}}/contact/finish">Terms Conditions</a></h5>
                        </div>
                        <div class="col-lg-12">
                            <h5><a href="{{url('/')}}/contact/privacy">Privacy Policy</a></h5>
                        </div>

                    </div>

                </div>

                <div class="col-lg-12 text-center">
                        <h6>Copyright ©2020 Avatar Solutions</h6>
                </div>

            </div>



        </div>





    <script>
    function gotocontact(){
        window.location.href="{{url('/')}}/contact";
    }
    </script>
    <!-- location href berfungsi untuk memindahkan halaman yang sesuai dengan link -->
</body>
</html>
