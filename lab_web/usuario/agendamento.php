<?php
    require_once'../conecte.php';
    $sql = "create table if not exists agendamentos(
        dia_semana varchar(15) not null,
        id_paciente varchar(5),
        turno varchar(15),
        horario varchar(8),
        data varchar(10)
    )";
    mysqli_query($con,$sql);

    $s = "select * from precos";
    $precos = mysqli_query($con,$s);

    $id = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    
    <div id="corpo">
            
    <form action="faz_agendamento.php" method="POST">
        <input type="radio" checked style="display: none;" name="id" value="<?php echo $id ?>" id="">
        <label for="selecao">ESCOLHA UM DIA DA SEMANA:</label><br>

        <select name="select1" id="selecao">
            <!--<option value=""style="display:none">DIA</option>-->
            <option  value="SEGUNDA">SEGUNDA</option>
            <option  value="TERCA">TERÇA</option>
            <option  value="QUARTA">QUARTA</option>
            <option  value="QUINTA">QUINTA</option>
            <option  value="SEXTA">SEXTA</option>
        </select>   <br>
        TURNO: <br>
        <input type="radio" value="MANHA" name="t" id="op3">
        <label for="op3">MANHÃ</label><br>
        <input type="radio" value="TARDE" name="t" id="op4" checked>
        <label for="op4">TARDE</label><br>


        VOCÊ JÁ SABE O PROCEDIMENTO QUE IRÁ REALIZAR?<br>
        <input type="radio" value="sim" name="op" id="op1">
        <label for="op1" >SIM</label><br>
        <input type="radio" value="nao"name="op" id="op2" checked>
        <label for="op2">NÃO</label><br>

        PROCEDIMENTO:   <br>
        <select name="select2" id="opcional" disabled>
            <?php 
                while($r = mysqli_fetch_assoc($precos)){
                    echo "<option value='".$r['procedimento']."'>".$r['procedimento']."</option>";
                }
            ?>
        </select>
        <br><br>
        <input type="submit" value="AGENDAR">
    </form>


    
    </div>

         



<script>
    var op = document.getElementsByName('op');
    var sel = document.getElementById('opcional')
    
        op[0].addEventListener('click',()=>{
            if(op[0].checked){
                sel.disabled = false;
            }else{
                sel.disabled = true;
            }
        });

        op[1].addEventListener('click',()=>{
            if(op[1].checked){
                sel.disabled = true;
            }else{
                sel.disabled = false;
            }
        });
        
</script>

</body>
</html>