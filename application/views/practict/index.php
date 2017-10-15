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
<body onload="return session(<?=$session;?>)">
<div id="wrapper" class="home-page">
    <!-- start header -->
    <header>
        <div class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url('');?>"><img src="js-css-font/img/loeeh.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?=base_url('');?>">Inicio</a></li>
                        <li id="i" class=""><a href="#" onclick="return Blogin();">Iniciar Sesión</a></li>
                        <li id="c" style="display: none;"><a href="#" onclick="return Bcerrar();">Cerrar Sesión</a></li>
                        <!-- <li><a href="about.html">About Us</a></li>
                         <li><a href="services.html">Services</a></li>
                         <li><a href="portfolio.html">Portfolio</a></li>
                         <li><a href="pricing.html">Pricing</a></li>
                         <li><a href="contact.html">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </div>


        <div class="navbar-wrapper">
            <div class="container-fluid">
                <nav class="navbar navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?=base_url('');?>" ><img src="js-css-font/img/loeeh.png" alt="logo"/></a>

                        </div>
                        <div id="navbar" class="navbar-collapse collapse">

                            <ul class="nav navbar-nav">
                                <li class="active"><a href="<?=base_url('');?>">Inicio</a></li>
                                <li class=""><a href="#" onclick="return Blogin();">Iniciar Sesión</a></li>
                                <li style="display: none;"><a href="#" onclick="return Bcerrar();">Cerrar Sesión</a></li>

                                <!-- <li class="active"><a href="index-2.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services.html">IT Services</a></li>
                                        <li><a href="#">Consultancy</a></li>
                                        <li><a href="#">Mobile Dev</a></li>
                                    </ul>
                                </li>

                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="contact.html">Contact</a></li> -->
                            </ul>



                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </header>
    <!-- end header -->
    <section id="banner">
            <!-- Slider -->
            <div id="main-slider" class="flexslider">
                <ul id="Obanner" class="slides">
                    <li>
                        <img src="js-css-font/img/slides/1.jpg" alt="" />
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="flex-caption">
                                        <img src="js-css-font/img/loeeh.png" alt="logo" style="width: 100px;"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="js-css-font/img/slides/2.jpg" alt="" />
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="flex-caption">
                                        <img src="js-css-font/img/loeeh.png" alt="logo" style="width: 100px;"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        <!-- end slider -->

    </section>

    <section id="login" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-wrap">
                        <h1>Inicio De Sesión</h1>
                        <form  role="form" action="javascript:;" id="login_Ajax" method="post"  autocomplete="off">
                            <div class="form-group">
                                <label for="usuario" class="sr-only">Usuario / Email</label>
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario / Email" value="">
                            </div>
                            <div class="form-group">
                                <label for="contraseña" class="sr-only">Contraseña</label>
                                <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Contraseña" value="">
                            </div>
                            <div class="checkbox">
                                <span class="character-checkbox" onclick="return showPassword();"></span>
                                <span class="label">Ver contraseña</span>
                            </div>
                            <input type="submit" id="login_submit" class="btn btn-custom btn-lg btn-block" value="Ingresar">
                            <a  onclick="return olvideC();" class="" href="#" style="color: #03b4c8; font-size: 15px;">¿Olvidaste la Contraseña?</a>
                        </form>
                        <hr>
                    </div>
                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->

        </div> <!-- /.container -->
    </section>

    <section id="callaction" class="callaction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div><h1>What We Do</h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus, vero mollitia velit ad consectetur. Alias, laborum excepturi nihil autem nemo numquam, ipsa architecto non, magni consequuntur quam.</div>

                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="skill-home"> <div class="skill-home-solid clearfix">
                        <div class="col-md-3 text-center">
                            <div class="box-content">
                                <span class="icons c1"><i class="icon-diamond icons"></i></span> <div class="box-area">
                                    <h3>Generic API's</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
                            </div></div>
                        <div class="col-md-3 text-center">
                            <div class="box-content">
                                <span class="icons c2"><i class="icon-settings icons"></i></span> <div class="box-area">
                                    <h3>Intermediates</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
                            </div></div>
                        <div class="col-md-3 text-center">
                            <div class="box-content">
                                <span class="icons c3"><i class="icon-note icons"></i></span> <div class="box-area">
                                    <h3>Peptide</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
                            </div></div>
                        <div class="col-md-3 text-center">
                            <div class="box-content">
                                <span class="icons c4"><i class="icon-people icons"></i></span> <div class="box-area">
                                    <h3>Synthetic</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                                </div></div>
                        </div></div></div>
            </div>


        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div><h2>Our Features</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="features-item">
                        <div class="features">
                            <div class="icon">
                                <i class="icon-map icons"></i>
                            </div>
                            <div class="features-content">
                                <h3>Premium Sliders Included</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quisquam id, odit dolore inventore.</p>
                            </div>
                        </div>
                        <div class="features">
                            <div class="icon">
                                <i class="icon-envelope-open icons"></i>
                            </div>
                            <div class="features-content">
                                <h3>100% Responsive Layout</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quisquam id, odit dolore inventore.</p>
                            </div>
                        </div>
                        <div class="features">
                            <div class="icon">
                                <i class="icon-badge icons"></i>
                            </div>
                            <div class="features-content">
                                <h3>Support System</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quisquam id, odit dolore inventore.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="js-css-font/img/img1.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="aboutUs" class="aboutUs">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><img src="js-css-font/img/img2.png" class="img-center" alt="" /></div>
                <div class="col-md-6">
                    <div><h2>Our Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus, vero mollitia velit ad consectetur. Alias, laborum excepturi nihil autem nemo numquam, ipsa architecto non, magni consequuntur quam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus, vero mollitia velit ad consectetur. Alias, laborum excepturi nihil autem nemo numquam, ipsa architecto non, magni consequuntur quam.</p>
                    </div>
                    <br/>
                </div>
            </div>

        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Our Contact</h5>
                        <address>
                            <strong>BioTex company Inc</strong><br>
                            JC Main Road, Near Silnile tower<br>
                            Pin-21542 NewYork US.</address>
                        <p>
                            <i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
                            <i class="icon-envelope-alt"></i> email@domainname.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Quick Links</h5>
                        <ul class="link-list">
                            <li><a href="#">Latest Events</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Latest posts</h5>
                        <ul class="link-list">
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                            <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <h5 class="widgetheading">Recent News</h5>
                        <ul class="link-list">
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                            <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>
                                <span>&copy; BioTex 2018 All right reserved. By </span><a href="http://webthemez.com/" target="_blank">WebThemez</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>



