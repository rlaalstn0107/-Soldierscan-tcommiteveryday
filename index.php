<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <h1><a href="index.php">WEB</a></h1>
  <ol>
    <?php  /*
    data 디렉토리에 있는 파일의  목록을 가져와라 PHP아
    파일의 목록 하나 하나를
    li와 a 태그를 이용해서 글목록을 만드세요.
    */
    $list = scandir('data');
    $i = 0;
    while($i<count($list)){
      if($list[$i] != '.'){
        if($list[$i] !='..'){
          ?>
          <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
          <?php
        }
      }
      $i=$i + 1;
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
