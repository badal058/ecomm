<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <style>
        a {text-decoration: none !important;}
        .login-page{
            height: 100vh;
            background-image: url(https://preview.colorlib.com/theme/bootstrap/login-form-20/images/xbg.jpg.pagespeed.ic.tiVxeakBSd.webp);
            background-size: cover;
            position: relative;
        }
        .login-page::after{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .login-wrap h3 {
            font-weight: 300;
            color: #fff;
        }
        .login-wrap{
            margin-top: 150px;
            position: relative;
            z-index: 1;
        }
        .form-control {
            background: transparent;
            border: none;
            height: 50px;
            color: #fff !important;
            border: 1px solid transparent;
            background: rgba(255,255,255,.08);
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            padding-right: 0.75rem;
            padding-left: 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            border-radius: 40px;
            padding-left: 20px;
            padding-right: 20px;
            -webkit-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }
        .form-control:hover, .form-control:focus {
            background: transparent;
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-color: rgba(255,255,255,.4);
        }
        .form-control::placeholder{
            color: rgba(255,255,255,.8);
        }
        .field-icon {
            position: absolute;
            top: 50%;
            right: 15px;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            color: rgba(255,255,255,.9);
            cursor: pointer;
        }
        .btn.btn-primary {
            background: #fbceb5 !important;
            border: 1px solid #fbceb5 !important;
            color: #000 !important;
        }
        .checkbox-wrap {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            user-select: none;
        }
        .checkbox-primary{
            color: #fbceb5;
        }
        .checkbox-wrap input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
        }
        .checkmark::after {
            content: "\f0c8";
            font-family: "FontAwesome";
            position: absolute;
            color: rgba(255,255,255,.1);
            font-size: 20px;
            margin-top: -4px;
            -webkit-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }
        .checkbox-wrap input:checked ~ .checkmark::after {
            display: block;
            content: "\f14a";
            font-family: "FontAwesome";   
        }
        .checkbox-primary input:checked ~ .checkmark::after{
            color: #fbceb5;
        }
    </style>
</head>
<body>
    @yield('containt')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <script>
        $(document).ready(function(){  
            $('.toggle-password').on('click', function(){
                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                input.attr('type','text');
                }else{
                input.attr('type','password');
                }
            });
        });
    </script>
</body>
</html>