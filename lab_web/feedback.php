<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div id="corpo">
    <form action="#" method="POST" class="form">
        <h1>&#128529;</h1>
      
      <div style="text-align: center;">
        <input type="range" name="range" value="0" min="0" max="4" id=""><br>
        <textarea maxlength="200" rows="10" cols="30" autofocus placeholder="digite aqui" style="resize: none;"></textarea><br>
      </div>
      <br>
      <input type="submit" id="submit" class="input_submit" value="ENVIAR" >   
      <input type="button" id="voltar" class="input_submit" value="VOLTAR" >

  </div>

    <script>
        var emoge = new Array('&#128529;','&#128528','&#128515','&#128516','&#128525	');
        var area = document.querySelector('h1');
        var barra = document.querySelector('input');
        var btnVoltar = document.getElementById('voltar');

      btnVoltar.addEventListener('click',()=>{
        window.history.back()
      });

        console.log(barra)
        function loop(){
            requestAnimationFrame(loop);
            area.innerHTML = emoge[barra.value];
        }
        loop()
    </script>


</body>
</html>