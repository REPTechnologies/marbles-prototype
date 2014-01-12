<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrapUnited2.css" rel="stylesheet"/>
        <link rel="stylesheet" href="jquery-ui.css" />

        <script src="jquery.js"></script>
        <script src="jquery-1.9.1.js"></script>
        <script src="jquery-ui.js"></script>
        
        <script type="text/javascript" src = "bootstrap.js"></script>
        <script type="text/javascript" src = "jquery.smileyslider.js"></script>
        <script type="text/javascript" src = "raphael.js"></script>
        <script type="text/javascript" src = "charCount.js"></script>


        <!--Tabs  Orange top color: #dd4814;-->
        <script>
            $(function() {
                $("#accordion").accordion();
                heightStyle: "content"
            });
        </script>
        <style type="text/css">
            .ui-slider-horizontal .ui-state-default {background: white url(marble.jpg) no-repeat scroll 50% 50%;}
        </style>
    
        <script>
            var value = 0;
            $(function() {

                $("#slider-range-min").slider({
                    range: "min",
                    value: 3,
                    min: 1,
                    max: 5,
                    slide: function(event, ui) {
                        if (ui.value == 3)
                        {
                            $("#amount").val(0);
                        }
                        else if (ui.value == 2)
                        {
                            $("#amount").val(1);
                        }
                        else if (ui.value == 1)
                        {
                            $("#amount").val(2);
                        }
                        else
                        {
                            $("#amount").val(0);
                        }
                    }
                });
                $("#amount").val(0);

            });
        </script>

        <script>
            $(function() {
                $("#slider-range-min2").slider({
                    range: "min",
                    value: 3,
                    min: 1,
                    max: 5,
                    slide: function(event, ui) {
                        if (ui.value == 3)
                        {
                            $("#amount").val(0);
                        }
                        else if (ui.value == 2)
                        {
                            $("#amount").val(1);
                        }
                        else if (ui.value == 1)
                        {
                            $("#amount").val(2);
                        }
                        else
                        {
                            $("#amount").val(0);
                        }
                    }
                });
                $("#amount").val(0);
            });
        </script>

    </script>

    <script>
        $(function() {
            $("#slider-range-min3").slider({
                range: "min",
                value: 3,
                min: 1,
                max: 5,
                slide: function(event, ui) {
                    if (ui.value == 3)
                    {
                        $("#amount").val(0);
                    }
                    else if (ui.value == 2)
                    {
                        $("#amount").val(1);
                    }
                    else if (ui.value == 1)
                    {
                        $("#amount").val(2);
                    }
                    else
                    {
                        $("#amount").val(0);
                    }
                }
            });
            $("#amount").val(0);
        });
    </script>

    <script>
        $(function() {
            $("#slider-range-min4").slider({
                range: "min",
                value: 3,
                min: 1,
                max: 5,
                slide: function(event, ui) {
                    if (ui.value == 3)
                    {
                        $("#amount").val(0);
                    }
                    else if (ui.value == 2)
                    {
                        $("#amount").val(1);
                    }
                    else if (ui.value == 1)
                    {
                        $("#amount").val(2);
                    }
                    else
                    {
                        $("#amount").val(0);
                    }
                }
            });
            $("#amount").val(0);
        });
    </script>

    <script>
        $(function() {
            $("#slider-range-min5").slider({
                range: "min",
                value: 3,
                min: 1,
                max: 5,
                slide: function(event, ui) {
                    if (ui.value == 3)
                    {
                        $("#amount").val(0);
                    }
                    else if (ui.value == 2)
                    {
                        $("#amount").val(1);
                    }
                    else if (ui.value == 1)
                    {
                        $("#amount").val(2);
                    }
                    else
                    {
                        $("#amount").val(0);
                    }
                }
            });
            $("#amount").val(0);
        });
    </script>

    <script>
        $(function() {
            $("#slider-range-min6").slider({
                range: "min",
                value: 3,
                min: 1,
                max: 5,
                slide: function(event, ui) {
                    if (ui.value == 3)
                    {
                        $("#amount").val(0);
                    }
                    else if (ui.value == 2)
                    {
                        $("#amount").val(1);
                    }
                    else if (ui.value == 1)
                    {
                        $("#amount").val(2);
                    }
                    else
                    {
                        $("#amount").val(0);
                    }
                }
            });
            $("#amount").val(0);
        });
    </script>
    <!-- Character Counter -->

    <script>
        $(function() {
            $("#message1").charCount({
                allowed: 70,
                counterText: 'Characters left: '
            });
            $("#message2").charCount({
                allowed: 70,
                counterText: 'Characters left: '
            });
            $("#message3").charCount({
                allowed: 70,
                counterText: 'Characters left: '

            });
            $("#message4").charCount({
                allowed: 70,
                counterText: 'Characters left: '
            });

            $("#message5").charCount({
                allowed: 280,
                counterText: 'Characters left: '
            });


            $("#message6").charCount({
                allowed: 280,
                counterText: 'Characters left: '
            });
        });


    </script>
    
        <script>
            $(document).ready(function() {
                var slider1 = $('#slider1').smileySlider();
                var slider2 = $('#slider2').smileySlider();
                var slider3 = $('#slider3').smileySlider();
                var slider4 = $('#slider4').smileySlider();
                var slider5 = $('#slider5').smileySlider();
                var slider6 = $('#slider6').smileySlider();
            });
        </script>



    <!--Sliders-->

    <!--
    <script>
        $(function() {


            $("#slider-range-min").slider({
               
                range: "min",
                value: 3,
                min: 1,
                max: 5,
               
                        slide: function(event, ui) {
                             $allow = 0;
                             $( "#amount" ).val($allow);    
                            
                         if (($("#amount").val(ui.value)) == 2)
                                
                            {
                                $allow + 1;
                            }
                            else if (($("#amount").val(ui.value)) == 1)
                            {
                            $allow + 1;
                            }
                            else if (($("#amount").val(ui.value)) == 0)
                            {
                            $allow + 1;
                            }
                            else
                            {
                              $allow - 1;
                            }
                        }
            });

            $("#amount").val($allow);

        });

    </script>
    -->

    <title>Submit!</title>
