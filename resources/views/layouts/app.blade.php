<!DOCTYPE html>
<html lang="en">
<head>
    <title>Аторизация/регистрация</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="https://forum.pad-com.ru/src/images/sasdlogo.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../assets/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../assets/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../assets/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../css/util.css">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!--===============================================================================================-->
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
@notifyCss
</head>
<body>
{!! Toastr::message() !!}
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="../images/img-01.png" alt="IMG">
            </div>
             @yield('form');
        </div>
    </div>
</div>

<!--===============================================================================================-->
<x:notify-messages />
@notifyJs
<script src="../assets/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../assets/bootstrap/js/popper.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../assets/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../assets/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<scritpt src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></scritpt>
</body>
</html>
