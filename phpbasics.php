<?php
$yourName = "Priscilla Thongsouk";

$number1 = 550;
$number2 = 255;
$total = $number1 + $number2;


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
    <h1>2-1 PHP Basics</h1>
    <h2><?= $yourName; ?></h2>
    <br>
    
<?php echo "Number 1: " . $number1 . "<br>";
echo "Number 2: " . $number2 . "<br>";


echo "Total: " . $total . "<br>";
?>

<script>
const langs = [
    <?php
    $langs = ["PHP", "HTML", "Javascript"];
    for ($i = 0; $i < count($langs); $i++){
        echo "'" . $langs[$i] . "'";
        if($i < count($langs) - 1) {
            echo ",";
        }
    }
    ?>
];

for (i=0; i < langs.length; i++){
    document.write(`<p>${langs[i]}</p>`);
}
</script>

</body>
</html>