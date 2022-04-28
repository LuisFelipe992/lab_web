<?php
    require_once'conecte.php';
    $nome;
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $teste = false;
    $id;

    function verifica(){
        global $nome;
        global $email;
        global $senha;
        global $con;
        global $teste;
        global $id;
        $sql = "select * from users";
        $query = mysqli_query($con,$sql);

        while($result = mysqli_fetch_assoc($query)){
            if($result['email'] === $email && $result['senha'] === $senha){
                $teste = true;
                $nome = $result['nome'];
                $id = $result['id'];
            }
        }
    }


    function retorna(){
        $s = 'admin';
        global $teste;
        $em = 'admin@email.com';
        global $nome;
        global $email;
        global $senha;
        global $id;
        if($teste == true){
            echo "redirecionando...";
            echo "<script>window.location.href='usuario/usuario_index.php?id=".$id."'</script>";
        }else if( $email=== $em && $senha === $s ){
            echo "<script>window.location.href='adm/adm.html'</script>";
        }
    }
    verifica();
    retorna();
?>