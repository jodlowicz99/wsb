<?php
 $potega=2**10;
 echo $potega;
 

 
$x=ob1010;
 echo $x;
 $x=$x>>1;
 echo echo $x; //5
 $x= $x<<2;
 echo $x; //20
 //operatory
 $x=10;
 $y=20;

 $result= $x<=>$y;
 echo $result,"<hr>";
 //rowne //identyczne
 $x=1;
 $y=1.0;
 if $x==$y
echo "równe<br>";
else
echo "Różne<br>";
if $x===$y
echo "Identyczne<br>";
else
echo "Nieidentyczne<br>";
echo gettype $x ;
echo gettype $y ;

//operatory rzutowania

$text1="123ssd";
$x1 = (int) $text1;
echo $x1,"<br>";
echo gettype $text1 ;
echo gettype $x1 ;
$text2 = 0;
$x2 = bool $text2;
echo $x2;

$text3 = 10;
$x3 = unset $text2;
echo $text3;
echo $x3;
echo gettype $text3 ;
echo gettype $x3 , "<hr>"; //NULL

/rozmiar typu integer 
echo PHP_INT_SIZE,"<br>"; //8
echo PHP_INT_MAX,"<br>"; //8

//kontrola typu zmiennych
$x=10;
echo is_int $x ; //
echo is_string $x ;
echo is_bool $x ;
echo is_float $x ;
echo is_null $x ;

//operator ignorowania błędów
$w;
echo @$w;
echo @gettype $w ; //NULL

//zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER;
echo $_SERVER 'SERVER_PORT' ,"<br>"; //80
echo $_SERVER 'SERVER_NAME' , "<br>"; //127.0.0.1
echo $_SERVER 'SCRIPT_NAME' ,"<br>"; //127.0.0.1
echo $_SERVER 'DOCUMENT_ROOT',"<br>"; //127.0.0.1
$filelocal = $_SERVER 'DOCUMENT_ROOT' ;
$filelocal .= $_SERVER 'SCRIPT_NAME' ;
echo $filelocal,"<hr>";
//stałe - nazwy z dużych liter
define 'SURNAME'; "KOWAL" ;
echo SURNAME;
define 'name', "Anna" ;
echo name;

//stałe predefiniowane
echo PHP_VERSION; //7.3.2
echo PHP_OS; //WINNT
echo __LINE__; //99
echo __FILE__;
echo __DIR__
?>



 ?>