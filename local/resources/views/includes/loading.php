 
<link href="https://www.jqueryscript.net/demo/Fullscreen-Loading-Modal-Indicator-Plugin-For-jQuery-loadingModal/css/jquery.loadingModal.css" rel="stylesheet"/>

<script src="https://www.jqueryscript.net/demo/Fullscreen-Loading-Modal-Indicator-Plugin-For-jQuery-loadingModal/js/jquery.loadingModal.js"></script>

<div style="" data-backdrop="static" class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="loading" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body  text-center"> 
      	<div class="mb-5">
			<object id="aside-icon" style="width: 56px; height:56px;" data="https://zuliamercado.com/local/resources/views/assets/img/logo2.svg" type="image/svg+xml"></object>
      	</div>
		<h1 class="header-title mb-5" id="text">
			Audience Analysis <span class="badge bg-primary-soft fw-bold">AI</span>
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
	$("#text").text("Wait while we prepare your panel...");
	$("#text").fadeIn(2500);
	$("#text").fadeOut(2500);
	setTimeout(function(){ 
		$("#text").text("Retrieving information from " + titulo);
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 5000,titulo = $(this).attr('title'));

	setTimeout(function(){ 
		$("#text").text("Analyzing the information...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 10000);
	setTimeout(function(){ 
		$("#text").text("Storing data from " + titulo + " in the system");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 15000);
	setTimeout(function(){ 
		$("#text").text("Finalizing settup.");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 20000);
	setTimeout(function(){ 
		$("#text").text("All set, only a moment...");
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
		$("#text").text("Importing Audience...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 5000,titulo = $(this).attr('title'));

	setTimeout(function(){ 
		$("#text").text("Analyzing the information...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 10000);
	setTimeout(function(){ 
		$("#text").text("Processing Audience Information...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 15000);
	setTimeout(function(){ 
		$("#text").text("Saving analysis.");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 20000);
	setTimeout(function(){ 
		$("#text").text("All set, only a moment...");
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
		$("#text").text("Importing albums...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 5000);

	setTimeout(function(){ 
		$("#text").text("Ordering the information...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 10000);
	setTimeout(function(){ 
		$("#text").text("Saving albums by " + artist);
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 15000,artist = $(this).attr('title'));
	setTimeout(function(){ 
		$("#text").text("Saving analysis...");
		$("#text").fadeIn(2500);
		$("#text").fadeOut(2500);
	}, 20000);
	setTimeout(function(){ 
		$("#text").text("All set, only a moment...");
		$("#text").fadeIn(2500); 
	}, 25000);
});
</script>