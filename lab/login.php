<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<style>
    body{
  display:flex;
  align-items: center;
  justify-content: center;
  height: 95vh;
}
.btn{
  width: 100px;
  background-color: lightblue;
  color: white;
}
</style>

</head>
<body>
  <div>
    <form action="#" method="POST">
      nome:
      <input type="text" placeholder="Joaquim de sousa" name="nome"><br>
      email: 
      <input type="email" placeholder="exemple@email.com" id="email"   name="email"><br>
      senha: <input type="password" id="senha"  name="senha"> <br>
      <input type="submit" id="submit" class="btn" value="LOGIN">
    </form>
  </div>
</body>

<?php
###########criacao do banco de dados############
    function cria(){
        $con = mysqli_connect('localhost','aluno','aluno');
        $create = "create database if not exists logins";
        mysqli_query($con,$create);
    }

##########criacao da tabela################
    function conecta(){
        $con = mysqli_connect('localhost','aluno','aluno','logins');
        $sql = "create table if not exists  users(
            id INT AUTO_INCREMENT,
            nome VARCHAR(200),
            email VARCHAR(150) NOT NULL,
            senha VARCHAR(16) NOT NULL,
            PRIMARY KEY(id)
        )";
        mysqli_query($con,$sql);

    }
    
    function verifica(){
        
    }

    function cadastra(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if($email != '' && $senha != ''){
            $sql = "insert into users values('0','$nome','$email','$senha')";
            $con = mysqli_connect('localhost','aluno','aluno','logins');
            mysqli_query($con,$sql);
        }
        
    }

    cria();
    conecta();
    cadastra();
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
?>
</html>