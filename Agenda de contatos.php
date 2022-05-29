<!DOCTYPE html>
<html>
<head>
    <title>Agenda de contatos</title>
    <h1>Agenda de contatos</h1>  
    <meta charset="UTF-8">

</head>
    <body>
        <?php
            define("EOL", chr(13).chr(10));
        
            $pessoa -> nome = $_GET["nome"];
            $pessoa -> sexo = $_GET["sexo"];
            $pessoa -> data = $_GET["data"];
            $pessoa -> telefone = $_GET["telefone"];
            $pessoa -> email = $_GET["email"];
            
            $linha = json_encode($pessoa). EOL;

            echo $linha."<br>";
            $fp = fopen('data.txt', 'a');
            fwrite($fp, $linha);
            fclose($fp);
     ?>
  </body>
</html>