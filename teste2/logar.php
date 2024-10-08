<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste2</title>
    
    
</head>
<body>

<form method="POST" action="login.php">
<label>Login:</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="entrar" id="entrar" name="entrar"><br>
<a href="cadastro.html">Cadastre-se</a>
</form>


<?php
$login = $_POST["login"];
$senha = MD5($_POST["senha"]);
$connect = mysql_connect("nome_do_servidor","nome_de_usuario","senha");
$db = mysql_select_db("nome_do_banco_de_dados");

$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array["login"];

  if($login == "" || $login == null){
    echo"<script language="javascript" type="text/javascript">
    alert("O campo login deve ser preenchido");window.location.href="
    cadastro.html";</script>";

    }else{
      if($logarray == $login){

        echo"<script language="javascript" type="text/javascript">
        alert("Esse login já existe");window.location.href="
        cadastro.html";</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ("$login","$senha")";
        $insert = mysql_query($query,$connect);

        if($insert){
          echo"<script language="javascript" type="text/javascript">
          alert("Usuário cadastrado com sucesso!");window.location.
          href="login.html"</script>";
        }else{
          echo"<script language="javascript" type="text/javascript">
          alert("Não foi possível cadastrar esse usuário");window.location
          .href="cadastro.html"</script>";
        }
      }
    }



?>
    
</body>
</html>