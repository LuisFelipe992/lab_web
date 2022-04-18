<link rel="stylesheet" href="style.css">
<div id="corpo">
    <h5>abaixo está alguns dos nossos serviços mais recorrentes.</h5>
<?php
    require_once'conecte.php';
    $sql = "select * from precos";
    $query = mysqli_query($con,$sql);
    echo "<table border='1' class='tabela'> <tr><th>PROCEDIMENTO</th><th>VALOR</th></tr>";
    while($r = mysqli_fetch_assoc($query)){
        echo "<tr><td>".$r['procedimento']."</td><td>R$".$r['valor']."</td></tr>";
    }
    echo "</table>"
?>
</div>