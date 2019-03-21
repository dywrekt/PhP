<?php
/**
 * Created by IntelliJ IDEA.
 * User: harma
 * Date: 21-3-2019
 * Time: 11:39
 */
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apeloops</title>
    <style>
        body{
            text-align: center;
        }

        .rood {
            border: red solid 5px;
        }

        .groen {
            border: green solid 5px;
        }
    </style>
</head>
<body>
<?php
for($i = 1; $i <=9; $i++){
    if ($i % 2 == 0){
        $class = "class='rood'";
    }   else{
        $class = "class='groen'";
    }
    echo "<img ".$class. "src='IMG/aap".$i.".jpg'>";
}

?>


</body>

</html>