<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js-css-font/js/jquery.js"></script>

<script src="js-css-font/js/bootstrap.min.js"></script>
<script src="js-css-font/js/jquery.fancybox.pack.js"></script>
<script src="js-css-font/js/jquery.fancybox-media.js"></script>
<script src="js-css-font/js/portfolio/jquery.quicksand.js"></script>
<script src="js-css-font/js/portfolio/setting.js"></script>
<script src="js-css-font/js/jquery.flexslider.js"></script>
<script src="js-css-font/js/animate.js"></script>
<script src="js-css-font/js/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?=base_url('');?>js-css-font/js/login.js"></script>


<script src="<?=base_url('');?>js-css-font/js/swal2.js"></script>

<script type="text/javascript">

    function showPassword() {


        var key_attr = $('#contraseña').attr('type');

        if(key_attr != 'text') {

            $('.checkbox').addClass('show');
            $('#contraseña').attr('type', 'text');

        } else {

            $('.checkbox').removeClass('show');
            $('#contraseña').attr('type', 'password');

        }

    }

    function Blogin() {
        document.getElementById("aboutUs").style.display = "none";
        document.getElementById("features").style.display = "none";
        document.getElementById("content").style.display = "none";
        document.getElementById("callaction").style.display = "none";
        document.getElementById("Obanner").style.display = "none";
        document.getElementById("login").style.display = "block";
    }

    function Bcerrar() {
        window.location.href = "<?=base_url('cerrar')?>";
    }





    function  session(id) {
        if(id){
            document.getElementById("i").style.display = "none";
            document.getElementById("c").style.display = "block";
        }
        else{
            document.getElementById("c").style.display = "none";
            document.getElementById("i").style.display = "block";
        }
    }

</script>
</body>

<!-- Mirrored from webthemez.com/demo/biotex-pharma-industry-corporate-html-web-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 19:31:34 GMT -->
</html>