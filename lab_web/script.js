var imagem = document.getElementById('img');
var value = 0 ;
var img = document.getElementById('img-slider');
var btn_tema = document.getElementsByTagName('input')[0];
var check = false;

img.src = 'imagens/dentista0.png';
//document.documentElement.style.setProperty('--tema','blue')

setInterval(function v(){
    if(value < 1){
        value+=1;
    }else{
        value = 0;
    }
    imagem.innerHTML = value;
    console.log(value)


    img.src = 'imagens/dentista'+value+'.png';
    
},5000)

btn_tema.addEventListener('click',()=>{
    if(check==false){
        document.documentElement.style.setProperty('--tema','darkblue')
        document.documentElement.style.setProperty('--back', 'rgb(0,0,20)')
        document.documentElement.style.setProperty('--fonte_padrao', 'rgb(255,255,255)')
        document.documentElement.style.setProperty('--fonte_titulo', 'pink')
        
        check = true;
    }else if(check){
        document.documentElement.style.setProperty('--tema','#A3E2E6')
        document.documentElement.style.setProperty('--back', 'white')
        document.documentElement.style.setProperty('--fonte_padrao', 'black')
        document.documentElement.style.setProperty('--fonte_titulo', '#9F17E6')
        check = false;
    }
    console.log(check)
})

