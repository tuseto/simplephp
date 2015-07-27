<?php
if (!isset($_GET['numbers'])) {
    echo '<form method="GET">
    Enter numbers: <input type="text" name="numbers">
    <input type="submit" name="submit">
    <br> Use "," to separate the values!
</form>';
} else {
    /*
    $last_digit - mark the last digit to remove the coma ',' after it in the output
    $uniqueArray - the array only with unique values
    $inputArray - entered values stored as array
    */
    $last_digit=0;
    $uniqueArray=array();
    $inputArray=array_map("intval", explode(",", $_GET['numbers']));

    /*
    check every value with the rest values in the array
    if the value is unique append it to $uniqueArray
    */
    for ($i=0; $i < count($inputArray); $i++) {
        $inArray=false;
        for ($n=$i+1; $n < count($inputArray); $n++) {
            if ($inputArray[$i]==$inputArray[$n]) {
                $inArray=true;
            }
        }
        if ($inArray==false) {
            $uniqueArray[]=$inputArray[$i];
            $last_digit=$inputArray[$i];
        }
    }

    echo "The unique values are: ";
    foreach ($uniqueArray as $value) {
        if ($value != $last_digit) {
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
