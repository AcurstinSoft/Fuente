$(document).ready(function() {
	$('#loginButton').click(function(){
   	 $('#Login_mostrar').slideToggle('fast');
	});

	$('#Login_mostrar').mouseleave(function(){
	 $(this).fadeOut();
	});

	$('#fade').click(function(){lightbox_close();});
	$('#light').click(function(){lightbox_close();});
	$('#light1').click(function(){lightbox_close1();});
	$('#fade').click(function(){lightbox_close1();});
	$('#light2').click(function(){lightbox_close2();});
	$('#fade').click(function(){lightbox_close2();});
	$('#light3').click(function(){lightbox_close3();});
	$('#fade').click(function(){lightbox_close3();});
	$('#light4').click(function(){lightbox_close4();});
	$('#fade').click(function(){lightbox_close4();});
	$('#light5').click(function(){lightbox_close5();});
	$('#fade').click(function(){lightbox_close5();});

	$('.nosotros').click(function(){lightbox_open()});
	$('.soporte').click(function(){lightbox_open()});

	$('.item1').click(function(event){lightbox_open1(event)});
	$('.item2').click(function(event){lightbox_open2(event)});
	$('.item3').click(function(event){lightbox_open3(event)});
	$('.item4').click(function(event){lightbox_open4(event)});
	$('.item5').click(function(event){lightbox_open5(event)});
});


/*// Creamos un array vacio
var ElementosClick = new Array();
// Capturamos el click y lo pasamos a una funcion
document.onclick = captura_click;
	
function captura_click(e) {
	// Funcion para capturar el click del raton
	var HaHechoClick;
	if (e == null) {
		// Si hac click un elemento, lo leemos
		HaHechoClick = event.srcElement;
	} else {
		// Si ha hecho click sobre un destino, lo leemos
		HaHechoClick = e.target;
	}
	// Añadimos el elemento al array de elementos
	ElementosClick.push(HaHechoClick);
	// Una prueba con salida en consola
	console.log("Contenido sobre lo que ha hecho click: "+clickedElement.innerHTML);	
}*/

$(document).ready(function(){
  $(".login").click(function(event){
    event.preventDefault();
    alert("Fuera de servicio")
  });
});
//item1
function lightbox_open1(event){
    window.scrollTo(0,0);
    $('#light1').css("display","block");
    $('#fade').css("display","block");
};
function lightbox_close1(){
  	$('#light1').css("display","none");
    $('#fade').css("display","none");
};

//item2
function lightbox_open2(event){
    window.scrollTo(0,0);
    $('#light2').css("display","block");
    $('#fade').css("display","block");
};
function lightbox_close2(){
  	$('#light2').css("display","none");
    $('#fade').css("display","none");
};
//item3
function lightbox_open3(event){
    window.scrollTo(0,0);
    $('#light3').css("display","block");
    $('#fade').css("display","block");
};
function lightbox_close3(){
  	$('#light3').css("display","none");
    $('#fade').css("display","none");
};
//item4
function lightbox_open4(event){
    window.scrollTo(0,0);
    $('#light4').css("display","block");
    $('#fade').css("display","block");
};
function lightbox_close4(){
  	$('#light4').css("display","none");
    $('#fade').css("display","none");
};
//item5
function lightbox_open5(event){
    window.scrollTo(0,0);
    $('#light5').css("display","block");
    $('#fade').css("display","block");
};
function lightbox_close5(){
  	$('#light5').css("display","none");
    $('#fade').css("display","none");
};

//Pantalla emergente con fondo oscuro
function lightbox_open(){
    window.scrollTo(0,0);
    $('#light').css("display","block");
    $('#fade').css("display","block");
};
function lightbox_close(){
  	$('#light').css("display","none");
    $('#fade').css("display","none");
};
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


function subir() {
if (document.body.scrollTop != 0 || document.documentElement.scrollTop != 0) {
window.scrollBy(0, -15);
arriba = setTimeout('subir()', 10);
}
else clearTimeout(arriba);
}







