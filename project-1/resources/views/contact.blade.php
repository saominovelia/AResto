<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/bootstrap.min.css" />
    <!-- untuk mengambil css dari file lain, url digunakan untuk mengambil host dan folder base -->
</head>
<body>

        <div class="row all" style="position:relative;">

            <div class="col-6 d-sm-none d-md-none d-none d-lg-block d-xl-block" style="background-image:url({{url('/')}}/assets/img/background.png)">
                <div class="container">
                    <img src="{{url('/')}}/assets/img/arestowhite.png" class="img-fluid p-3" alt="Responsive image">
                    <img src="{{url('/')}}/assets/img/Sunmi2.png" class="img-fluid img p-3" alt="Responsive image">
                </div>
            </div>

            {{-- form ke-1 --}}

            <div class="col-6 d-sm-none d-md-none d-none d-lg-block d-xl-block">

                <div class="container background-contact">

                    <div class="row contact-text mt-5">
                        <legend>Contact Us</legend>
                    </div>

                    <form action='contact/insert' method='post'>
                    {{csrf_field()}} <!--token laravel itu wajib untuk form agar kekirim -->

                        <div class="row contact-text">
                            <div class="form-group col-6">
                                <label >Name</label>
                                <input class="form-control" type="text" name="name"  />
                            </div>
                            <div class="form-group col-6">
                                <label>Business Name</label>
                                <input class="form-control" type="text" name="business_name"  />
                            </div>
                        </div>

                        <div class="row contact-text">
                            <div class="form-group col-6">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email"/>
                            </div>
                            <div class="form-group col-6">
                                <label>website</label>
                                <input class="form-control" type="text" name="website"/>
                            </div>
                        </div>

                        <div class="row contact-text">
                            <div class="form-group col-6">
                                <label>Phone</label>
                                <input class="form-control" type="tel" name="phone"  />
                            </div>
                        </div>

                        <div class="row contact-text">
                            <div class="form-group col-12">
                                <label>Comment</label>
                                <textarea name="comment" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row justify-content-end contact-text">
                            <div class="col-4 ">
                                <input class="form-control btn-submit" type="submit" name="submit" value="Submit" />
                            </div>
                        </div>

                    </form>

                </div>

            </div>

            {{-- form ke-2 --}}

            <div class="col-12  d-xl-none d-lg-none">

            <div class="header" style="background-image:url({{url('/')}}/assets/img/gradient.png);height:88px;position:relative;width:100%">
                <div class="container">


            <div class="row align-items-center">
                <div class="col-12 align-self-center mt-4">
                    <img src="{{url('/')}}/assets/img/arestowhite.png" class="logo-top" alt="">
                </div>
            </div>

        </div>
    </div>

                <div class="container background-contact">

                    <div class="row contact-text mt-5 ml-1">
                        <legend>Contact Us</legend>
                    </div>

                    <form action='contact/insert' method='post'>
                    {{csrf_field()}} <!--token laravel itu wajib untuk form agar kekirim -->

                    <div class="row contact-text">
                        <div class="form-group col-12">
                            <label >Name</label>
                            <input class="form-control" type="text" name="name"  />
                        </div>
                    </div>

                    <div class="row contact-text">
                        <div class="form-group col-12">
                            <label>Business Name</label>
                            <input class="form-control" type="text" name="business_name"  />
                        </div>
                    </div>

                    <div class="row contact-text">
                        <div class="form-group col-12">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email"/>
                        </div>
                    </div>

                    <div class="row contact-text">
                        <div class="form-group col-12">
                            <label>website</label>
                            <input class="form-control" type="text" name="website"/>
                        </div>
                    </div>

                    <div class="row contact-text">
                        <div class="form-group col-12">
                            <label>Phone</label>
                            <input class="form-control" type="tel" name="phone"  />
                        </div>
                    </div>

                    <div class="row contact-text">
                        <div class="form-group col-12">
                            <label>Comment</label>
                            <textarea name="comment" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="row justify-content-end contact-text">
                        <div class="col-4 ">
                            <input class="form-control btn-submit" type="submit" name="submit" value="Submit" />
                        </div>
                    </div>

                    </form>

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
                                <h5 class="text-terms"><a href="{{url('/')}}/contact/finish">Terms Conditions</a></h5>
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
