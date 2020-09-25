<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Abdullah Al Mamun Roni">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title> Google Map Initialization </title>
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
		
		<style>
			.map .map-part .map-inner-part {
				min-height: 626px;
				width: 100%;
			}
		</style>
	</head>
	
	<body>
		<div class="container-fluid my-5">
			<div class="map">
				<div class="map-part">
					<div id="map" class="map-inner-part"></div>
				</div>
			</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="map.js"></script>
		<script async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC_G1wZMKrwyHHOteMdVwCy82Qm4Pp7vyI&amp;callback=initMap"></script>
	</body>
</html>
