<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <title>Marbles</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="bootstrap2.css" rel="stylesheet" > 
        <link href="bootstrap-responsive.css" rel="stylesheet"/> 
      
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Marbles</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><b>Home</b></a></li>
                    <li><a href="explore.php"><b>Explore</b></a></li>   
                    <li><a href="submit.php"><b>Submit</b></a></li>
                    <li><a href="#"><b>Log In</b></a></li>   
                    <li><a href="#"><b>Contact</b></a></li> 
                </ul>          
         </nav>
        
         </div><!-- /.navbar-collapse -->
            <center> <div class='container marketing'>
                <img src="logov2.jpg"/>   </div> </center>
        <br>
        <br>
        
       
    
       <div class='container marketing'>
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
          <center><a  href="Login.php" id = "show"  class="btn btn-primary" role="button"> Sign up! </a> </center>
      </form>
       </div>
</html>