</head>
<body>    <!--TOP Navigation BAR -->     
    <!--TOP Navigation BAR --> 

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
    <div class="container marketing">
        <h1 align="center"> Hey! How are you doing? </h1>
        <h1 align="center"> - for real though... </h1>
        <p align="center" style="font-size: 15px"> This short, 100% confidential and anonymous questionnaire <br>
            will help marbles determine what activities are most <br>
            appropriate for you, so please, be honest. After all, you are<br>
            the only person who sees these results, so don't try and trick <br>
            yourself! </p>


      
        <!--
        <p align="left" style="font-size: 15px"> <font style="font-weight: bold"> Characteristics: </font> Here is a place to help users get a better understanding of the intention 
            of the event, to move a dial, you must first move one of the sliders to the left to establish available 
            credit. Try and give users a better experience.
        </p>
        -->

        <!--
        
        <div style="clear: both">

            <h3 style="float: left">Low</h3>
            <h3 style="float: right">High</h3>
        </div>
        -->
    </div>

 
  
    <br>
    <div style="padding-left:4.87%;" class="container marketing">
        <div class ="col-md-1">   </div>
        <div class ="col-md-5">   

       
                <!--
                                <img  src="frounie.JPG"/>
                                <img style="padding-left: 50px; padding-top: 10px;"  src="midfrouw.JPG"/>
                                <img style="padding-left: 50px;"src="neutral.JPG"/>
                                <img style="padding-left: 50px;" src="smilie.JPG"/>
                                <img style="padding-left: 40px;"  src="big smilie.JPG"/>
                -->
                <!--Original
                <img  src="frounie.JPG"/>
                <img style='padding-left: 174px; padding-top: 5px'  src="midfrouw.JPG"/>
                <img style='padding-left: 220px' src="neutral.JPG"/>
                <img style='padding-left: 200px' src="smilie.JPG"/>
                <img style='padding-left: 180px' src="big smilie.JPG"/>
                
                -->

        



            <h4> <b>Self-Esteem </b> </h4>
              <div id="slider1"> </div>
            <div style="clear: both; margin-right: 15%;">
                <h4 style="float: left">Low</h4>
                <h4 style="float: right">High</h4>
            </div>

          

            <!-- next slider -->     
           
           <br>
             <br>
              <br> 
            <div>


               
                <h4> <b> Social Connection , Relationships </b></h4>
              <div id="slider2"> </div>
            <div style="clear: both; margin-right: 15%;">
                <h4 style="float: left">Low</h4>
                <h4 style="float: right">High</h4>
            </div>





            
            </div>
          <br>
             <br>
              <br> 
            <div>


               
                <h4> <b> Independence, Self-Confidence </b></h4>
              <div id="slider3"> </div>
            <div style="clear: both; margin-right: 15%;">
                <h4 style="float: left">Low</h4>
                <h4 style="float: right">High</h4>
            </div>
         
               
           </div>
             <br>
             <br>
              <br> 
            
        </div>

     
        <div class ="col-md-5">   
            <!--  slider4 --> 

     


                <!--Original
                <img  src="frounie.JPG"/>
                <img style='padding-left: 174px; padding-top: 5px'  src="midfrouw.JPG"/>
                <img style='padding-left: 220px' src="neutral.JPG"/>
                <img style='padding-left: 200px' src="smilie.JPG"/>
                <img style='padding-left: 180px' src="big smilie.JPG"/>
                
                -->

     
          
            <div>


         
                <h4><b> Competence, Skills, Abilities </b></h4>
              <div id="slider4"> </div>
            <div style="clear: both; margin-right: 15%;">
                <h4 style="float: left">Low</h4>
                <h4 style="float: right">High</h4>
            </div>



               
            </div>
            <br>
             <br>
              <br> 
            <div>

         
                <h4> <b> Opportunities of Personal Growth </b></h4>
              <div id="slider5"> </div>
            <div style="clear: both; margin-right: 15%;">
                <h4 style="float: left">Low</h4>
                <h4 style="float: right">High</h4>
            </div>



               
            </div>
            <br>
             <br>
              <br> 
              
            
           
            <div>


           
                <h4><b> Sense of Purpose or Meaning </b> </h4>
              <div id="slider6"> </div>
            <div style="clear: both; margin-right: 15%;">
                <h4 style="float: left">Low</h4>
                <h4 style="float: right">High</h4>
            </div>
                <script>
                    $(document).ready(function() {
                        $("#example").popover({
                            placement: 'top',
                            html: 'true',
                            title: '<span class="text-info"><strong>Congratulations! That was easy...</strong></span>' +
                                    '<button type="button" id="close" class="close" onclick="$(&quot;#example&quot;).popover(&quot;hide&quot;);">&times;</button>',
                            content: 'Would you like to be updated about new customized marbles opportunities?' + '<br>' + '<a href="">Yes</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">No</a>'
                                    + '<br>' + 'How often?' + '<br>' + '<a href="">daily</a>&nbsp;&nbsp;&nbsp;&nbsp;     <a href="">biweekly</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">weekly</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">monthly</a>' +
                                    '<br>' + "What's the best way to reach you?" + '<br>' + '<a href="">text</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="">email</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' + '<a  href="pexplore.php"  class="btn btn-primary" role="button"> Access marbles! </a>'

                        });
                    });
                </script>
               
            </div>
        </div>

        <hr class="featurette-divider">
        <br>
        <br>



        <br>
        <br>
        <br>
        <br>
    </div>
    <br>
    <br>
    <div class="container marketing">

        <center><button type="button"  id ="example" class="btn btn-primary btn-lg">View Opportunities!</button> </center>

        <br>
        <br>
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2013 Real EmPowerment Solutions , LLC. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>

    </div>

</body>

</html>
