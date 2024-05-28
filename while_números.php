<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping utilizando While</title>
</head>
<body style="color: blue; font-size:20px">

echo "<h3>LOOPING UTILIZANDO WHILE</h3>";
     echo "<hr>";
     <form name="looping" method="post" action="">
        <label>Informe o limite do looping</label>
        <input type="number" name="limite" min="0" max="10000" required>
        <input type="submit" name="exibir" value="Exibir"><br><br>
</form>

    <?php
     if (isset($_POST["exibir"])) {
      $numero = 1; // Inicializa a variável
      $limite = $_POST["limite"];
      while($numero < $limite) { 
         echo "Número: " . $numero . "<br>";
         $numero += 1; // Acumula mais 1 na variável $numero
      }
    }
     echo "<hr>Fim do looping...";
    ?>
</body>
</html>