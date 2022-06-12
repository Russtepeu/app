<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leruss</title>

    <!-- favicon -->
    <link rel="shortcut-icon" href="favicon.ico" text="image/x-icon">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

    <!-- bootstrap 4 css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- icon style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- css file -->
    <link rel="stylesheet" href={{asset('css/style.css')}}>
</head>

<body>

    <!-- header section -->
    <div class="container-fluid bg-light d-flex align-items-center mb-1 py-4 px-2" id="home" style="min-height: 50px;">
        <div class="container">
            <div class="row align-item-center">
                <div class="col-lg-7 hero-text text-center text-lg-left mt-4">

                    <h3 class="text-red-400 font-weight-normal mb-3">Hi, I'm</h3>
                    <h1 class="display-3 text-uppercase text-black mb-2" style="-webkit-text-stroke:4px rgb(10, 10, 10)"
                        ;>
                        Tepeu diffo russel</h1>
                    <h1 class="typed-text-output d-inline font-weight-light text-black"></h1>
                    <div class="typed-text d-none">
                        Teacher, Web Developer, BackEnd Developper, Blogger
                    </div>
                    <!-- button -->
                    <div class="d-flex align-items-center justify-center justify-center-lg-start pt-5">
                        <a href="" class="btn btn-white  mr-4">about</a>
                        <a href="{{route('blog.index')}}" class="btn btn-white mr-4">Blog</a>
                        <a href="" class="btn btn-white ">contact</a>
                    </div>
                    <div class="ml-5 mt-4">
                        <a href="https://web.facebook.com/russ.tepeu"><i class="fa-brands fa-facebook-f fa-1x mr-5"
                                style="color: skyblue"></i></a>
                        <a href="https://www.instagram.com/lerusstepeu/"><i
                                class="fa-brands fa-instagram fa-1x mr-5 "></i></a>
                        <a href="https://twitter.com/russel_tepeu"><i class="fa-brands fa-twitter fa-1x mr-5"
                                style="color: cornflowerblue"></i></a>
                        <i class="fa-brands fa-github fa-1x mr-5"></i>
                        <i class="fa-brands fa-linkedin-in fa-1x"></i>
                    </div>
                </div>

                <!-- image -->
                <div class="about-img col-lg-6 px-8 pl-lg-0 pb-5 pb-lg-4 ">
                    <img src="{{asset('images/TEPEU.jpg')}}" alt="" class="img-fluid w-100 rounded-circle shadow-sm">
                </div>

            </div>
        </div>
    </div>

    <!-- end header -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src={{asset('js/main.js')}}></script>
</body>

</html>