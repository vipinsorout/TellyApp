<?php

function encodestring($string){
 $index  = 0;
 $encodedString = '';
 $wordCountList = array();
 while(!empty($string[$index])){
  $word = $string[$index];
  if(empty($wordCountList[$word])){
   $wordCountList[$word] = 1;
  }else{
   $wordCountList[$word]++;
  }
  $index++;
 }
 
 foreach($wordCountList as $word => $count){
  $encodedString .=$word.$count;
 }
 return $encodedString;
}


function productOfThree($array){
 $length = count($array);
 $max = '';
 sort($array);
 $thirdIndex = $length -1;
 $length  = $length -2;
 for($first = 0;$first < $length; $first++)
 {
 $firstElement = $array[$first];
 $secoundElement = $array[$first + 1];
 $thirdElement  = $array[$thirdIndex];
 $product = $firstElement * $secoundElement * $thirdElement;
 if(empty($product)){
  $max = $product;
 } else if($product > $max){
  $max = $product;
 }
 }
 return $max;
}

//echo encodestring('abbbccddddeee');

echo productOfThree(array(34,100,-50,-223,10));