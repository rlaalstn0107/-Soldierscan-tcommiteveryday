<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <h1><a href="index.php">WEB</a></h1>
  <ol>
    <?php
      $list=scandir('./data');  //  . 은현재 ..은 부모

      $arrayn=count($list);
      $i=0;
      while($i<$arrayn){
        if($list[$i] != '.'){
          if($list[$i] != '..'){
          echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
          }
        }
        $i=$i+1;
      }
     ?>
  </ol>
  <h2>
    <?php
    if(isset($_GET['id'])){
      echo $_GET['id'];
    }
    else{
      echo "Welcome";
    }
     ?>
  </h2>
  <?php
  if(isset($_GET['id'])){
  echo file_get_contents("data/".$_GET['id']);
} else {
  echo "Hello,PHP";
}

   ?>
 </body>
</html>
