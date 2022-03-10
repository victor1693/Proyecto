<!DOCTYPE html>
<html>
<head>
	<title>Loading Artist Summary</title>
</head>
<body>
	Cargando Artist Summary... 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			window.location.href = "<?= Request::root();?>/load-artist-summary/<?= $token;?>";
		});
	</script>
</body>
</html>