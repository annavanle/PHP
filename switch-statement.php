<form action="switch-statement.php" method="post">
What was your grade?<br>
<input type="text" name="grade"><br>
<input type="submit">
</form>
<?php
$grade = $_POST["grade"];
switch($grade){
    case"A":
        echo "You did amazing!";
        break;
    case "B":
        echo "You did pretty good";
        break;
    case "C":
        echo "You did poorly";
        break;
    case "D":
        echo "You did very bad";
        break;
    case "F":
        echo "YOU FAIL";
        break;
        //  trong switch không có else cho các trường hợp còn lại nên sẽ dùng default
    default:
    echo "Invalid Grade";
}