<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>INTERROGATÓRIO</title>
 
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
 
    <h2>Interrogatório</h2>
 
    <form method="post">
        <label>Telefonou para a vítima?</label>
       <select name="p1" id="" required>
       <option value="" >Selecione uma opção</option>
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
       </select><br><br>
 
       <label>Esteve no local do crime?</label>
       <select name="p2" id="" required>
       <option value="">Selecione uma opção</option>
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
       </select><br><br>
 
       <label>Mora perto da vítima?</label>
       <select name="p3" id="" required>
       <option value="">Selecione uma opção</option>
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
       </select><br><br>
 
       <label>Devia para a vítima?</label>
       <select name="p4" id="" required>
       <option value="">Selecione uma opção</option>
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
       </select><br><br>
 
       <label>Já trabalhou com a vítima?</label>
       <select name="p5" id="" required>
       <option value="">Selecione uma opção</option>
        <option value="sim">Sim</option>
        <option value="nao">Não</option>
       </select><br><br>
 
        <button type="submit">Verificar</button><br><br>
 
 
    </form>
 
    <?php
    IF($_POST) {
 
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $p3 = $_POST['p3'];
        $p4 = $_POST['p4'];
        $p5 = $_POST['p5'];
 
        $contador = 0;
 
        if($p1 == "sim"){
            $contador++;
        }
        if($p2 == "sim"){
            $contador++;
        }
        if($p3 == "sim"){
            $contador++;
        }
        if($p4 == "sim"){
            $contador++;
        }
        if($p5 == "sim"){
            $contador++;
        }
 
        if($contador == 2){
            echo "Suspeita";
        } else if ($contador == 3 ||$contador == 4){
            echo "Cúmplice";
        } else if ($contador == 5){
            echo " Assassino";
        }else{
            echo "Inocente";
        }
 
 
 
   
 
 
 
 
        }
 
 
 
 
 
   
 
    ?>
 
</div>
</body>
</html>
 