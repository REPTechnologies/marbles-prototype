<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dialog</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
    $("#dialog").dialog({minHeight: 100});
    $("#dialog").dialog({minWidth: 400});
    $( "#opener" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  });
  </script>
</head>
<body>
 
<div id="dialog" title="Developing Your Full Potential">
    <p> Finding your talents workshop <br> 4- 5pm, Friday, 11/10/13 <br>
        Coffman <br> <a href="">Description</a> </p>
        
 
</div>
 <button id="opener">Open Dialog</button>
 
</body>
</html>