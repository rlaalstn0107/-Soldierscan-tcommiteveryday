<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  }
  else{
    echo "Welcome";
  }
}
function print_description(){
    if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello,PHP";
  }
}
function print_list(){
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
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>
    </title>
</head>

<body>
  <h1><a href="index.php">WEB</a></h1>
  <ol>
    <?php print_list();
     ?>
  </ol>
  <a href="create.php">Create</a>
  <form action="create_process.php" method="post">
    <p>
      <input type="text" name="title" placeholder="Title">
    </p>
    <p>
      <textarea name="description"
      placeholder="Description"></textarea>
    </p>
    <p>
      <input type="submit">
    </p>
 </form>
  </body>
</html>
