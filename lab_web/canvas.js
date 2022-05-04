var canva = document.createElement('canvas');
var areaCanvas = document.getElementById('slider');
console.log(areaCanvas)
areaCanvas.appendChild(canva);

var ctx = canva.getContext('2d');



/************************** CLASSES************************ */


class img{
    constructor(x,y,l,a){
        this.x = x;
        this.y = y;
        this.larg = l;
        this.alt = a;
        this.img = new Image();
        this.time = 5000;
        this.passa = false;

    }
    update(){
        if(this.passa){
            this.x-= 1;
        }
    }
    draw(){
        ctx.drawImage(this.img,this.x, this.y, this.larg, this.alt);
    }
}

/********************************************************************** */


/*********************variaveis de objeto***************************** */
var doutor = new Array();
doutor.push(new img(canva.width, canva.height/2, 200,200));




function loop(){
    requestAnimationFrame(loop);
    for(var i in doutor){
        doutor[i].draw();
        doutor[i].update();
    }
}
loop();
