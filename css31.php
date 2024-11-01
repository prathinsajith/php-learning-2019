<html>
   <head>
   
      <style>
         #rcorners1 {
            border-radius: 25px;
            background: #8AC007;
            padding: 20px;
            width: 150px;
            height: 150px;
         }
         #rcorners2 {
            border-radius: 25px;
            border: 2px solid #8AC007;
            padding: 20px; 
            width: 150px;
            height: 150px;
         }
         #rcorners3 {
            border-radius: 25px;
            background: c1.PNG;
            background-position: left top;
            background-repeat: repeat;
            padding: 20px; 
            width: 200px;
            height: 150px;
         }
      </style>
      
   </head>
   <body>
      <p id = "rcorners1">Rounded corners!</p>
      <p id = "rcorners2">Rounded corners!</p>
      <p id = "rcorners3">Rounded corners!</p>
   </body>
</html>



<html>
   <head>
   
      <style>
         #r1 {
            border-radius: 15px 50px 30px 5px;
            background: #a44170;
            padding: 20px; 
            width: 100px;
            height: 100px; 
         }
         #r2 {
            border-radius: 15px 50px 30px;
            background: #a44170;
            padding: 20px;
            width: 100px;
            height: 100px; 
         }
         #r3 {
            border-radius: 15px 50px;
            background: #a44170;
            padding: 20px; 
            width: 100px;
            height: 100px; 
         }
      </style>
      
   </head>
   <body>
      <p id = "r1"></p>
      <p id = "r2"></p>
      <p id = "r2"></p>
   </body>
<body>



<html>
   <head>
   
      <style>
         #borderimg1 { 
            border: 10px solid transparent;
            padding: 15px;
            border-image-source: url(Libraries/Pictures/temp.jpeg);
            border-image-repeat: round;
            border-image-slice: 30;
            border-image-width: 10px;
         }
         #borderimg2 { 
            border: 10px solid transparent;
            padding: 15px;
            border-image-source: url(temp.jpeg);
            border-image-repeat: round;
            border-image-slice: 30;
            border-image-width: 20px;
         }
         #borderimg3 { 
            border: 10px solid transparent;
            padding: 15px;
            border-image-source: url(/css/images/border.png);
            border-image-repeat: round;
            border-image-slice: 30;
            border-image-width: 30px;
         }
      </style>
      
   </head>
   <body>
      <p id = "borderimg1">This is image boarder example.</p>
      <p id = "borderimg2">This is image boarder example.</p>
      <p id = "borderimg3">This is image boarder example.</p>
   </body>
</html>



<html>
   <head>
   
      <style>
         #multibackground {
            background-image: url(/css/images/logo.png), url(/css/images/border.png);
            background-position: left top, left top;
            background-repeat: no-repeat, repeat;
            padding: 75px;
         }
      </style>
      
   </head>
   <body>
   
      <div id = "multibackground">
         <h1>www.tutorialspoint.com</h1>
         <p>
            Tutorials Point originated from the idea that there exists a class of 
            readers who respond better to online content and prefer to learn new 
            skills at their own pace from the comforts of their drawing rooms. 
            The journey commenced with a single tutorial on HTML in  2006 and elated 
            by the response it generated, we worked our way to adding fresh tutorials 
            to our repository which now proudly flaunts a wealth of tutorials and 
            allied articles on topics ranging from programming languages to web designing 
            to academics and much more..
         </p>
      </div>
      
   </body>
</html>



<html>
   <head>
      <style>
         #p1 {background-color:rgba(255,0,0,0.3);}
         #p2 {background-color:rgba(0,255,0,0.3);}
         #p3 {background-color:rgba(0,0,255,0.3);}
      </style>
   </head>

   <body>
      <p>RGBA colors:</p>
      <p id = "p1">Red</p>
      <p id = "p2">Green</p>
      <p id = "p3">Blue</p>
   </body>
</html>


<html>
   <head>
      <style>
         #g1 {background-color:hsl(120, 100%, 50%);}
         #g2 {background-color:hsl(120,100%,75%);}
         #g3 {background-color:hsl(120,100%,25%);}
      </style>
   </head>

   <body>
      <p>HSL colors:</p>
      <p id = "g1">Green</p>
      <p id = "g2">Normal Green</p>
      <p id = "g3">Dark Green</p>
   </body>
</html>

<html>
   <head>
      <style>
         #d1 {background-color:hsla(120,100%,50%,0.3);}
         #d2 {background-color:hsla(120,100%,75%,0.3);}
         #d3 {background-color:hsla(120,100%,25%,0.3);}
      </style>
   </head>

   <body>
      <p>HSLA colors:</p>
      <p id = "d1">Less opacity green</p>
      <p id = "d2">Green</p>
      <p id = "d3">Green</p>
   </body>
</html>

Live Demo
<html>
   <head>
      <style>
         #m1 {background-color:rgb(255,0,0);opacity:0.6;} 
         #m2 {background-color:rgb(0,255,0);opacity:0.6;} 
         #m3 {background-color:rgb(0,0,255);opacity:0.6;}
      </style>
   </head>

   <body>
      <p>HSLA colors:</p>
      <p id = "m1">Red</p>
      <p id = "m2">Green</p>
      <p id = "m3">Blue</p>
   </body>
</html>

<html>
   <head>
      <style>
         #grad1 {
            height: 100px;
            background: -webkit-linear-gradient(pink,green);
            background: -o-linear-gradient(pink,green);
            background: -moz-linear-gradient(pink,green); 
            background: linear-gradient(pink,green); 
         }
      </style>
   </head>

   <body>
      <div id = "grad1"></div>
   </body>
</html> 


<html>
   <head>
      <style>
         #grad1 {
            height: 100px;
            background: -webkit-linear-gradient(left, red , blue);
            background: -o-linear-gradient(right, red, blue); 
            background: -moz-linear-gradient(right, red, blue);
            background: linear-gradient(to right, red , blue);
         }
      </style>
   </head>

   <body>
      <div id = "grad1"></div>
   </body>
</html> 



Live Demo
<html>
   <head>
      <style>
         #grad1 {
            height: 100px;
            background: -webkit-linear-gradient(left top, red , blue); 
            background: -o-linear-gradient(bottom right, red, blue); 
            background: -moz-linear-gradient(bottom right, red, blue);
            background: linear-gradient(to bottom right, red , blue); 
         }
      </style>
   </head>

   <body>
      <div id = "grad1"></div>
   </body>
</html>