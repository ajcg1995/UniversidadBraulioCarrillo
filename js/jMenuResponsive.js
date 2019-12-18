$(document).ready(main);
var contador=1;
function main(){
	$('.imgmenu').click(function(){
	
		if(contador==1){
			
			$('ul').animate({
				left: '0'
			});		
			contador = 0;
		}
		else{
			contador=1;
		$('ul').animate({
				left: '-100%'
			});		
		}
	});

		$('#contenedor').click(function(){
		if(contador==0){
			$('ul').animate({
				left: '-100%'
			});	
			contador = 1;
		}

	});
	//Mostramos y ocultamos submenus

	$('.mostrarsubmenu').click(function(){
		$(this).children('#submenu').slideToggle();
	});
	
};