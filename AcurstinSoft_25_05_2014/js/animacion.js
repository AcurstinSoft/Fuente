$(document).ready(function() {
	$('#loginButton').click(function(){
   	 $('#Login_mostrar').slideToggle('slow');
	});
	
	$('#Login_mostrar').mouseleave(function(){
	 $(this).fadeOut();
	});
	
	$('.clsImagen').click(function(){
		$('.clsContenedor').css("width", "300px"); 
	});
	
	$('.clsImagen').mouseleave(function(){
		$('.clsContenedor').css("width", "0"); 
	});
	
	$('.clsImagen').dblclick(function(){
		$('.clsContenedor').css("width", "0"); 
	});

	//Redireccionar a las diferentes pantallas del menu
	/*$('.inicio').click(function(){
		window.location.href = "http://www.acurstinsoft.esy.es";
	});
	
	$('.nosotros').click(function(){
		window.location.href = "http://www.acurstinsoft.esy.es/nosotros";
	});
	
	$('.servicios').click(function(){
		window.location.href = "http://www.acurstinsoft.esy.es/servicios";
	});
	
	$('.soporte').click(function(){
		window.location.href = "http://www.acurstinsoft.esy.es/soporte";
	});
	
	$('.contacto').click(function(){
		window.location.href = "http://www.acurstinsoft.esy.es/contacto";
	});*/
$('.nosotros').click(function(){lightbox_open()});
$('.soporte').click(function(){lightbox_open()});
});

$(document).ready(function(){
  $(".login").click(function(event){
    event.preventDefault();
    alert("Actualmente no disponible")
  });
});

//Pantalla emergente con fondo oscuro
function lightbox_open(){
    window.scrollTo(0,0);
    document.getElementById('light').style.display='block';
    document.getElementById('fade').style.display='block';  
}
function lightbox_close(){
    document.getElementById('light').style.display='none';
    document.getElementById('fade').style.display='none';
}

//Reconocer el dispositivo desde donde se esta viendo el sitio y redieccionarlo
function redireccionar(){
var device = navigator.userAgent

if (
device.match(/Iphone/i)|| 
device.match(/Ipod/i)|| 
device.match(/Android/i)|| 
device.match(/J2ME/i)|| 
device.match(/BlackBerry/i)||
device.match(/iPhone|iPad|iPod/i)|| 
device.match(/Opera Mini/i)|| 
device.match(/IEMobile/i)|| 
device.match(/Mobile/i)|| 
device.match(/Windows Phone/i)|| 
device.match(/windows mobile/i)|| 
device.match(/windows ce/i)|| 
device.match(/webOS/i)|| 
device.match(/palm/i)|| 
device.match(/bada/i)|| 
device.match(/series60/i)|| 
device.match(/nokia/i)|| 
device.match(/symbian/i)|| 
device.match(/HTC/i))
 { 
	window.location = "http://www.acurstinsoft.esy.es/m/"
}
else
{

}
}

//Script para saber la hora
function estadopant(){
	fecha = new Date()
	hora = fecha.getHours()
	
	if(hora >= 8 && hora <= 18){
		document.write("<img src='img/on.png' alt='Disponible' title='Disponibilidad (8 am - 6 pm)'> "+" Disponible.")
	}else{
		document.write("<img src='img/off.png' alt='Fuera de servicio' title='Actualmente no se presta servicio, por favor dejenos su mensaje.'> "+" Fuera de servicio.")
	}	
}

function pie(){
	anno = fecha.getFullYear()
	document.write("&copy; Acurstin Soft "+anno)	
}
