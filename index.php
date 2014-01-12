<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Marbles</title>

        <link href="bootstrapUnited2.css" rel="stylesheet" >       



        <script src="jquery.js"></script>
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> 
        <script type="text/javascript" src = "transition.js"></script> 
        <script type="text/javascript" src = "bootstrap.js"></script>
        <script type="text/javascript" src = "bootstrap.min.js"></script> 
        <script type="text/javascript" src = "holder.js"></script> 

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="avgrund.css">



        <script type="text/javascript">
            $(document).ready(function() {
                $('.carousel').carousel({
                    interval: 20000
                })
            });
        </script>

        <script src="jquery.min.js"></script>
        <script src="jquery.avgrund.js"></script>

        <script>
            $(function() {
                $('#show').avgrund({
                    height: 200,
                    holderClass: 'custom',
                    showClose: true,
                    showCloseText: 'close',
                    onBlurContainer: '.container',
                    template: '<p> <input type="text" placeholder="Email"> </p>' +
                            '<div>' + '<p> <input type="text" placeholder="Password"> </p>'
                            + '<a  href="Login.php"  class="btn btn-primary" role="button"> Log in </a>' + '<div>' + '<br>'
                            + '<a href="signup.php">or sign up</a>'



                });
            });
        </script>

        <script>
            $(function() {
                $('#show2').avgrund({
                    height: 200,
                    holderClass: 'custom',
                    showClose: true,
                    showCloseText: 'close',
                    onBlurContainer: '.container',
                    template: '<p> <input type="text" placeholder="Email"> </p>' +
                            '<div>' + '<p> <input type="text" placeholder="Password"> </p>'
                            + '<a  href="Login.php"  class="btn btn-primary" role="button"> Log in </a>' + '<div>' + '<br>'
                            + '<a href="signup.php">or sign up</a>'



                });
            });
        </script>

        <link href="carousel.css" rel="stylesheet"/>


    </head>

    <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><b>marbles</b></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="explore.php"><b>Explore Activities</b></a></li>
                        <li><a href="submit.php"><b>Contribute Suggestion</b></a></li>
                        <li><a href="login1.php"><b>Log In</b></a></li>
                        <li><a href="" ><b>Contact</b></a></li>

                    </ul>

                </div><!--/.nav-collapse -->
            </div>
        </div>






        <!--TOP Navigation BAR --> 
        <!--
             <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!--
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="index.php">marbles</a>
         </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
         
                 <li><a href="explore.php"><b>Explore Activities</b></a></li>   
                 <li><a href="submit.php"><b>Contribute Suggestion</b></a></li>
                 <li><a href="#" id="show2"><b>Log In</b></a></li>   
                 <li><a href="#"><b>Contact</b></a></li> 
             </ul>

         </div><!-- /.navbar-collapse -->
        <!--
     </nav>
        -->

        <!--
     <div class="navbar">
         <div class="navbar-inner">
             <a class="brand" href="#">Marbles</a>
             <ul class="nav">
                 <li class="active"><a href="#">Home</a></li>
                 <li><a href="#">Explore</a></li>
                 <li><a href="submit.php">Submit</a></li>
                 <li><a href="#">Log In</a></li>
                 <li><a href="#">Contact</a></li>
             </ul>
         </div>
     </div>
        -->

        <!--   <div class="navbar">
          <div class="navbar-inner">
            <a class="brand" href="#">Brinches</a>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Explore</a></li>
              <li><a href="submit.php">Submit</a></li>
              <li><a href="#">Log In</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          
        -->


        <!-- END Navigation BAR -->    
        <!-- Carousel
          ================================================== -->


        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="sun.jpg">
                    <div class="container">
                        <div class="carousel-caption">

                            <img  src="marb_finalSmall4.png"/>
                            <h3 style="color: #dd4814"> pause.organize.play </h3>
                            <!--   <h1 style=" color:black;"> 
   
                                   Marbles </h1>
                            -->

                            <p style=" color:black;">Connecting customized activities to bump you <br> towards health and wellness.</small></p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn More</a>
                            </p></div>
                    </div>
                </div>
                <div class="item">
                    <img src="pic1.jpg"">
                    <div class="container">
                        <div class="carousel-caption">
                            <img src="marb_finalSmall4.png"/>

                            <!--   <h1 style=" color:black;">Happiness</h1> -->
                            <p style=" color:black;">The small things are what count, start <br> taking small steps toward health and <br> happiness now!</p>
                            <p><a class="btn btn-lg btn-primary" href="">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="s2.png">
                    <div class="container">
                        <div class="carousel-caption">
                            <img src="marb_finalSmall4.png"/>

                            <!--
                            <h1 style=" color:black;">Fulfillment</h1>
                            -->
                            <p style=" color:black;">Have a friend in need? <br> Find a helpful resource now and start
                                <br> supporting positive decisions.</p>
                            <p><a class="btn btn-lg btn-primary" href="">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                &lsaquo;</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                &rsaquo;</span>
            </a>  
        </div>



        <!-- /.carousel -->
        <!--  
            <div class="container"> 
              <div class= "jumbotron" >
                    <h1>Hello! </h1>
                  <a class = "btn btn-default"> Sign up! </a>
              </div>
        --> 

        <!-------------------------- BOTTOM ---------------------------->

        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel &raquo; -->
            <div class="row">
                <div class="col-md-4">

                    <p> <center><a class="btn btn-primary" href="explore.php" role="button"><b> Explore <br> Activities </b>  </a> </center</p>

                    <p align="center" ><font size="4">marbles has tons of <br> suggestions to bump you <br> towards wellness, start  <br> anonymously exploring now!  </font></p>

                </div><!-- /.span4 -->
                <div class="col-md-4"">
                    <!--Manual Center
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    <p> <center><a class="btn btn-primary" href="Submit.php" role="button"> <b>Contribute <br> Suggestion </b></a> </center></p>

                    <p align="center" ><font size="4">In less than 2 minutes, share <br>
                        an activity or event that could <br>
                        help students on their path.
                        </font></p>


                </div><!-- /.span4 -->
                <div class="col-md-4">

                    <p> <center><a  href="login1.php"   class="btn btn-primary btn-lg" role="button"><b> Log In </b> </a></center></p>
                    <p align="center" ><font size="4"> Sign up or log in to take the <br>
                        simple, 6 question guide and <br> start accessing customized <br>
                        marbles today! <br>
                        </font></p>
                </div><!-- /.span4 -->
            </div><!-- /.row -->
       

            <br>
            <hr class="featurette-divider">
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2013 Real EmPowerment Solutions , LLC. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
            <!-- FOOTER -->
        </div>




    </body>

</html>
