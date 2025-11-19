<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Figuras</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #BC8F8F;
            display: flex;
            justify-content: center;
            padding-top: 40px;
        }

        .box {
            background: white;
            padding: 25px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #BC8F8F;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #BC8F8F;
        }

        .resultado {
            margin-top: 20px;
            padding: 15px;
            background: #e8f8e8;
            border-left: 5px solid #BC8F8F;
            border-radius: 5px;
        }
    </style>
</head>

<body>
<div class="box">

    <h2>Figura Geométrica</h2>

    <form method="post">
        <label>Lado 1 (cm):</label>
        <input type="number" step="0.01" name="l1">

        <label>Lado 2 (cm):</label>
        <input type="number" step="0.01" name="l2">

        <label>Lado 3 (cm):</label>
        <input type="number" step="0.01" name="l3">

        <label>Lado 4 (cm):</label>
        <input type="number" step="0.01" name="l4">

        <label>Lado 5 (cm):</label>
        <input type="number" step="0.01" name="l5">

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_POST) {

       
        $lados = array_filter([
            $_POST['l1'] ?? null,
            $_POST['l2'] ?? null,
            $_POST['l3'] ?? null,
            $_POST['l4'] ?? null,
            $_POST['l5'] ?? null
        ]);

        $quant = count($lados);

        if ($quant == 0) {
            echo "<div class='resultado'>Preencha ao menos 1 lado.</div>";
            exit;
        }

        echo "<div class='resultado'>";

       
        if ($quant == 3) {
            echo "<strong>Figura:</strong> TRIÂNGULO<br>";

            $a = $lados[0];
            $b = $lados[1];
            $c = $lados[2];

           
            $p = ($a + $b + $c) / 2;
            $area = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));

            echo "<strong>Área:</strong> " . number_format($area, 2) . " cm²";

       
        } elseif ($quant == 4) {

            if (count(array_unique($lados)) == 1) {
                echo "<strong>Figura:</strong> QUADRADO<br>";

                $lado = reset($lados);
                $area = $lado * $lado;

                echo "<strong>Área:</strong> " . number_format($area, 2) . " cm²";
            } else {
                echo "Os 4 lados devem ser iguais para formar um quadrado.";
            }

      
        } elseif ($quant == 5) {
            echo "<strong>Figura:</strong> PENTÁGONO<br>";
            echo "Pentágono identificado.";

                $lado = reset($lados);
                $area = $lado * $lado;

                 echo "<strong>Área:</strong> " . number_format($area, 2) . " cm²";
        } else {
            echo "Preencha exatamente 5 lados.";
        }

        echo "</div>";
    }
    ?>

</div>
</body>
</html>