<?php
    $nome;
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $CONECTA = mysqli_connect('localhost','root','','logins');
    $teste = false;
    $id;

    function verifica(){
        global $nome;
        global $email;
        global $senha;
        global $CONECTA;
        global $teste;
        global $id;
        $sql = "select * from users";
        $query = mysqli_query($CONECTA,$sql);

        while($result = mysqli_fetch_assoc($query)){
            if($result['email'] === $email && $result['senha'] === $senha){
                $teste = true;
                $nome = $result['nome'];
                $id = $result['id'];
            }
        }
    }


    function retorna(){
        global $teste;
        global $nome;
        global $id;
        if($teste == true){
            echo "redirecionando...";
            echo "<script>window.location.href='usuario/usuario_index.php?id=".$id."'</script>";
        }
    }
    verifica();
    retorna();
?>