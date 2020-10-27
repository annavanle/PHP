<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//*****Greating */
    echo "<h1>Van's Site</h1>";
    echo "<hr>";
    echo "<p> This is my site</p>";

//****** Variable ******///
$characterName = "Mike";
$characterAge = 35;
    echo "There once was a man named $characterName <br>";
    echo "He was $characterAge years old <br>";
$charaterName = "Tom";    
    echo "He really liked the name $characterName <br>";
    echo "But didn't like being $characterAge <br>";

//****Data type ***//
// 1. String 
   $phrase =" To be or not to be";
// 2.Number   
   $age = 30;
   $gpa = 30.3; 
// True false buliant
$isMale = false;
// null = NO value
echo $phrase;

// ＊＊＊＊Working with string　＊＊＊//

$phrase = "Giraffe Academy"; 
echo strtolower($phrase);
echo strtoupper($phrase);
echo strlen($phrase);
echo str_replace("Giraffe", "Panda", $phrase);
echo substr($phrase, 8, 3);

?>
<br>
<?php
// ***Working with number ***
echo "<pre>";
echo -40;
echo -40.876;
echo 5+9;
echo "</pre>";
?>
<br>
<?php
$num =10;
$num += 25;
echo "<br>";
echo $num;
echo "<br>";
echo abs (-100);
echo "<br>";
echo pow (2,4);
echo "<br>";
echo max (2, 10);
echo "<br>";
echo min (2, 10);
?>
<!-- //*** */ Working with number ***// -->
<form action="site.php" method="get">
Name: <input type="text" name="username"> <br>
Age: <input type="number" name="age">
<input type="submit">
</form>
Your user name is <?php echo $_GET["username"]?>
<br>
Your age is <?php echo $_GET["age"]?>
<!-- for password use $_POST instead of $_GET to not show the content to URL -->

<!-- Build a basic caculator -->
<form action="site.php" method="get">
<input type="number" name="num1"><br>
<input type="numeber" name="num2"><br>
<input type="submit">
</form>
answer <?php echo $_GET["num1"]+$_GET["num2"]?>

<!-- build a mad libs game  -->
<form action="site.php" method="get">
Color: <input type="text" name="color"> <br>
Plural: <input type="text" name="pluralNoun"> <br>
celebrity: <input type="text" name="celebrity"> <br>
<input type="submit"><br>
<?php
$color = $_GET ["color"];
$pluralNoun = $_GET ["pluralNoun"];
$celebrity = $_GET ["celebrity"];
echo "rose are $color <br>";
echo "$pluralNoun are blue <br>";
echo "I love $celebrity <br>";
?>

<!-- Array: similar to varialbe but more numbers -->
<?php
$friends = array("Kevel",1, false, "Karen", "Oscar","Jim");
// asset array, index poistion 0 1 2 3 4 5
$friends[0]="Mai";
echo $friends[0];
echo count($friends);
?>
<br>
<!-- using checkbox -->
<?php
$isMale = false;
$isTall = true;
// if  1 điều kiện 
if ($isMale){
echo "You are male";
} else {
    echo "You are not male";
}
echo "<br>";
// if 2 điều kiện And
if ($isMale && $isTall){
echo "you are a tall male";
} else {
    echo "You are not male";
}
echo "<br>";
// if 2 điều kiện or 
if ($isMale || $isTall){
    echo "you are a tall male";
    } else {
        echo "You are not male";
}
echo "<br>";
// elseif !$isTall means Not is tall 
if($isMale && $isTall){
        echo "you are a tall male";
} elseif ($isMale && !$isTall){
        echo "you are a short male";
} elseif(!$isMale && $isTall){
    echo "You are not male but are tall";
}
else{
        echo "you are not male and not tall";
    }
?>
</body>
</html>