<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>COMBUSTIVEL</title>

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

        input, select {
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

    <h2>Combustível</h2>

 <form action="" method="post">

    <label for="qtComb"> Digite quantidade em litros de combustível: </label>
    <input type="number" name="qtComb" id="qtComb" min="1"><br><br>

    <select name="combustivel" id="combustivel">
        <option value="alcool">Álcool</option>
        <option value="gasolina">Gasolina</option>
    </select>

    <button type="submit">CALCULAR</button><br><br>

 </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $qtComb = $_POST["qtComb"];
    $combustivel = $_POST["combustivel"];

    $precoGasolina = 5.79;
    $precoAlcool = 3.90;

    if ($combustivel == "alcool") {
        $valorTotal = $qtComb * $precoAlcool;

        if ($qtComb <= 20) {
            $desconto = $valorTotal * 0.03;
        } else {
            $desconto = $valorTotal * 0.05;
        }
    }

    if ($combustivel == "gasolina") {
        $valorTotal = $qtComb * $precoGasolina;

        if ($qtComb <= 20) {
            $desconto = $valorTotal * 0.04;
        } else {
            $desconto = $valorTotal * 0.06;
        }
    }

    $valorFinal = $valorTotal - $desconto;

    echo "<div class='resultado'>";
    echo "<strong>Quantidade:</strong> $qtComb litros<br>";
    echo "<strong>Combustível:</strong> $combustivel <br>";
    echo "<strong>Valor sem desconto:</strong> R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
    echo "<strong>Desconto:</strong> R$ " . number_format($desconto, 2, ',', '.') . "<br>";
    echo "<strong>Valor final:</strong> R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";
    echo "</div>";
}
?>

</div>
</body>
</html>
