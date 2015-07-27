<?php
if (!isset($_GET['numbers'])) {
    echo '<form method="GET">
    Enter numbers: <input type="text" name="numbers">
    <input type="submit" name="submit">
</form>';
} else {
    $arrNumbers=array_map("intval", explode(",", $_GET['numbers']));
    $result=0;
    foreach ($arrNumbers as $value) {
        $result += $value;
    }
    echo 'The sum is: '.$result.'<br>';
    unset($_GET['numbers']);
    echo "<a href='./sumArrayNumbers.php'>Enter new values</a>";
}
