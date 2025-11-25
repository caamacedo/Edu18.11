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

    <h2>Salario</h2>

    <form method="post">
        <label>Digite seu salário:</label>
        <input type="number" name="salario">

        <button type="submit">Calcular</button><br><br>


    </form>

    <?php
    IF($_POST) {

        $salario = $_POST['salario'];

            $percentual5 = "5%";
            $percentual10 = "10%";
            $percentual15 = "15%";
            $percentual20 = "20%";

        if($salario<=280)
       { $salariofinal = $salario*1.20;
        $aumento = $salariofinal - $salario;
        echo"Salario antigo: ".$salario."<br>"; 
        echo"Salario novo: ".$salariofinal. "<br>";
        echo"Aumento: ".$aumento. "<br>";
        echo"Percentual: ".$percentual20. "<br>";
       }

          elseif($salario>280 && $salario<=700)
       { $salariofinal = $salario*1.15;
        $aumento = $salariofinal - $salario;
        echo"Salario antigo: ".$salario."<br>"; 
        echo"Salario novo: ".$salariofinal. "<br>";
        echo"Aumento: ".$aumento. "<br>";
        echo"Percentual: ".$percentual15. "<br>";


        
       }
           elseif($salario>700 && $salario<=1500)
       { $salariofinal = $salario*1.10;
        $aumento = $salariofinal - $salario;
        echo"Salario antigo: ".$salario."<br>"; 
        echo"Salario novo: ".$salariofinal. "<br>";
        echo"Aumento: ".$aumento. "<br>";
        echo"Percentual: ".$percentual10. "<br>";
       }

            elseif($salario>1500)
       { $salariofinal = $salario*1.05;
        $aumento = $salariofinal - $salario;
        echo"Salario antigo: ".$salario."<br>"; 
        echo"Salario novo: ".$salariofinal."<br>";
        echo"Aumento: ".$aumento. "<br>";
        echo"Percentual: ".$percentual5."<br>";

       }
       }
       


       





    

    ?>

</div>
</body>
</html>