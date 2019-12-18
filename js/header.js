posicionarMenu();

$(window).scroll(function() {    
    posicionarMenu();
});

function posicionarMenu() {
    var altura_del_header = $('#imgHeader').outerHeight(true);
    var altura_del_menu = $('#menu').outerHeight(true);
	if($( window ).width()  > '700' ){
		if ($(window).scrollTop() >= altura_del_menu && screen.width >= 700){
			$('#menu').addClass('fixed');
			$('#contenedor').css('margin-top', (altura_del_menu) + 'px');
			$('#logo').css('display','block');
			$('#menu').css('opacity',0.75);
			
		} else {
			$('#menu').removeClass('fixed');
			$('#contenedor').css('margin-top', '0');
			$('#logo').css('display','none');
			$('#menu').css('opacity',1);
		}	
	
	}
}

/*
$(document).ready(main);
var cont=1;
function main(){
    $('.imgmenu').click(function(){

        if(cont==1 ){
            $('ul').css('background','red');
            cont =0;
        }
        else{
            cont =1;
        }
    });

}*/
