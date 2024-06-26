<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        .verde {
            color: green;
        }
        .amarelo {
            color: yellow;
        }
        .vermelho {
            color: red;
        }
    </style>
<body>
<h1>Velocidade Media</h1>

<form method="post">
Velocidade: <input type="number" name="v1"><br>
<input type="submit">
</form>

<?php

$v1 = $_POST['v1'];
 if ($v1 <=60) {
    echo "<span class='verde'>Velocidade permitida</span>";
    
    
} 
else if ($v1 >60 && $v1 <= 80 ) {
    echo "<span class='amarelo'>Diminua Velocidade</span>";
} 
else if ($v1 >80) {
    echo "Velocidade: 80";
    echo "<span class='vermelho'>Velocidade: 80</span>";
}

?>

</body>
</html>