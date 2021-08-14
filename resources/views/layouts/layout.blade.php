<!DOCTYPE html>
<html lang="en">
<?php
echo header("Cache-Control:no-store,no-cache,must-revalidate,max-age=0");header("Cache-Control:post-check=0,pre-check=0", false);header("Pragma:no-cache");header('Content-Type:text/html');
?>
<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2020 11:29:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Hospital Admin Template - Hospital admin dashboard web app kit</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->

    <!-- Custom CSS -->

    <link href="{{url('dist/css/style.min.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-megna fixed-layout">
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Elite Hospital</p>
    </div>
</div>
@yield('content')
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->


<!--Custom JavaScript -->
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->

<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{url('nm/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{url('nm/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{url('dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{url('dist/js/wave.js')}}"></script>
<!--Menu sidebar -->
<script src="{{url('dist/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{url('nm/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{url('nm/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{url('dist/js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<script src="{{url('dist/js/pages/jasny-bootstrap.js')}}"></script>


</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/hospital/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2020 11:29:30 GMT -->
</html>
