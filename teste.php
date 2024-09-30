<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>teste quiz</title>
</head>
<body>
   <?php 
   $questao = "Em qual time Kobe Bryant iniciou sua carreira?";
   $opcao = ["Charlotte Hornets","Boston Celtics", "Chicago Bulls","Dallas Mavericks"];
   $respostacorreta = "Charlotte Hornets";

   $respostausuario = "";
   $mensagem = ""; 

   if($_SERVER ["REQUEST_METHOD"] == "POST") {
      $respostausuario = $_POST ['resposta'];

   if($respostausuario == $respostacorreta)	 {
     $mensagem = "Correto! Você escolheu a resposta correta." ;
   }else{
	 $mensagem = "Incorreto! A resposta certa é: $respostacorreta.";
   } 

   }

   
?>


<input type="text">


</body>
</html>
