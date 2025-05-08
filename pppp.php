
$firstString = "the cleaver brown fox";
$secondString = "jumps quickly over the lazy dog";
$thirdSTRING = $firstString;
$thirdString = $secondString;
echo $thirdString;
echo "</br>";
echo strtoupper("$thirdString");
echo "</br>";
echo ucfirst("$thirdString");
echo "</br>";
echo ucwords("$thirdString");
echo "</br>";
echo strlen("$thirdString");
echo "</br>";
echo ucfirst("$thirdString");
echo "</br>";
$var1 = "hello world";
echo gettype($var1);
echo "</br>";
$var2 = 25;
echo gettype($var2);
echo "</br>";
$x = 5;
$y = 3;
echo $x**$y;
echo "</br>";
echo $x % $y;
echo "</br>";
echo $x + $y;
echo "</br>";
echo $x - $y;
echo "</br>";
echo $x + $y;
echo "</br>";
echo $x / $y;
echo $x * $y;
echo "</br>";
echo $x ^ $y;
echo "</br>";
$z = "happy";
$c = "saddy";
echo $z.$c;
echo "</br>";
$x = 8;
$x = date("H");
if ($x<"20"){
    echo "have a nice daye!";
}
else{
    echo "have agood night";
}
echo "</br>";
$y = "green";
switch($y){
    case "red":
        echo "the  color is red";
        break;
    case "blue":
    echo "the color is blue";
    break;
case "green":
    echo "the color is green";
    break;
default:
echo "no favorite color";    
}

?>