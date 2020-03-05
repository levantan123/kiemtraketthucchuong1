<?php
$f = fopen("numbers.txt", "r");
while(!feof($f)) {
    echo fgetc($f);
  }
  fclose($f);

class ArrayOperators {
  public $arr;
  $arr = explode (" ",$f);
  $dem =0;
  $sum=0;
  $lenght = count($arr);
  $gttb=0;
  function averageArray($arr){
    for($i=0;$i<$lenght;$i++){
        $dem++;
    }
    for($i=0;$i<$lenght;$i++){
        $sum+=$i;
        return $sum;
    }
    return $sum/$dem;      
  }

  function countEvens($arr){
      if($i%2==0){
          return 1;
      }else{
          $dem++;
      }
  }

  function decreaseArray($arr){
      return arsort($arr);
  }

  function bigSmallDiff($arr){
    for($i=0;$i<$lenght){       
        if($arr[$i]-$arr[$i+1]<$arr[$i+2]-$arr[$i+3]){
            return $arr[$i]-$arr[$i+1];
        }
    }
  }
  

}
$arr1 = new ArrayOperators();



?>