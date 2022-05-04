<?php
    require_once'../conecte.php';
    $id = $_GET['id'];
    $sql ="select * from users where id='".$id."'";
    $query = mysqli_query($con,$sql);
    
    $r = mysqli_fetch_assoc($query);
        
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header id="topo">
        
        <h1 id="titulo_topo"><?php echo $r['nome'];  ?></h1>
        <p id="msg_topo"></p>
        <ul>
            <a href="meusAgendamentos.php?id=<?php echo$id?>"><li>MEUS AGENDAMENTOS</li></a>
            <a href="agendamento.php?id=<?php echo $id?>"><li>AGENDAMENTOS</li></a>
            <a href="prontuario.php"><li>VALORES A PAGAR</li></a>
            <a href="feedback.html"><li>FEEDBACK</li></a>
        </ul>
    </header>
    
<script src="script.js"></script>
</body>
</html>