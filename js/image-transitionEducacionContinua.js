vectImg = new Array();
function cycleImages(){
      var $active = $('#anuncio .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#anuncio img:first');
      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(1500,function(){//fade out the top image
	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
          $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }
 function popup(img){

 }
 function boletin2(img){


 }





$(document).ready(function(){
// run every 7s

		vectImg[0] = { fuente: "resources/boletines/boletin1.jpg"};
		vectImg[1] = { fuente: "resources/boletines/boletin2.jpg"};
		vectImg[2] = { fuente: "resources/boletines/boletin3.jpg"};
		vectImg[3] = { fuente: "resources/boletines/boletin4.jpg"};
		

		/*vectImg[2] = { fuente: "resources/boletines/boletin7.jpg"};*/
		
/*----------- OJO --------- 

en Caso de querer incluir mas imagenes a esta seccion de Educacion continua, hay que aumentar
el numero del for 

*/

	for(var i=0 ; i< 7; i++) {
		if(i == 0){
			$('<img class = "active" src="'+vectImg[i].fuente+'">').appendTo('#anuncio');
		}else{
				$('<img src="'+vectImg[i].fuente+'">').appendTo('#anuncio');	
			}				
	}
	
	$('#anuncio').on('click', 'img', function(){ 
	       
        $('#popup').append('<div id = "img-anuncio-popup"><img src = '+ $(this).attr('src')+ ' width = "100%" ></img><div>')
         $('#popup').css('display','block');
       		$('#boton-atras').css('display','block');

      })


	$('#popup').click(function(){

		$('#popup').css('display','none');
		$('#img-anuncio-popup').remove();
	});

	$('#boton-atras').on('click',function(){
		$('#img-anuncio-popup').remove();
		$('#popup').css('display','none');



	})



setInterval('cycleImages()', 7000);
})


