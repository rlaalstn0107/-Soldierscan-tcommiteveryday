<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $coworkers=array('egoing','leezche','duru','taeho');
    echo $coworkers[1].'<br>';
    echo $coworkers[3].'<br>';
    array_push($coworkers,"minsu","bbaa");
    print_r($coworkers);
    echo '<br>';
    var_dump(count($coworkers));
    echo '<br>';
    echo '<br>';
    var_dump($coworkers);

    ?>
  </body>
</html>
