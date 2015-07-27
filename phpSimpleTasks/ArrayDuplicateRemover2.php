<?php
if (!isset($_GET['numbers'])) {
    echo '<form method="GET">
    Enter numbers: <input type="text" name="numbers">
    <input type="submit" name="submit">
    <br> Use "," to separate the values!
</form>';
} else {
    /*
    $lastDigit - mark the last digit to remove the coma ',' after it in the output
    $uniqueArray - the array only with unique values
    $inputArray - entered values stored as array
    */
    $inputArray=array_map("intval", explode(",", $_GET['numbers']));
    $uniqueArray=array_unique($inputArray);
    $lastDigit=$uniqueArray[count($uniqueArray)-1];

    echo "The unique values are: ";
    foreach ($uniqueArray as $value) {
        if ($value != $lastDigit) {
            echo $value.',';
        } else {
            echo $value;
        }
    }
   
    $uniqueElementsNum = count($uniqueArray);
    echo "<br>There are: $uniqueElementsNum entered unique values";
    echo "<br>";
    unset($_GET['numbers']);
    echo "<a href='./arrayDuplicateRemover.php'>Enter new values</a>";
}
