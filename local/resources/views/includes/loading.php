 
<link href="https://www.jqueryscript.net/demo/Fullscreen-Loading-Modal-Indicator-Plugin-For-jQuery-loadingModal/css/jquery.loadingModal.css" rel="stylesheet"/>

<script src="https://www.jqueryscript.net/demo/Fullscreen-Loading-Modal-Indicator-Plugin-For-jQuery-loadingModal/js/jquery.loadingModal.js"></script>

<!--ESTE ES EL MODAL BASE-->

<div style="" data-backdrop="static" class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="loading" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body  text-center"> 
      	<div class="mb-5">
			<object id="aside-icon" style="width: 56px; height:56px;" data="https://zuliamercado.com/local/resources/views/assets/img/logo2.svg" type="image/svg+xml"></object>
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

<!--ESTE ES EL MODAL PARA EL LOADING AUDIENCE ANALYSIS-->

<div style="" data-backdrop="static" class="modal fade" id="loading-1" tabindex="-1" role="dialog" aria-labelledby="loading" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body  text-center"> 
      	<div class="mb-2">
			<object id="aside-icon" style="width: 72px; height:72px;" data="<?= Request::root();?>/local/resources/views/assets/svg_icons/goloudrbrain.svg" type="image/svg+xml"></object>
      	</div>
		<h1 class="header-title mb-5 fade-in">
			Audience Analysis <span class="badge bg-primary-soft fw-bold">AI</span>
		</h1>
		<h3>LOADING</h3>
		<h3 class="mb-5" id="text-1"></h3>
      	<div class="spinner-border text-primary" role="status">
		  <span class="visually-hidden">Loading...</span>
		</div>

      </div> 
    </div>
  </div>
</div>
<div id="lock-1" style="position: absolute;background: #fff;width: 100%;height: 100%;z-index: 2000;top: 0;left: 0;display: none;opacity: 0;"> 
</div>

<script>

// LOADING AUDIENCE ANALISYS

$(".loading-audience-analysis").click(function(){  

	$("#lock-1").show();
	$('#loading-1').modal('show'); 
	$("#text-1").text($(this).attr('title'));
	$("#text-1").fadeIn(2500);
	$("#text-1").fadeOut(2500);


	setTimeout(function(){ 
		$("#text-1").text("Socials");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500);
	}, 5000);
	setTimeout(function(){ 
		$("#text-1").text("Genres");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500);
	}, 10000);
	setTimeout(function(){ 
		$("#text-1").text("Top Cities");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500);
	}, 15000);
	setTimeout(function(){ 
		$("#text-1").text("Artist in Same Genres");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500);
	}, 20000);
	setTimeout(function(){ 
		$("#text-1").text("Catalogue");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500); 
	}, 25000);
	setTimeout(function(){ 
		$("#text-1").text("Markets of Opportunity");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500); 
	}, 30000);
	setTimeout(function(){ 
		$("#text-1").text("AUDIENCE");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500); 
	}, 35000);
	setTimeout(function(){ 
		$("#text-1").text("GROWTH POTENTIAL");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500); 
	}, 40000);
	setTimeout(function(){ 
		$("#text-1").text("Artists with Similar Fanbases");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500); 
	}, 45000);
	setTimeout(function(){ 
		$("#text-1").text("YOUR MONTHLY LISTENERS");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500); 
	}, 50000);
	setTimeout(function(){ 
		$("#text-1").text("SIMILAR ARTISTS AVG. MONTHLY LISTENERS");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500); 
	}, 55000);
	setTimeout(function(){ 
		$("#text-1").text("POTENTIAL ACHIEVED");
		$("#text-1").fadeIn(2500);
		$("#text-1").fadeOut(2500); 
	}, 60000);
	setTimeout(function(){ 
		$("#text-1").text("All set, only a moment...");
		$("#text-1").fadeIn(2500); 
	}, 65000);
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

</script>