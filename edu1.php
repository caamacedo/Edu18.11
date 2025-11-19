<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Peso Ideal</title>
</head>
<body>
    <h2>Peso ideal</h2>

  <form method="post">
    <label>Altura (em metros):</label><br>
    <input type="number" step="0.01" name="altura" required><br><br>

    <label>Sexo:</label><br>
    <input type="radio" name="sexo" value="1" required> Feminino <br>
    <input type="radio" name="sexo" value="2" required> Masculino <br><br>

    <button type="submit">Calcular</button>
</form>

   <?php
    if ($_POST) {
    $altura = $_POST['altura'];
    $sexo   = $_POST['sexo'];

         if ($sexo == 2) {
    
        $pesoIdeal = (72.7 * $altura) - 58;
    } elseif ($sexo == 1) {
  
     
        $pesoIdeal =  (62.1 * $altura) - 44.7;
    }
    

    echo "<h3>Peso ideal: " . number_format($pesoIdeal, 2) . " kg</h3>";
     
    }
    ?>
    
</body>
</html>