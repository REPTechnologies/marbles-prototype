<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Marbles</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">



        <link href="bootstrapUnited2.css" rel="stylesheet"/>



        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>


        <script type="text/javascript" src = "bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $("#fm").popover({
                    placement: 'right',
                    html: 'true',
                    title:
                            '<button type="button" id="close" class="close" onclick="$(&quot;#fm&quot;).popover(&quot;hide&quot;);">&times;</button>',
                    content: function() {
                        return $("#popover-content").html();
                    }
                });
            });
        </script>


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

        <br>
        <br>
        <br>
        <br>
        <div class="container marketing">
            <br>
            <div class="col-lg-6">
                <div class="video-container">
                    <!-- Copy & Pasted from YouTube -->
                    <iframe  src="//www.youtube.com/embed/k4n4nVpRacU?autoplay=1" frameborder="0" width="420" height="315" allowfullscreen></iframe>   
                </div>
                <br>
                <center> <a href="explore.php"  type="button"   class="btn btn-primary"><b>Continue Exploring</b></a> </center>
            </div>
             <div class="col-lg-4"> 
                 
                 <h2>Welcome to <font style="color:#dd4814;"> marbles!</h2> </font>    
                            <h3 style="padding-left: 4%; margin-top: 0;">pause.organize.play </h3> <br>
                            
                            <regbody2>
                            Caught in the same routine? Want to <br> explore some  different sides of life? <br> <font style="color:#dd4814;"> marbles </font>  
                            connects you to customized <br> opportunities to bump you toward <br> health and wellness. <br>

                            <br> Take a 100% anonymous organizer  <br> which helps you interact  with your current <br> state. Then find tons of enriching  <br> opportunities near you to interact with <br> people and places  
                             designed to help you! <br>
                            </regbody2> <br>
                            <div style="margin-right: 25%;">
                             <form role="form">
                        <center><div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input style="width: 250px;" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div> </center>
                        <center> <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input style="width: 250px;" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div> </center>
                        <center>   <div class="form-group">
                                <label for="exampleInputPassword1">Verify Password</label>
                                <input style="width: 250px;" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div> </center>
                       <a  href="Login.php" class="btn btn-primary" role="button" style="margin-left: 25%;"> <b> Take Organizer </b></a> 
                    </form>
                            </div>
                </div>
                 
             </div>
        </div>


        <!-- /.navbar-collapse -->

        <!--
    <center> <div class='container marketing'>
            <img src="marb_finalSmall4.png"/> </div> </center>
    
    <div id="popover-content" class="hide">
        <p> Hi, just enter the following info <br> to take your organizer. </p>
    
    
    
        <form role="form">
            <center><div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input style="width: 250px;" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div> </center>
            <center> <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input style="width: 250px;" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div> </center>
            <center>   <div class="form-group">
                    <label for="exampleInputPassword1">Verify Password</label>
                    <input style="width: 250px;" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div> </center>
            <center><a  href="Login.php" id = "show"  class="btn btn-primary" role="button"> Take Organizer </a> </center>
        </form>
    </div>
    
    <br>
    <div class="col-lg-1"> </div>   
    
          
    
    
    <div class="container marketing">
      
        <div class="col-lg-6">    
            <div class="video-container">
        <!-- Copy & Pasted from YouTube -->

        <!--
        <iframe  src="//www.youtube.com/embed/k4n4nVpRacU" frameborder="0" width="420" height="315" allowfullscreen></iframe>   
    </div>
    <br>
    
    <div  class="col-lg-1"></div>
    <div  class="col-lg-1"></div>
    <div  class="col-lg-1"></div>
    <div  class="col-lg-1"></div>

                    <div  class="col-lg-3">
                        <center> <button  type="button"  id ="fm" class="btn btn-primary"><b>Continue Exploring</b></button> </center>
                     
                    </div>
                  
                    </div>

                    <div class="col-lg-6"> 
                        <h4><h2>Welcome to <font style="color:#dd4814;"> marbles!</h2> </font>      - <br>
                            <h3>pause.organize.play </h3> <br><br>

                            Caught in the same routine? Want to explore some <br> different sides of life?  <font style="color:#dd4814;"> marbles </font> <br> connects you to customized <br> opportunities to bump you <br> toward health and wellness. <br>

                            <br> First, take a 100% anonymous <br> organizer which helps you interact <br> with your current state. Then  <br> find tons of enriching  <br> opportunities near you to  <br> interact with people and places  <br> designed to help bump you  <br> towards health and wellness. <br><br>

                            Thanks for visiting. </h4> 

                    </div>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
        
        -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        
        
        <hr class="featurette-divider">

        <div class="container marketing">
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2013 Real EmPowerment Solutions , LLC. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
        </div>


    </body>
</html>

