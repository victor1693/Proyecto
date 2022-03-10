<!DOCTYPE html>
<html>
<head>
	<title>Loading Audience Analysis</title>
</head>
<body>
	Cargando Audience Analysis... 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			window.location.href = "<?= Request::root();?>/load-artist-audience/<?= $token;?>";
		});
	</script>
</body>
</html>