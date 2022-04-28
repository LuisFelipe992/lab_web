<link rel="stylesheet" href="../style.css">

<?php
    require_once'../conecte.php';
    $sql = "select * from users";

    $query = mysqli_query($con,$sql);
    echo "<div id='corpo'><table class='tabela' border='1'>";
    while($r = mysqli_fetch_assoc($query)){
        echo "<tr><td>".$r['nome']."</td><td>".$r['id']."</td></tr>";
    }
    echo "</table></div>";
?>