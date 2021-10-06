$(document).ready(main);

var contador = 1;

function main(){
    $('.menu').click(function(){
        // $('.lateral').toggle();
        if(contador==1){
            $('.lateral').animate({
                left:0
            })
            contador=0;
        }else{
            contador=1;
            $('.lateral').animate({
                left:'-70%'
            });
        }

    });
}