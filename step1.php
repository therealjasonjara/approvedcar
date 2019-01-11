<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Approvedcar</title>
    <link rel="icon" href="images/fev_icon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,500,600,700" rel="stylesheet"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-4.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!--Banner-->
<section id="banners">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="pic" class="img-responsive"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right blog-nav">
                    <li class="active"><a href="index.php" class="ml-0">Home</a></li>
                    <li ><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                    <li><a href="#" class="btn">GET STARTED</a></li>
                </ul>
            </div>
        </div>
    </nav>
     
</section>
<!--Banner-->


<!--step-->
<section id="step">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-step">
                    <div class="step-head">
                        <h4>Let us help you <span>find the car</span>
                        <br>of your dreams</h4>
                    </div>
                     
                    <form id="commentForm" method="get" action="step2.php" class="form-horizontal">
                        <div class="steps-form-box">
                           <div class="stap-hading-text">
                               <h4>Credit Score & Monthly Income</h4>
                               <hr>
                           </div>
                            <div class="steps-form-box-main">
                                <div class="form-group lbl-full-width label-p-right">
                                    <label for="c_score">
                                        How is your Credit Score?
                                        <select class="form-control" id="c_score">
                                            <option value="">Excellent (850+ Credit Score)</option>
                                        </select>
                                    </label>
                                </div>

                                <div class="form-group lbl-full-width label-p-left">
                                    <label for="income">
                                        How much do you earn per month?
                                        <select class="form-control" id="income">
                                            <option value="">$500 or Less</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="steps-btn">
                                <button type="submit" class="btn">NEXT</button>
                            </div>
                        </div>
                    </form>
                    <div class="step-parsen">
                        <p> <img src="images/check.png" alt="pic">
 100% SECURE, PRIVATE & CONFIDENTIAL</p>
                    </div>
		        </div>
            </div>
        </div>
    </div>
</section>
<!--step-->


<!--Footer-->
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-text">
                    <img src="images/logo.png" alt="pic" class="img-responsive center-block">
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eleifend nec ligula id varius. Sed ut tortor nec dolor venenatis pellentesque ac ac justo. Curabitur ut mauris molestie, scelerisque ex sit amet, pulvinar sem.</p>
                </div>
            </div>
               
            <div class="col-md-3">
                <div class="footer-text">
                    <h4>Quick Links</h4>
                    <hr>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-text">
                    <h4>Latest Posts</h4>
                    <hr>
                    <ul>
                        <li><a href="#">Lesser life Very face earth.</a></li>
                        <li><a href="#">Shall she'd fruit bring they're fowl </a></li>
                        <li><a href="#">Subdue deep appear.</a></li>
                        <li><a href="#">Meat moveth sixth fish.</a></li>
                        <li><a href="#">Great and great creepeth first moveth</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-text">
                    <h4>Legals</h4>
                    <hr>
                    <ul>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Use of Cookies</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="footer-btm-text">
                    <p>2018 © ApprovedCar</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="footer-btm-pic">
                    <a href="#"><img src="images/fb.png" alt="pic" class="img-responsive"></a>
                    <a href="#"><img src="images/tw.png" alt="pic" class="img-responsive"></a>
                    <a href="#"><img src="images/yt.png" alt="pic" class="img-responsive"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Footer-->

<!--JS link Start-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/animated.text.js"></script>
    <script src="js/custom.js"></script>
<!--JS link End-->

</body>
</html>