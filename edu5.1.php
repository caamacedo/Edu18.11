<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>INGRESSO</title>

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

    <h2>ingresso</h2>

    <form method="post">
        <label>Digite sua idade:</label>
        <input type="number" name="idade">

        <label>Valor do ingresso:</label>
        <input type="number"  name="ingresso">

        <button type="submit">Calcular</button><br><br>


    </form>

    <?php
    IF($_POST) {

        $idade = $_POST['idade'];
        $ingresso = $_POST['ingresso'];
        $desconto=$ingresso*0.30;

        if($idade<12) {
            $ingressofinal=$ingresso / 2;
        echo"O valor de meia entrada e: $ingressofinal";
        }
        elseif($idade>12 && $idade<59)  
             {

         echo "O valor de entrada e: $ingresso";
        }
        else{($idade>=60);
            $ingressofinal=$ingresso - $desconto;
            echo"O valor do desconto do ingresso e: $ingressofinal";
        }

        }



    

    ?>

</div>
</body>
</html>