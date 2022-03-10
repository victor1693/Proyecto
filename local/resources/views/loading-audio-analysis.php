<!DOCTYPE html>
<html>
<head>
	<title>Loading Audio Analysis</title>
</head>
<body>
	Cargando Audio Analysis... 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			window.location.href = "<?= Request::root();?>/load-audio-analysis/<?= $token;?>";
		});
	</script>
</body>
</html>