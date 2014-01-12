<!DOCTYPE html>
<html>
    <head>
        <script language="javascript" type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="arbor.js" ></script>
        <script language="javascript" type="text/javascript" src="graphics.js" ></script>
        <script language="javascript" type="text/javascript" src="renderer.js" ></script>
    </head>
    <body>
        <div class='container marketing'>
      <canvas id="viewport" width="950" height="700"></canvas>
      <script language="javascript" type="text/javascript">
          var sys = arbor.ParticleSystem(1000, 400,1);
          sys.parameters({gravity:true});
          sys.renderer = Renderer("#viewport") ;
          var animals = sys.addNode('Animals',{'color':'orange','shape':'dot','label':'my marbles'});
 
          var dog = sys.addNode('dog',{'color':'green','shape':'dot','label':'Independence'});
          var cat = sys.addNode('cat',{'color':'blue','shape':'dot','label':'Social Connection'});
          var fish = sys.addNode('fish',{'color':'gray','shape':'dot','label':'Self-Esteem'});
 
          sys.addEdge(animals, dog);
          sys.addEdge(animals, cat);
           sys.addEdge(animals, fish);


      </script>
        </div>
    </body>
</html>