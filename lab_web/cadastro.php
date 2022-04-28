

<?php
require_once'conecte.php';

###########criacao do banco de dados############
$CONECTAR = mysqli_connect('localhost','root','','logins');
$email;
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$teste = false;
    function cria(){
        $con = mysqli_connect('localhost','root','');
        $create = "create database if not exists logins";
        mysqli_query($con,$create);
    }

##########criacao da tabela cadastro################
    function conecta(){
        global $con;
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
        global $email;
        global $nome;
        global $senha;
        global $teste;
        global $con;
        $sql = "select * from users";
        $query = mysqli_query($con,$sql);

        while($result = mysqli_fetch_assoc($query)){
            if($result['email'] === $email){
                $teste = true;
                
            }else{
                
            }
        }
    }

    function cadastra($v){
        global $email;
        global $nome;
        global $senha;
        global $con;
        if($v == false){
            
            if($email != '' && $senha != ''){
                $sql = "insert into users values('0','$nome','$email','$senha')";
                
                mysqli_query($con,$sql);
                echo 'ok';
            }
        }else{
            echo 'esse usuario já existe!';
            echo "<a href='login.html'>login</a>";
        }
    }

    cria();
    conecta();
    verifica();
    cadastra($teste);
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
?>
</html>