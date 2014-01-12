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


        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="jquery.js"></script>
        <script src="jquery-1.9.1.js"></script>
        <script src="jquery-ui.js"></script>
        <script type="text/javascript" src = "bootstrap.js"></script>

        <script type="text/javascript" src = "charCount.js"></script>
        <link rel="stylesheet" href="classic.css" />
        <link rel="stylesheet" href="default.date.css" />
        <script type="text/javascript" src = "picker.js"></script>
        <script type="text/javascript" src = "picker.date.js"></script>
        <link href="orange.css" rel="stylesheet">
        <script type="text/javascript" src = "icheck.js"></script>



        <!--Tabs  Orange top color: #dd4814;-->
        <script>
            $(document).ready(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_flat-orange',
                    radioClass: 'iradio_flat-orange'
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $("#example").popover({
                    placement: 'right',
                    html: 'true',
                    title: '<span class="text-info"><strong>Submission Complete!!</strong></span>' +
                            '<button type="button" id="close" class="close" onclick="$(&quot;#example&quot;).popover(&quot;hide&quot;);">&times;</button>',
                    content: 'now anyone that could benefit from this event will now be aware of it simply by navigating through their marbles! Thanks for taking the time to share!'
                });
            });
        </script>
        <script>
            $(function() {



                $("#inputdate").pickadate();

            }); //this was missing
        </script> 
        <script>
            $(function() {
                $("#accordion").accordion();
                heightStyle: "content"
            });</script>
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
            });</script>

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
            });</script>

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
        });</script>

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
        });</script>

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
        });</script>

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
        });</script>
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
                    <li ><a href="explore.php"><b>Explore Activities</b></a></li>
                    <li class="active"><a href="submit.php"><b>Contribute Suggestion</b></a></li>
                    <li><a href="login1.php" ><b>Log In</b></a></li>
                    <li><a href="" ><b>Contact</b></a></li>

                </ul>

            </div><!--/.nav-collapse -->
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container marketing">
        <h1 align="center"> Hi, spread the word! </h1>
        <p align="center" style="font-size: 15px"> Enter the information below to introduce 
            your activity or event to other marble <br>
            users. Please be truthful, we trust our users to give accurate information so <br>  everybody wins, event attendees, and organizers! 

        </p>


        <div class ="col-md-1"> 
        </div>
        <div class ="col-md-4">    

            <form role="form">

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" style="width: 365px;"  class="form-control" id="title" >
                    <label style="margin-left: 218px;">50 characters max</label> 
                </div>
                <div class="form-group">
                    <label for="where">Where:</label>
                    <input type="text"  style="width: 365px;" class="form-control" id="where" >
                </div>
                <label>When:</label>
                <div class="container marketing">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="date" style="width: 195px; height:40px;"  class="input-lg" id="inputdate" placeholder="Date" >

                            </div>
                        </div>

                        <div class="col-md-2" >
                            <div style=" height: 40px;" class="input-group">
                                <span  class="input-group-addon">@</span>
                                <input  type="text" style="width: 115px; height:40px;" class="form-control" placeholder="Time">
                            </div>
                        </div>


                    </div>
                </div>

                <!--
                                <div class="container marketing">
                                    <div class="row">
                                        <div class="span2">                           
                                            <div class="form-group">
                                                <label for="inputdate">When:</label>
                                                <input type="date" style="width: 195px; height:40px;"  class="input-lg" id="inputdate" placeholder="Date" >
                                            </div>                            
                                        </div>
                                        
                                        <div>
                                            <div style=" height: 40px;" class="input-group">
                                                <span  class="input-group-addon">@</span>
                                                <input  type="text" style="width: 110px; height:40px;" class="form-control" placeholder="Time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                -->
                <div class="form-group">
                    <label style="margin-top: 10px;" for="organizer">Organizer:</label>
                    <input type="text" style="width: 365px;"  class="form-control" id="organizer" >
                </div>

            </form>

        </div>

        <div class ="col-md-1"> 
        </div>

        <div class ="col-md-4">  

            <div class="form-group">
                <label for="des">Short Description:</label>
                <textarea type="text" style="width: 365px; height:100px;" class="form-control"  id="des" > </textarea>
                <label style="margin-left: 205px;">140 characters max</label> 
            </div>

            <div class="form-group">
                <label for="com">Personal Comments:</label>
                <textarea type="text" style="width: 365px; height:100px;" class="form-control"  id="com" > </textarea>
            </div>

        </div>
        <br>
    </div>



    <div class="container marketing">

        <div class ="col-md-1">  </div>

        <div class="container">
            <div class="row">

                <div class ="col-md-3"> 

                    <center> <h3> Type </h3> </center>
                    <input type="checkbox"> Speaker & Presentation <br><br>
                    <input type="checkbox"> Discussion or Roundtable <br><br>
                    <input type="checkbox"> Networking<br><br>
                    <input type="checkbox"> Socializing

                </div>


                <div class ="col-md-3">  
                    <center>  <h3> Intended Audience </h3></center>
                    <input type="checkbox"> 1st years<br><br>
                    <input type="checkbox"> 2nd and 3rd years<br><br>
                    <input type="checkbox"> 4th years and above<br><br>
                    <input type="checkbox"> Graduate Students<br><br>

                </div>

                <div class="col-md-3"> 
                    <center>    <h3> Focus Area (2 max) </h3></center>
                    <input type="checkbox"> Academic Support<br><br>
                    <input type="checkbox"> Career & Professional Development<br><br>
                    <input type="checkbox"> Community Building<br><br>
                    <input type="checkbox"> Interpersonal Development<br><br>

                </div>

            </div>
        </div>
    </div>

 <div class="container marketing">

        <div class ="col-md-1">  </div>

        <div class="container">
            <div class="row">
                <center>    <h3> Intended Student Development Outcomes <br> (select 2 max)</h3></center>
                <br>
                <div class ="col-md-2"> </div>
                
                <div class ="col-md-4"> 

                  
                    <input type="checkbox"> Responsibility & Accountability <br><br>
                    <input type="checkbox"> Independence & Interdependence <br><br>
                    <input type="checkbox"> Goal Orientation<br><br>
                    <input type="checkbox"> Self Awareness <br><br>

                </div>


              

                <div class="col-md-4"> 
                  
                    <input type="checkbox"> Resilience<br><br>
                    <input type="checkbox"> Appreciation of Differences<br><br>
                    <input type="checkbox"> Tolerance of Ambiguity<br><br>
                  

                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
    <div class ="container marketing">
        <center><button type="button"  id ="example" class="btn btn-primary btn-lg">Contribute Suggestion!</button> </center>

    </div>
    <!-- Accordion Input v1 12/24/13
            <div id="accordion">
                <h3>Title:</h3>
                <div>           
                        <textarea id="message1" class="form-control" rows="1" maxlength="70"></textarea>
                              
                </div>
                <h3>Where:</h3>
                <div>
                    <textarea id="message2" class="form-control" rows="1" maxlength="70"></textarea>
                    
                </div>
                <h3>When:</h3>
                <div>
                    <textarea id="message3" class="form-control" rows="1" maxlength="70"></textarea>
                    
                </div>
                <h3>Organizer:</h3>
                <div>
                    <textarea id="message4" class="form-control" rows="1" maxlength="70"></textarea>
                     
                </div>
                <h3>Short Description:</h3>
                <div>
                    <textarea id="message5" class="form-control" rows="2" maxlength="280"></textarea>
                    <br>
                </div>
                <h3>Personal Comments:</h3>
                <div>
                    <textarea id="message6" class="form-control" rows="2" maxlength="280"></textarea>
                    <br>
                </div>
            </div>
    -->
    <br>
    <!--
    <p align="left" style="font-size: 15px"> <font style="font-weight: bold"> Characteristics: </font> Here is a place to help users get a better understanding of the intention 
        of the event, to move a dial, you must first move one of the sliders to the left to establish available 
        credit. Try and give users a better experience.
    </p>
