<?php
require_once'../conecte.php';
    $id = $_GET['id'];
    $sql = "select * from agendamentos where id_paciente='$id'";
    $query = mysqli_query($con,$sql);
    
    if($query != ""){
        while($r = mysqli_fetch_assoc($query))
    echo "<h1> Você possui uma consulta agendada para ".$r['dia_semana']."-FEIRA pela ".$r['turno']." </h1>";
    }else if($query != " "){
        echo "<h1> Você não possui nenhum agendamento </h1>";
    }
    
    
    
?>