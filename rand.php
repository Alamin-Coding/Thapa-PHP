<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heads vs Tails win</title>
</head>
<style>
    .main{
        width: 400px;
        margin: 50px auto;
        background: #ddd;
        padding: 50px;
        text-align:center;
    }
</style>
<body>
    <div class="main">
    <?php
$heads =0;
$tails =0;

// echo $randNumber;
for($i=1; $i<=100; $i++){
    $randNumber = rand(1,2);
    // echo $randNumber;
    if ($randNumber == 1) {
        $heads++;
        // echo ' heads i win '. '<br>';
    } else{
        $tails++;
        // echo ' tails you win '. '<br>';
    } 
}
echo "heads = {$heads}". "<br>";
echo "Tails = {$tails}". "<br>";
echo "<hr></hr>";

if ($heads > $tails) {
    echo $heads. " heads i win ". "<br>";
} elseif($heads < $tails){
    echo $tails. " tails you win ". "<br>";

} else {
    echo " The match is drow";
}



?>
    </div>
    
</body>
</html>