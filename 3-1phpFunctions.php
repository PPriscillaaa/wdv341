<?php
//dates
$time = time();
function currentDate($time)
{
    global $time;
    echo (date("m/d/Y", $time));
}
function internationDate($time)
{
    global $time;
    echo (date("d/m/Y", $time));
}

//strings
$inputString = " Hello from DMACC! ";
function strings($inputString)
{
    global $inputString;
    echo ("a. Display the number of characters in the string: ");
    echo strlen($inputString);
    echo ('<br>');
    echo ("b. Trim any leading or trailing whitespace: ");
    echo trim($inputString);
    echo ('<br>');
    echo ("c. Display the string as all lowercase characters: ");
    echo strtolower($inputString);
    echo ('<br>');
    echo ('d. Will display whether or not the string contains "DMACC" either upper or lowercase: ');
    
}

//number
$testNumber ="1234567890";
function phoneNumber($num) {
    $num = preg_replace("/[^0-9]/", "", $num);

    if (strlen($num) === 10) {
        $areaCode = substr($num, 0, 3);
        $mid = substr($num, 3, 3);
        $last = substr($num, 6, 4);

        return "({$areaCode}) {$mid}-{$last}";
    }
    return $num;
}

//currency
$currency = 123456;
function formatCurrency($currency)
{
    global $currency;
    echo ('$' . number_format($currency, 2));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-1 PHP Functions</title>
</head>
<body>
    <p>1. Current Date: <?php currentDate($time); ?> </p>
    <p>2. International Date:<?php internationDate($time); ?></p>
    <p>3. Strings:</p> 
     <p><?php strings($inputString); ?></p>
    <p>4. Phone Number: <?php echo phoneNumber($testNumber);?></p> 
    <p>5. <?php formatCurrency($currency); ?> </p>

</body>
</html>