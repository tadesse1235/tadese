<?php
//Write to the file
//$file = fopen("dt.txt", "w");
//fwrite($file, "Hello, world!\n");
//echo "</br>";
//fwrite($file, "This is written from VS Code using PHP.\n");
//fclose($file);

// Read the file and output contents
//echo readfile("dt.txt");


/*echo "<h1> OUTPUT </h1>";
FOR($X=1;$X<=10;$X++){
    ECHO "THE NUMBER IS: +$X <br>";*/
  /*  echo "output";
    echo "</br>";
    $x=1;
    while($x<=10){
        echo "the number is: $x <br>";
        $x++;
    }*/

    /*$x=1;
    do{
        echo "the number is:$x <br>";
        $x++;
    }
    while($x<=4);*/


    /*$colors = array("red","green","black","white","blue","yellow");
    foreach($colors as $value){
        echo "$value <br>";*/
    /*$age = array("tade"=>"20","selman"=>"22","abebe"=>"12","ali"=>"50");
    echo "tade is".$age["tade"]."years old";*/
   /* foreach($age as $x=>$val){
        echo "$x=$val<br>";
    }   */
  // $cars = array("volv","bmw","toyota");
   //echo "i like".$cars[0].",".$cars[1]."and".$cars[2]."."; 
$cars = array(array("volv",23,16),array("bmd",14,18),array("saba",4,9),array("landon",23,32) );
  /* echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";*/


for($row =0;$row <4;$row++){
    echo "<p><b>Row number$row<?b></p>";
    echo "ul";
    for($col=0;$col<3;$col++){
        echo "</ul>".$cars[$row][$col]."</li>";

    }
    echo"</ul>";
}
?>


    

?>


























