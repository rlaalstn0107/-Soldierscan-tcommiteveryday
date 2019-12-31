<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic() {
        print("lorem ipsunm dolor<br>");
        print("lofefgeg gegegdolor<br>");
      }
      basic();
      basic();
     ?>
     <h2>parameter &amp; argument</h2>
     <?php
     sum(2,4);    //여기들어간 실제값이 argumnet이다 이건몰랐넹
     sum(5,6);

     function sum($a,$b){   // a는 parameter 변수라고 부르고
       print($a+$b);
       print("<br>");

     }
     ?>
     <h2>return</h2>
     <?php
     function sum2($left,$right){
       return $left+$right;  // 리턴만나면 함수끝남 밑에 써도 의미 무
     }
      print(sum2(2,4));
      file_put_contents('result.txt',sum2(2,4));
    //  email('egoint@etwet.net')
      //upload('egoin.net')
      ?>

  </body>
</html>
