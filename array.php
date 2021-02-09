<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $coworkers=array('egoing','leezche','duru','taeho');
    echo $coworkers[0].'<br>'.$coworkers[1].'<br>';
    array_push($coworkers,'LEE');
    var_dump($coworkers);
    ?>

  </body>
</html>
