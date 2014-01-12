<!DOCTYPE html >
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

        <link href="bootstrap2.css" rel="stylesheet" > 
        <link href="bootstrap-responsive.css" rel="stylesheet"/> 
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
         <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

             <!-- <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> -->
        <script  src="jquery1.4.min.js"></script>
        <script type="text/javascript" src = "transition.js"></script> 
        <script type="text/javascript" src = "bootstrap.js"></script> 
        <script src="arbor.js"></script>
        <script src="graphics.js"></script>
        <script src="renderer.js"></script>
        
 

        <title>Explore</title>
        <!--Drag -->


    </head>
    <body>

        <!--TOP Navigation BAR --> 

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
                    <li><a href="index.php"><b>Home</b></a></li>
                    <li class="active"><a href="explore.php"><b>Explore</b></a></li>   
                    <li><a href="submit.php"><b>Submit</b></a></li>
                    <li><a href="#"><b>Log In</b></a></li>   
                    <li><a href="#"><b>Contact</b></a></li> 
                </ul>

            </div><!-- /.navbar-collapse -->
        </nav>

        <div class="container marketing">
            <h1 align="center"> Explore! </h1>
            <p align="center" style="font-size: 15px"> Many users have identified where they are <br>
                and actively using marbles to help explore <br>
                mind-expanding experiences. Use the <br>
                filter below to select topics and to see <br>
                activities other users have discovered!</p>


        </div>
        <!-- for later
         <img src="marblejar1.jpg" width="350" height="300" alt="marblejar1" />
        -->
        <br>
        <br>
        <div class="container marketing">
        <!--Graph Start -->
        <center> <canvas id="viewport" width="1000" height="600"> </center>
<script language="javascript" type="text/javascript">
     var sys = arbor.ParticleSystem(200, 400,.4);
            sys.parameters({gravity:true});
            sys.renderer = Renderer("#viewport") ;
            var data = {
               nodes:{
                 explore:{'color':'orange','shape':'dot','label':'Explore'},
                 selfesteem:{'color':'gray','shape':'dot','label':'Self-Esteem', link:'http://google.com'},
                 socialconnection:{'color':'blue','shape':'dot','label':'Social Connection'}
               }, 
             
              
               edges:{
                 explore:{ selfesteem:{}, socialconnection:{} }
               }
             };
            sys.graft(data);
            
            
        $(that).trigger({type:"navigate", path:selected.node.data.link})

       

            
         
 </script>

        </div>
        <br> 
        <br>
    
  
  <!--  <input id="opener2" type="image" src="se.png" alt="Submit" onclick="photoLoaded(1)">  -->
        <div class="container marketing">
            <div class="row">
                <div  class="span4" >
                   
<input id="opener3" type="image" src="se.png" alt="Submit" onclick="photoLoaded(3)"> 

                </div>
                <div class="span4">
                    <input id="opener3" type="image" src="sc2.png" alt="Submit" onclick="photoLoaded(3)"> 
                </div>

                <div>
                    <input id="opener" type="image" src="is.png" alt="Submit" onclick="photoLoaded(4)"> 
                </div>
            </div>
        </div>

        <div class="container marketing">
            <div class="row">
                <div class="span4" >
                    <input type="image" src="csa.png" alt="Submit" onclick="photoLoaded(2)"> 
                </div>
                <div class="span4">
                    <input type="image" src="opg.png" alt="Submit" onclick="photoLoaded(5)"> 
                </div>

                <div>
                    <input  type="image" src="spm.png" alt="Submit" onclick="photoLoaded(6)"> 
                </div>
            </div>
        </div>


        <br>

        <div class="container marketing">

            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2013 Real EmPowerment Solutions , LLC. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>

        </div>


    </body>
</html>
