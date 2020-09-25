<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Abdullah Al Mamun Roni">
		
		<title> User Location Tracking </title>
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	
	<body>
		<div class="container my-5">
			<div class="row">
				<div class="col-sm-12 col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header bg-dark text-warning h4 text-center">
							User Location Tracking
						</div>
						<div class="card-body">
							<div id="userDetails" ></div>
							<div class="mt-4 display-5 text-info font-weight-normal" id="summary"></div>
						</div>
						<div class="card-footer text-muted text-center" id="cords"></div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
			//Initialize GEO Location Access
			function getLocation() {
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(showPosition, showError);
				} else {
					$('#data').text('Your browser is not supported');
				}
			}
			
			//Return the Type of Error
			const showError = (error) => {
				switch (error.code) {
					case error.PERMISSION_DENIED:
					$('#data').text('User permission denied to share location');
					break;
					
					case error.POSITION_UNAVAILABLE:
					$('#data').text('User location data is unavailable');
					break;
					
					case error.TIMEOUT:
					$('#data').text('Oops! timeout');
					break;
					
					case error.UNKNOWN_ERROR:
					$('#data').text('Oops! something went wrong');
					break;
				}
			}
			
			//Fetch User Location Data
			const showPosition = (position) => {
				$('#cords').text('Latitude: ' + position.coords.latitude + ' | Longtitue: ' + position.coords.longitude);
				
				var apiUrl = "https://us1.locationiq.com/v1/reverse.php?key=e3084375d7ffee&lat=" + position.coords.latitude + "&lon=" + position.coords.longitude + "&format=json";
				
				$.ajax({
					url: apiUrl,
					type: 'GET',
					success: function (data) {
						
						console.log(data);
						
						$('#userDetails').append(
							`<table class="table table-sm table-hover table-borderless">
								<tbody>
									<tr>
										<th scope="row"> Street Address: </th>
										<td> ${data.address.neighbourhood} </td>
									</tr>
									<tr>
										<th scope="row"> Postal Code: </th>
										<td> ${data.address.postcode} </td>
									</tr>
									<tr>
										<th scope="row"> City: </th>
										<td> ${data.address.city} </td>
									</tr>
									<tr>
										<th scope="row"> District: </th>
										<td> ${data.address.state_district} </td>
									</tr>
									<tr>
										<th scope="row"> Division: </th>
										<td> ${data.address.state} </td>
									</tr>
									<tr>
										<th scope="row"> Country: </th>
										<td> ${data.address.country} (${data.address.country_code}) </td>
									</tr>
								</tbody>
							</table>`
						);
					}
				});
			}
			getLocation();
		</script>
	</body>
</html>
