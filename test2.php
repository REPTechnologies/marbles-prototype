<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Draggable - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 
 <script>
  $(function() {
    $( "#draggable" ).draggable({ revert: true });
    $( "#draggable2" ).draggable({ revert: true, helper: "clone" });
  });
  </script>

</head>
<body>
 
<div id="draggable" class="span4">
    <img src="se.png"/>

</div>
 
 
</body>
</html>