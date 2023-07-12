<?php

//  1
// Write a PHP program to check whether the first two characters and last two characters of a give string are same.

function FirstLastSame($txt){
    if(($txt[strlen($txt) - 1] == $txt[1]) && ($txt[strlen($txt) - 2] == $txt[0])) {
      echo "Yes same";
    } else {
      echo "not same";
    }
}

FirstLastSame("mama");
echo"<br>";
FirstLastSame("Baraa");
echo"<br>";


// ------------------------------------------------------

//  2
// Write a PHP program to check if a given string starts with 'Go' or not. (Don't use "str_starts_with" function)

function checkStrStartWithGo($goStartStr){
  if(($goStartStr[0] == 'G' || $goStartStr[0] == 'g') && ($goStartStr[1] == 'o' || $goStartStr[1] == 'O'))  {
      echo "Yes it's starts with 'Go' or 'go'";
    } else {
      echo "not start with 'Go' or 'go'";
    }
}
checkStrStartWithGo("Gamil");
echo"<br>";
checkStrStartWithGo("Goal");
echo"<br>";


// ------------------------------------------------------
//  3
// Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.

function CheckmultipleOf3And7($num){
    if ($num > 0) {
        if ($num % 3 == 0 && $num % 7 == 0) {
            echo 'Number is a multiple of 3 and a multiple of 7';
        } else {
        echo 'Not Multiple';
        }
    }else {
      echo 'negative number ';
  }
}
CheckmultipleOf3And7(21);
echo"<br>";



// ------------------------------------------------------
//4
// Write a PHP program to check the largest number among three given numbers.

function cheackLargest($x , $y , $z){
    $larg = $x;
    if($larg<$y ){
      $larg=$y ;
      };

    if($larg <$z ){
      $larg =$z;
    };
    echo "largest $larg";  
}
cheackLargest(20,4,75);
echo"<br>";


// ------------------------------------------------------
//5
// Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal.
//  can use buit-in function  abs()
function checkNearestTo100($num1 , $num2){
  $subtraction_remain1 = ($num1 > 100) ? $num1 - 100 : 100 - $num1;
  $subtraction_remain2 = ($num2 > 100) ? $num2 - 100 : 100 - $num2;
  if($num1 == $num2){
    return (0);
  }
  elseif(($subtraction_remain1 < $subtraction_remain2)){
    return $num1;

  }elseif (($subtraction_remain1 > $subtraction_remain2)) {
      return $num2;
  }


}
  $num1 = 90;
  $num2 = 90;
  $result = checkNearestTo100($num1, $num2);
  echo "The number nearest to 100 is: " . $result;
  echo"<br>";
  echo"<br>";



// ------------------------------------------------------
//6
  // Write a PHP program to find the larger value from two positive integer values that is in the range 20-30 inclusive or return 0 if neither is in that range.

  function checkRangNum20To30() {
    global  $randomNumber1;
    global  $randomNumber2;
    $randomNumber1 = rand(20, 30);
    $randomNumber2 = rand(20, 30);

    if ($randomNumber1 == $randomNumber2) {
        return "both";
    } else {
        if ($randomNumber1 > $randomNumber2) {
            return $randomNumber1;
        } else {
            return $randomNumber2;
        }
    }
}
$result1 = checkRangNum20To30();
echo "Random Number 1: " . $randomNumber1 . "<br>";
echo "Random Number 2: " . $randomNumber2 . "<br>";
echo "The Largest Number is: " . $result1 . "<br>";
echo"<br>";
echo"<br>";

// -----------------------
function checkRang($num1, $num2)
{
  if ((20 < $num1 && $num1< 30) && (20 < $num2 && $num2 < 30)) {
    $larg = $num1;
    if ($larg < $num2) {
      $larg = $num2;
    }
    echo "The Largest Number Is $larg";
  } else {
    echo 'Not in  20 - 30';
  }
}

checkRang(0,5);
echo"<br>";
checkRang(21,25);
echo"<br>";
echo"<br>";



// ------------------------------------------------------
//7
// Write a PHP program to count the number of occurrences of any digit in a string.
function countDigits($text) {

}

// ------------------------------------------------------
//8
// Write a PHP program to return the sum of digits of an integer number.
function digitsSum($num){
  $sum = 0;
  for ($i = 0; $i < strlen($num); $i++){
      $sum += $num[$i];
  }
  return $sum;
}
$num = "592";
$sumOfDigits = digitsSum($num);
echo("The sum of digits is $sumOfDigits");
echo"<br>";





// ------------------------------------------------------
//9
// Write a PHP program to reverse any string. (Don't use "strrev" function.)

function reverseString($orginString){
  $reverseString = '';
  for ($i = strlen($orginString) - 1; $i >= 0; $i--) {
    $reverseString .= $orginString[$i];
  }
  echo "Orginal Text Is ( $orginString ) When reverse it become 
  ( $reverseString ).<br/> ";
}
reverseString('Hello From GSG');