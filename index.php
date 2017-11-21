<?php
session_start();
extract($_POST);
$con=mysqli_connect('localhost','root','','saferental');


if(isset($_GET['qwi'])=="r")
{
$ps="
            <div class='alert alert-warning alert-dismissable' style='margin-top:20px'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
            <h4><i class='icon glyphicon glyphicon-ok'></i> Please Check Email !</h4> Username and Password have been sent
            </div>
        ";
        echo $ps; 
}

if(isset($login)){
    if(mysqli_num_rows(mysqli_query($con,"select id from admin where username='$username' and password='$password'")))
    {
        $tipe=mysqli_fetch_row(mysqli_query($con,"select id from admin where username='$username' and password='$password'"));
        $_SESSION['kosong']=$tipe[0];
        header("location:./");
    }
    else
        $ps="
            <div class='alert alert-warning alert-dismissable' style='margin-top:20px'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
            <h4><i class='icon glyphicon glyphicon-remove'></i> Wrong !</h4> Wrong username or password :(
            </div>
        ";
        echo $ps;
}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Safe Rental</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="Rental Mobil, Mobil, Rental Mobil Makassar">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/i-bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/i-plugins.css" />
        <link rel="stylesheet" href="assets/css/i-style.css">
        <link rel="stylesheet" href="assets/css/i-responsive.css" />
        <link rel="stylesheet" href="assets/css/l-style.css">
        <link rel="shortcut icon" href="assets/logo.ico">
        <script src="assets/js/vendor/i-modernizr-2.8.3-respond-1.4.2.min.js"></script>


    </head>
    <body data-spy="scroll" data-target="#main-navbar">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div id="menubar" class="main-menu">	
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="assets/images/logo1.png" alt="" /></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#home">Beranda<span class="sr-only">(current)</span></a></li>
                            <li><a href="#our-feature">Layanan</a></li>
                            <li><a href="#our-portfolio">Tarif Rental</a></li>
                            <li><a href="#works-area">Cara Pesan</a></li>
                            <li><a href="#our-team">Tentang Kami</a></li>
                            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#login-signup-modal">Login</a></li>
<!--
                            <div class="contact-number text-right"> 
                                <ul><li class="">(+628125375XXXX)</li></ul>
                            </div>
-->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
        <!--Home page style-->



        <!--Login, Signup, Forgot Password Modal -->
                <div id="login-signup-modal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
            
                <!-- login modal content -->
                <div class="modal-content" id="login-modal-content">
                
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Login Now!</h4>
              </div>
                
                <div class="modal-body">
                  <form method="post" id="Login-Form" role="form">
                  
                    <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="email" id="email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email" >
                        </div>                      
                    </div>
                    
                    
                    <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="login-password" type="password" class="form-control input-lg" placeholder="Enter Password" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup">
                        </div>                      
                    </div>
                    
                    <div class="checkbox">
                      <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                      <button type="submit" class="btn btn-success btn-block btn-lg">LOGIN</button>
                  </form>
                </div>
                
                <div class="modal-footer">
                  <p>
                  <a id="FPModal" href="javascript:void(0)">Forgot Password?</a> | 
                  <a id="signupModal" href="javascript:void(0)">Register Here!</a>
                  </p>
                </div>
                
               </div>
                <!-- login modal content -->
                
                <!-- signup modal content -->
                <div class="modal-content" id="signup-modal-content">
                
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Signup Now!</h4>
              </div>
                        
               <div class="modal-body">
                  <form method="post" id="Signin-Form" role="form">
                  
                    <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="email" id="email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email">
                        </div>                     
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="passwd" type="password" class="form-control input-lg" placeholder="Enter Password" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup">
                        </div>                      
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="confirm-passwd" type="password" class="form-control input-lg" placeholder="Retype Password" required data-parsley-equalto="#passwd" data-parsley-trigger="keyup">
                        </div>                      
                    </div>
                    
                    
                      <button type="submit" class="btn btn-success btn-block btn-lg">CREATE ACCOUNT!</button>
                  </form>
                </div>
                
                <div class="modal-footer">
                  <p>Already a Member ? <a id="loginModal" href="javascript:void(0)">Login Here!</a></p>
                </div>
                
              </div>
                <!-- signup modal content -->
                
                <!-- forgot password content -->
                 <div class="modal-content" id="forgot-password-modal-content">
                
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Recover Password!</h4>
              </div>
                
                <div class="modal-body">
                  <form method="post" id="Forgot-Password-Form" role="form">
                  
                    <div class="form-group">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="email" id="email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email">
                        </div>                     
                    </div>
                                
                    <button type="submit" class="btn btn-success btn-block btn-lg">
                      <span class="glyphicon glyphicon-send"></span> SUBMIT
                    </button>
                  </form>
                </div>
                
                <div class="modal-footer">
                  <p>Remember Password ? <a id="loginModal1" href="javascript:void(0)">Login Here!</a></p>
                </div>
                
              </div>        
                <!-- forgot password content -->

                
            
                <!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
                </div>
                <!--Login, Signup, Forgot Password Modal -->






        <header id="home" class="sections">
            <div class="container">

                <div class="row">
                    <div class="homepage-style">

                        <div class="top-arrow hidden-xs text-center"><img src="assets/images/top-arrow.png" alt="" /></div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="unique-apps">
                                <h3>SafeRental<br>Rental Mobil Makassar</h3>
                                <p>
                                    

                                SafeRental – adalah Perusahaan Jasa Sewa Mobil Murah di kota Makassar. Kami Hadir menjadi pilihan terbaik dalam solusi transportasi anda.<br>

                                Kami memiliki tenaga sopir yang ramah dan sangat terampil di bidangnya, membuat Anda akan selalu merasa nyaman & tidak perlu mencemaskan rute dan jalan yang akan dilalui.<Br>

                                <i>SafeRental</i> Rental Mobil Makassar juga menetapkan harga yang sangat bersahabat. Semua itu tidak lain agar kami SafeRental bisa menjadi yang terbaik untuk melayani Anda dan selalu menjadi solusi tepat untuk transportasi sewa mobil Anda.

                                </p>

                                <div class="home-btn"><button class="btn btn-primary">Lihat Selengkapnya<span><i class="fa fa-paper-plane"></i></span></button></div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="slider-area">

                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>

                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">

                                        <div class="item active">
                                            <img src="assets/images/slider-img.png" alt="" />
                                        </div>

                                        <div class="item">
                                            <img src="assets/images/slider-2.png" alt="" />
                                        </div>

                                        <div class="item">
                                            <img src="assets/images/slider-3.png" alt="" />
                                        </div>

                                        <div class="item">
                                            <img src="assets/images/slider-4.png" alt="" />
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>	
                </div>

            </div>

        </header>
        <!-- Sections -->

        <section id="our-feature" class="sections">
            <div class="container">
                <div class="heading">
                    <div class="title text-center arrow-left">
                        <img class="hidden-xs" src="assets/images/left-arrow.png" alt="" />

                        <h4 class="">Kenapa Memilih <i>SafeRental</i> ?</h4>
                    </div>
                </div>

                <div class="feature-wrapper">
                    <div class="row text-center">

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="features-content active"> 
                                <img src="assets/images/projects/1.png" alt="" />
                                <h4><span>Mobil Terawat</span></h4>
                                Jaminan mobil terawat untuk menunjang keamanan dan kenyamanan anda dalam berkendara
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="features-content active">
                                <img src="assets/images/projects/6.png" alt="" />
                                <h4><span>Harga Kompetitif</span></h4>
                                Harga sewa yang murah dengan pelayanan maksimal meningkatkan nilai ekonomis perjalanan Anda<br>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="features-content active">
                                <img src="assets/images/projects/3.png" alt="" />
                                <h4><span>Beragam Pilihan Mobil</span></h4>
                                Menyediakan berbagai pilihan jenis mobil untuk memenuhi kebutuhan berkendara anda<br><br>
                            </div>
                        </div>

                    </div>  
                </div>      
            </div>

        </section>


        <section id="our-portfolio" class="sections">

            <div class="container">

                <div class="row">
                    <div class="heading">
                        <div class="title text-center arrow-right">

                            <h4 class="">Mobil Yang Kami Punya</h4>
                            <img class="hidden-xs" src="assets/images/right-arrow.png" alt="" />
                        </div>
                    </div>	


                    <!-- Example row of columns -->
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail text-left">
                        <img src="assets/images/mobil/avanza1.png" class="img-responsive" alt="htc image"/>
                            <br/>
                            <h5 class="text-primary text-center">Toyota Avanza</h5>
                            <ul>
                                <li><i class="fa fa-times"></i> Include BBB</li>
                                <li><i class="fa fa-check"></i> Supir</li>
                                <li><i class="fa fa-check"></i> Dalam dan Luar Kota</li>
                                <li><i class="fa fa-check"></i> 7 Seat</li>
                            </ul>
                            <h6 class="text-primary">Rp. 500.000 <span>24 jam</span></h6>
                            <a href="detail-mobil.php" class="btn pt-btn btn-primary btn-block ">Book Now</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail text-left">
                        <img src="assets/images/mobil/innova1.png" class="img-responsive" alt="htc image"/>
                            <br/>
                            <h5 class="text-primary text-center">Toyota Innova</h5>
                            <ul>
                                <li><i class="fa fa-check"></i> Include BBB</li>
                                <li><i class="fa fa-times"></i> Supir</li>
                                <li><i class="fa fa-check"></i> Dalam dan Luar Kota</li>
                                <li><i class="fa fa-check"></i> 7 Seat</li>
                            </ul>
                            </ul>
                            <h6 class="text-primary">Rp. 550.000 <span>24 jam</span></h6>
                            <a href="detail-mobil.php" class="btn pt-btn btn-primary btn-block ">Book Now</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail text-left">
                        <img src="assets/images/mobil/alphard1.png" class="img-responsive" alt="htc image"/>
                            <br/>
                            <h5 class="text-primary text-center">Toyota Alphard</h5>
                            <ul>
                                <li><i class="fa fa-times"></i> Include BBB</li>
                                <li><i class="fa fa-check"></i> Supir</li>
                                <li><i class="fa fa-check"></i> Luar Kota</li>
                                <li><i class="fa fa-check"></i> 8 Seat</li>
                            </ul>
                            <h6 class="text-primary">Rp. 1.000.000 <span>24 jam</span></h6>
                            <a href="detail-mobil.php" class="btn pt-btn btn-primary btn-block ">Book Now</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail text-left">
                        <img src="assets/images/mobil/jazz1.png" class="img-responsive" alt="htc image"/>
                            <br/>
                            <h5 class="text-primary text-center">Honda Jazz</h5>
                            <ul>
                                <li><i class="fa fa-check"></i> Include BBB</li>
                                <li><i class="fa fa-check"></i> Supir</li>
                                <li><i class="fa fa-check"></i> Dalam Kota</li>
                                <li><i class="fa fa-check"></i> 4 Seat</li>
                            </ul>
                            <h6 class="text-primary">Rp. 400.000 <span>24 jam</span></h6>
                            <a href="detail-mobil.php" class="btn pt-btn btn-primary btn-block ">Book Now</a>
                        </div>
                    </div>
                    <div class="portfolio">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="portfolio-item" align="CENTER">
                            <a class="btn pt-btn btn-primary" href="daftar-mobil.html">Lihat Daftar Mobil Selengkapnya</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>



            

            <!-- /container -->       
        </section>

        <section id="works-area" class="sections">
            <div class="container text-center">

                <div class="heading">
                    <div class="title text-center arrow-left">
                        <img class="hidden-xs" src="assets/images/left-arrow.png" alt="" />

                        <h4 class="">Cara Pesan Mobil</h4>
                    </div>
                </div>	

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="main-works">
                            <img src="assets/images/map.png" alt="" />
                        </div><br>
                        <div>  
                            <a class="btn pt-btn btn-primary" href="cara-pesan.php">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>	
            </div>
        </section>

        
<!--
        <section id="our-package" class="sections lightbg">
            <div class="container">

                <div class="heading">
                    <div class="title text-center arrow-left">
                        <img class="hidden-xs" src="assets/images/left-arrow.png" alt="" />

                        <h4 class="">Our Packages</h4>
                    </div>
                </div>

                <div class="row">


                    <div class="main-package text-center">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="package-item basic">

                                <h5>Basic</h5>

                                <ul>
                                    <li>5 web sites</li>
                                    <li>5 e-mails</li>
                                    <li>5 MySQL databases</li>
                                    <li>5 MySQL databases</li>
                                    <li>10 GB storage</li>
                                </ul>

                                <div class="package-bottom-area">
                                    <h3>$5/<span>mo.</span></h3>
                                </div>

                                <div class="pkg-btn"><a href="" class="btn btn-primary">ORDER NOW</a></div>

                            </div>


                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="package-item standard">

                                <h5>Standard</h5>

                                <ul>
                                    <li>5 web sites</li>
                                    <li>5 e-mails</li>
                                    <li>5 MySQL databases</li>
                                    <li>5 MySQL databases</li>
                                    <li>10 GB storage</li>
                                </ul>

                                <div class="package-bottom-area">
                                    <h3>$12<span>/mo.</span></h3>
                                </div>

                                <div class="pkg-btn"><a href="" class="btn btn-primary">ORDER NOW</a></div>

                            </div>


                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="package-item premium">

                                <h5>Premium</h5>

                                <ul>
                                    <li>5 web sites</li>
                                    <li>5 e-mails</li>
                                    <li>5 MySQL databases</li>
                                    <li>5 MySQL databases</li>
                                    <li>10 GB storage</li>
                                </ul>

                                <div class="package-bottom-area">
                                    <h3>$19<span>/mo.</span></h3>
                                </div>

                                <div class="pkg-btn"><a href="" class="btn btn-primary">ORDER NOW</a></div>

                            </div>


                        </div>

                    </div>


                </div>
            </div>	
        </section>
-->

<!--
        <section id="our-project" class="sections main-project text-center">
            <div class="container">

                <div class="heading">
                    <div class="title text-center arrow-left">

                        <h4 class="">Our Business Project</h4>
                        <img class="hidden-xs" src="assets/images/right-arrow.png" alt="" />
                    </div>
                </div>

                <div class="row">

                    <div class="main-project text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="project-item">
                                <div class="project-photo"><img src="assets/images/projects/4.png" alt="" /></div>
                                <h5>CREDIT RESERCH</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="project-item">
                                <div class="project-photo"><img src="assets/images/projects/6.png" alt="" /></div>
                                <h5>TECHNICAL AID</h5>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="project-item">
                                <div class="project-photo"><img src="assets/images/projects/7.png" alt="" /></div>
                                <h5>TECHNICAL AID</h5>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="project-item">
                                <div class="project-photo"><img src="assets/images/projects/8.png" alt="" /></div>
                                <h5>TECHNICAL AID</h5>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="project-item">
                                <div class="project-photo"><img src="assets/images/projects/1.png" alt="" /></div>
                                <h5>TECHNICAL AID</h5>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="project-item">
                                <div class="project-photo"><img src="assets/images/projects/2.png" alt="" /></div>
                                <h5>SECURE ACCESS</h5>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="project-item">
                                <div class="project-photo"><img src="assets/images/projects/3.png" alt="" /></div>
                                <h5>MARKET RESERCH</h5>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="project-item">
                                <div class="project-photo"><img src="assets/images/projects/5.png" alt="" /></div>
                                <h5>CREDIT RESERCH</h5>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </section>
-->

        <section id="our-team" class="sections">
            <div class="container">

                <div class="heading">
                    <div class="title text-center arrow-left">

                        <h4 class="">Tentang Kami</h4>
                            <img class="hidden-xs" src="assets/images/right-arrow.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row">

                    <div class="main-history">

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="history-img">
                                <img src="assets/images/history-img.png" alt="" />
                            </div>
                        </div>



                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="history-wrapper">
                                <div class="history-heading"> 
                                    <h5 class="our-history">Our History</h5>
                                </div>

                                <div class="history-content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. laboru
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid project-bg">
                <div class="row">

                    <div class="main-team text-center">

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">

                                <img class="img-circle" src="assets/images/team/1.png" alt="" />
                                <h4><b>AHMAD SANDI</b></h4>
                                <p>UI & UX DESIGNER</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <img class="img-circle" src="assets/images/team/2.png" alt="" />
                                <h4><b>AYU ANGREINI</b></h4>
                                <p>DEVELOPER</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
<!--
        <section id="our-supports" class="sections">
            <div class="container">

                <div class="heading">
                    <div class="title text-center arrow-left">

                        <h4 class="">Updates & Support</h4>
                        <img class="hidden-xs" src="assets/images/right-arrow.png" alt="" />
                    </div>
                </div>

                <div class="row">


                    <div class="col-sm-6 col-xs-12">
                        <div class="supports-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. laboru
                            </p>
                            <div class="spt-btn"><button class="btn btn-primary">SUPPORT CENTER</button></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="supports-img"><img class="img-responsive" src="assets/images/monitor.png" alt="" /></div>
                    </div>


                </div>

            </div>     
        </section>
-->
<!--
        <section id="hire-us" class="sections">

            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="hire-content">
                            <div class="img-overlay">

                                <div class="creative-works">
                                    <h3>NEED CREATIVE WORKERS?</h3>
                                    <button class="btn hire-btn btn-primary">HIRE US</button>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>  

        </section>
-->

        <div class="scroll-top">

            <div class="scrollup">
                <i class="fa fa-angle-double-up"></i>
            </div>

        </div>

        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">

                <div class="row">
                    <div class="main-footer">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-item">
                                <h2>PORTFOLIO</h2>
                                <ul>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Brand & Identity</a></li>
                                    <li><a href="#">Mobile Design</a></li>
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">User Interface</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-item">
                                <h2>ABOUT</h2>
                                <ul>
                                    <li><a href="#">The Company</a></li>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">Vision</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-item">
                                <h2>GALLERY</h2>
                                <ul>
                                    <li><a href="#">lickr</a></li>
                                    <li><a href="#">Picasa</a></li>
                                    <li><a href="#">iStockPhoto</a></li>
                                    <li><a href="#">PhotoDune</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-item">
                                <h2>CONTACT</h2>
                                <ul>
                                    <li><a href="#">Basic Info</a></li>
                                    <li><a href="#">Map</a></li>
                                    <li><a href="#">Conctact Form</a></li>

                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="socio-copyright">

                        <div class="social">
                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <p>Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://bootstrapthemes.co"> Bootstrap Themes </a>2016. All rights reserved.</p>
                    </div>

                </div>	
            </div>

        </footer>


        <script src="assets/js/vendor/i-jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/i-bootstrap.min.js"></script>
        <script src="assets/js/i-plugins.js"></script>
        <script src="assets/js/i-main.js"></script>
        <script src="assets/l-jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script> 
        <script src="assets/l-parsley.min.js"></script>
        <script src="assets/l-modal.js"></script> 
    </body>
</html>
