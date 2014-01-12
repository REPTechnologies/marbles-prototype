<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script language="javascript" type="text/javascript"  src="jquery1.4.min.js"></script>
        <script language="javascript" type="text/javascript" src="arbor.js" ></script>
        <script language="javascript" type="text/javascript" src="graphics.js" ></script>
        <script language="javascript" type="text/javascript" src="renderer.js" ></script>
        <script src="http://code.jquery.com/jquery.js"></script>
    </head>
    <body>
      <canvas id="viewport" width="800" height="600"></canvas>
      
          <script language="javascript" type="text/javascript">
          var sys = arbor.ParticleSystem(1000, 400,1);
          sys.parameters({gravity:true});
          sys.renderer = Renderer("#viewport") ;
          var animals = sys.addNode('Animals',{'color':'red','shape':'dot','label':'Animals'});
      
      </script>
      
    
    </body>
</html>
