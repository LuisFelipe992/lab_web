<?php
    require_once'../conecte.php';
    $paciente;
    $dia = $_POST['select1'];
    $turno = $_POST['t'];
    $sabe = $_POST['op'];
    if($sabe == "sim")
        $proc = $_POST['select2'];
    $id = $_POST['id'];
    $data = date('d/m/Y');
    $hora = date('G.i.s');

    echo("voce escolheu ".$dia." no turno da ".$turno." sabendo qual o procedimento? ".$sabe); 
    #echo $proc;
    echo$id;
    $sql = "insert into agendamentos values('$dia','$id','$turno','$hora','$data')";
    mysqli_query($con,$sql);
    function cadastro(){

    }

?>