<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Function2</title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic(){
        print("i am human hi<br>");
        print("i am human hi1<br>");
      }

      $i=0;
      while($i<3){
        basic();
        $i=$i+1;
      }
     ?>

     <h2>parameter argument</h2>
     <?php
     function sum($a,$b){
       print($a+$b);
       print("<br>");
     }

     sum(2,4);
     sum(4,6);
    ?>

    <h2>return</h2>
  <?php

  print(sum2(2,4));
  sum(2,4)
  ?>

  </body>
</html>
