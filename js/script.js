$(document).ready(function(){

	/********************************
	# Nuestro Equipo 
	**********************************/

	$(".VerPerfil").click(function(){ // Mostramos la informacion al click
		
		var info = $(this).val(); // Tomamos el Valor del ID

		$(this).css('display','none'); // Ocultamos e Boton
		
		$("#"+info+" img").slideUp('slow',function(){ // Ocultamos la Imagen
			
			$("#"+info+" p").css("display","block"); // Mostramos el Texto

			$("#"+info+" p button").css("display","block"); // Mostramos el boton

		});

	});


	$(".VerFoto").click(function() { // Ver la Foto de Nuevo
		
		var info = $(this).val(); // Tomamos la Informacion
		console.log(info);
		$(this).css('display','none'); // ocultamos le boton

		$("#"+info+" img").slideDown('slow',function(){ // Mostramos la img
			
			$("#"+info+" p").css("display","none"); // Ocultamos el parrafo
			
			$("#"+info+" .VerPerfil").css("display","block"); // Mostramos el boton

		});		 

	});

	/********************************
	# Hover | Redes Sociales & Area Practica 
	**********************************/

	$(".redes").hover(function(){

		var ConteHover = $(this).attr('alt');
		console.log(ConteHover);
		if(ConteHover == 'facebook'){
			$(this).attr('src','img/iconos/redes-sociales/gris-blanco/Facebook.png')
		}

		if (ConteHover == 'instagram') {
			$(this).attr('src','img/iconos/redes-sociales/gris-blanco/Instagram.png')
		}

		if (ConteHover == 'youtube') {
			$(this).attr('src','img/iconos/redes-sociales/gris-blanco/Youtube.png')
		}

		// Areas Activas

		if (ConteHover == 'derecho-financiero') {
			$(this).attr('src','img/iconos/azul/1.png');
		}

		if (ConteHover == 'derecho-comercial') {
			$(this).attr('src','img/iconos/azul/3.png');
		}

		if (ConteHover == 'derecho-administrativo') {
			$(this).attr('src','img/iconos/azul/4.png');
		}

		if (ConteHover == 'derecho-laboral') {
			$(this).attr('src','img/iconos/azul/5.png');
		}

		if (ConteHover == 'servios-publico') {
			$(this).attr('src','img/iconos/azul/6.png');
		}

		if (ConteHover == 'estudios-titulo') {
			$(this).attr('src','img/iconos/azul/2.png');
		}

	},function(){
		
		var ConteHover = $(this).attr('alt');
		console.log(ConteHover);
		if(ConteHover == 'facebook'){
			$(this).attr('src','img/iconos/redes-sociales/azul-blanco/Facebook.png');
		}

		if (ConteHover == 'instagram') {
			$(this).attr('src','img/iconos/redes-sociales/azul-blanco/Instagram.png');
		}

		if (ConteHover == 'youtube') {
			$(this).attr('src','img/iconos/redes-sociales/azul-blanco/Youtube.png');
		}

		// Areas Activas

		if (ConteHover == 'derecho-financiero') {
			$(this).attr('src','img/iconos/icon-gris/1.png');
		}

		if (ConteHover == 'derecho-comercial') {
			$(this).attr('src','img/iconos/icon-gris/2.png');
		}

		if (ConteHover == 'derecho-administrativo') {
			$(this).attr('src','img/iconos/icon-gris/3.png');
		}

		if (ConteHover == 'derecho-laboral') {
			$(this).attr('src','img/iconos/icon-gris/4.png');
		}

		if (ConteHover == 'servios-publico') {
			$(this).attr('src','img/iconos/icon-gris/5.png');
		}

		if (ConteHover == 'estudios-titulo') {
			$(this).attr('src','img/iconos/icon-gris/6.png');
		}

	});



/********************************
# Slide 
**********************************/


		function SlideUno(){
			setTimeout(function(){
				$("#slide").attr('src','img/slide/2.png');
				SlideDos();
			}, 6000);
		}

		function SlideDos(){
			setTimeout(function(){
				$("#slide").attr('src','img/slide/1.png');
				 SlideTres();
			}, 6000);
		}

		function SlideTres(){
			setTimeout(function(){
				$("#slide").attr('src','img/slide/3.png');
				 SlideReset();
			}, 6000);
		}

		function SlideReset(){
			setTimeout(function(){
				SlideUno();
			}, 6000);
		}

		SlideReset();

});	
