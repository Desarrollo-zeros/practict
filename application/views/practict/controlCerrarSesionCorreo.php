<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Practict</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="https://simpleteamgroup.com/" />

    <link rel="apple-touch-icon" sizes="180x180" href="js-css-font/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="js-css-font/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="js-css-font/fav/favicon-16x16.png">
    <link rel="manifest" href="js-css-font/fav/manifest.json">
    <link rel="mask-icon" href="js-css-font/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- css -->
    <link href="js-css-font/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="js-css-font/simple-line-icons/css/simple-line-icons.css">
    <link href="js-css-font/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="js-css-font/css/flexslider.css" rel="stylesheet" />
    <link href="js-css-font/css/style.css" rel="stylesheet" />


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<head>
    <style>
        /* Center the loader */
        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from { bottom:-100px; opacity:0 }
            to { bottom:0px; opacity:1 }
        }

        @keyframes animatebottom {
            from{ bottom:-100px; opacity:0 }
            to{ bottom:0; opacity:1 }
        }

        #myDiv {
            display: none;
            text-align: center;
        }
    </style>

    <script src="<?=base_url('');?>js-css-font/js/swal2.js"></script>
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
<script></script>
</div>

<script>
    var myVar;
    var r;
    function myFunction() {
        myVar = setTimeout(showPage, 5000);
    }

    function redirect() {
        window.location.href =  "<?=base_url('');?>";
    }
    
    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
        swal("Sesiones Cerradas","En hora buena haz protegido tu cuenta","success");
        r = setTimeout(redirect, 3000);
    }
</script>

</body>
</html>