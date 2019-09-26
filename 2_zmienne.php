<html>

<head>
</head>
<body>
 <?php
 
 $potega = 2**10;
 echo $potega;
 
 
 ?>




</body>
<html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $potega= 2**10;
      echo $potega;


// zapis systemów liczbowych
    $hex=0xA; //10
    $oct=021;//17
    $bin=0b1010;//10
    echo $bin;


//operatory bitowe and &; or |; not ~; xor ^; <<;>>;

  $bin = 0b1010; //10
  $bin = $bin >> 1; //101 (5)
  $bin = $bin << 2; //10100 (20)
  
  echo $bin;

  
//identyczność
  $a=1;
  $b=1.0;
  if($a===$b)
  {
      echo 'Identyczne<br>';
  }
  else 
  {
    echo 'rozne<br>';
  }

  echo gettype($a), '<br>'; //intiger
  echo gettype($b), '<br>'; //double




  $x=1;
  $y=1;

  $rezultat= $x<=>$y;
  echo $rezultat,'<hr>';


  ######################################


  $x=2;
  echo $x++; //3
  echo ++$x; //
  echo $x; //
  $y= $x++; 
  echo $y; 
  $y= ++$x; 
  echo $y; 
  echo ++$y;  
  
  
  

     ?>
  </body>
</html>
