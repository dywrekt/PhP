<?php
/**
 * Created by IntelliJ IDEA.
 * User: harma
 * Date: 21-3-2019
 * Time: 11:58
 */
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>busreis</title>
    <style>

    </style>
</head>
<body>
<?php
$leeftijd= 2;
$bedrag = 10;
if($leeftijd > 65){
    $bedrag = $bedrag * 0.5;
}

if($leeftijd <= 12){
    $bedrag = $bedrag * 0.5;
}

if($leeftijd < 3){
    $bedrag = 0;
}
echo $bedrag;

?>


</body>

</html>

