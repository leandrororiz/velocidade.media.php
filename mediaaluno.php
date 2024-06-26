<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
Nota 1: <input type="number" name="num1"><br>
  Nota 2: <input type="number" name="num2"><br>
  <input type="submit">

  <?php 
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];

  
  $media = ($num1 + $num2 )/2;
  
  echo "Média: $media";

  if ($media >= 6) {
    echo " Aprovado";
  } else {
    echo " Reprovado";
  }
 ?>
</form>
</body>
</html>