</div>
    -->

    <div class="container marketing">  

        <!--
   <p>
     <label for="amount">Points to Spend:</label>  
     <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
   </p>
    </div>
       <div class="container marketing">
     
   
           <h4> Self-Esteem </h4>
           <div style="clear: both">
   
               <h3 style="float: left">Low</h3>
               <h3 style="float: right">High</h3>
           </div>
   
   
   
           <div id="slider-range-min"> </div>
   
          
           <hr>
           <br>
           <div>
   
   
               <h4> Social Connection , Relationships</h4>
               <div style="clear: both">
   
                   <h3 style="float: left">Low</h3>
                   <h3 style="float: right">High</h3>
               </div>
   
   
   
               <div id="slider-range-min2"> </div>
           </div>
           <hr class="featurette-divider">
   
          
   
   
           <br>
           <div>
   
   
               <h4> Independence, Self-Confidence </h4>
               <div style="clear: both">
   
                   <h3 style="float: left">Low</h3>
                   <h3 style="float: right">High</h3>
               </div>
   
   
   
               <div id="slider-range-min3"> </div>
           </div>
           <hr class="featurette-divider">
   
   
   
   
           <br>
           <div>
   
   
               <h4> Competence, Skills, Abilities</h4>
               <div style="clear: both">
   
                   <h3 style="float: left">Low</h3>
                   <h3 style="float: right">High</h3>
               </div>
   
   
   
               <div id="slider-range-min4"> </div>
           </div>
           <hr class="featurette-divider">
        
           <br>
           <div>
   
   
               <h4> Opportunities of Personal Growth</h4>
               <div style="clear: both">
   
                   <h3 style="float: left">Low</h3>
                   <h3 style="float: right">High</h3>
               </div>
   
   
   
               <div id="slider-range-min5"> </div>
           </div>
           <hr class="featurette-divider">
           
           <br>
           <div>
   
   
               <h4> Sense of Purpose or Meaning </h4>
               <div style="clear: both">
   
                   <h3 style="float: left">Low</h3>
                   <h3 style="float: right">High</h3>
               </div>
               <script>
                           $(document).ready(function() {
                   $("#example").popover({
                   placement: 'right',
                           html: 'true',
                           title: '<span class="text-info"><strong>Submission Complete!!</strong></span>' +
                           '<button type="button" id="close" class="close" onclick="$(&quot;#example&quot;).popover(&quot;hide&quot;);">&times;</button>',
                           content: 'now anyone that could benefit from this event will now be aware of it simply by navigating through their footprint! Thanks for taking the time to share!'
                   });
                   });
               </script>
               <div id="slider-range-min6"> </div>
           </div>
           <hr class="featurette-divider">
           <br>
           <br>
   
   
           <center><button type="button"  id ="example" class="btn btn-primary btn-lg">Submit!</button> </center>
           
        -->
        <br>
        <br>
        <br>
        <footer>

            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2013 Real EmPowerment Solutions , LLC. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>
</body>

</html>
