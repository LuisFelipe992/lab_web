var imagem = document.getElementById('img');
var value ;
function transicao(value){
    
    
}
setInterval(()=>{
    if(value < 5){
        value+=1;
    }else{
        value = 0;
    }
    imagem.innerHTML = value;
    console.log(value)
},5000)
