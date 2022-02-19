 
<link href="https://www.jqueryscript.net/demo/Fullscreen-Loading-Modal-Indicator-Plugin-For-jQuery-loadingModal/css/jquery.loadingModal.css" rel="stylesheet"/>

<script src="https://www.jqueryscript.net/demo/Fullscreen-Loading-Modal-Indicator-Plugin-For-jQuery-loadingModal/js/jquery.loadingModal.js"></script>

<div style="" data-backdrop="static" class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="loading" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"> 
      <div class="modal-body  text-center"> 
      	<div class="mb-5">
      		<img src="<?= Request::root();?>/local/resources/views/assets/img/logo.svg"/>
      	</div>
		<h1 class="header-title mb-5 fade-in" id="text" style="display: none;">
			
		</h1>
      	<div class="spinner-border text-primary" role="status">
		  <span class="visually-hidden">Loading...</span>
		</div>

      </div> 
    </div>
  </div>
</div>
<div id="lock" style="position: absolute;background: #fff;width: 100%;height: 100%;z-index: 2000;top: 0;left: 0;display: none;opacity: 0;"> 
</div>
<script>

// LOADING DE ARTISTA
$(".loading-artist").click(function(){  
	$("#lock").show();
	$('#loading').modal('show'); 
	$("#text").text("Espere mientras preparamos su panel...");
	$("#text").fadeIn(2500);
	$("#text").fadeOut(2500);
	setTimeout(function(){ 
		$("#text").text("Recuperando información de " + titulo);
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 5000,titulo = $(this).attr('title'));

	setTimeout(function(){ 
		$("#text").text("Analizando la información...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 10000);
	setTimeout(function(){ 
		$("#text").text("Almacenando datos de " + titulo + " en el sistema");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 15000);
	setTimeout(function(){ 
		$("#text").text("Finalizando configuración.");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 20000);
	setTimeout(function(){ 
		$("#text").text("Todo listo, espere un momento...");
		$("#text").fadeIn(2500); 
	}, 25000);
});

// LOADING AUDIENCE ANALISYS

$(".loading-audience-analysis").click(function(){  

	$("#lock").show();
	$('#loading').modal('show'); 
	$("#text").text($(this).attr('title'));
	$("#text").fadeIn(2500);
	$("#text").fadeOut(2500);

	setTimeout(function(){ 
		$("#text").text("Importando Audiencia...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 5000,titulo = $(this).attr('title'));

	setTimeout(function(){ 
		$("#text").text("Analizando la información...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 10000);
	setTimeout(function(){ 
		$("#text").text("Procesando información de Audience...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 15000);
	setTimeout(function(){ 
		$("#text").text("Guardando analysis.");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 20000);
	setTimeout(function(){ 
		$("#text").text("Todo listo, espere un momento...");
		$("#text").fadeIn(2500); 
	}, 25000);
});


$(".loading-catalogue").click(function(){  
	$("#lock").show();
	$('#loading').modal('show'); 
	$("#text").text($(this).attr('title'));
	$("#text").fadeIn(2500);
	$("#text").fadeOut(2500);

	setTimeout(function(){ 
		$("#text").text("Importando albumes...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 5000);

	setTimeout(function(){ 
		$("#text").text("Ordenando información...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 10000);
	setTimeout(function(){ 
		$("#text").text("Guardando albumes de " + artist);
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 15000,artist = $(this).attr('title'));
	setTimeout(function(){ 
		$("#text").text("Guardando analysis...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 20000);
	setTimeout(function(){ 
		$("#text").text("Todo listo, espere un momento...");
		$("#text").fadeIn(2500); 
	}, 25000);
});
</script>