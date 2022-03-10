<!DOCTYPE html>
<html>
<head>
	<title>Loading Artist Catalogue</title>
</head>
<body>
	Cargando Artist Catalogue... 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			window.location.href = "<?= Request::root();?>/load-artist-catalogue/<?= $token;?>";
		});
	</script>
</body>
</html>