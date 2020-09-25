<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Abdullah Al Mamun Roni">
		
		<title> Star Ratings in Core JavaScript </title>
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
		
		<style>
			.star-outer {
				position: relative;
				display: inline-block;
			}
			
			.star-inner {
				position: absolute;
				top: 0;
				left: 0;
				white-space: nowrap;
				overflow: hidden;
				width: 0;
			}
			
			.star-outer::before {
				content: "\f005 \f005 \f005 \f005 \f005";
				font-family: 'Font Awesome 5 Free';
				font-weight: 900;
				color: #ccc;
			}
			
			.star-inner::before {
				content: "\f005 \f005 \f005 \f005 \f005";
				font-family: 'Font Awesome 5 Free';
				font-weight: 900;
				color: #f8ce0b;
			}
		</style>
	</head>
	
	<body>
		<div class="container">
			<div class="display-4 text-center mt-3 mb-2" style="font-size: 2.5em;"> Star Ratings in JavaScript </div>
			<hr class="mx-5">
			<div class="container">
				<div class="row">
					<div class="offset-md-3 col-md-6">
						<div class="mb-3">
							<form>
								<div class="form-group">
									<label for=""></label>
									<select id="product-select" class="custom-select">
										<option value="0" disabled selected> Select a Brand </option>
										<option value="sony"> Sony 4k TV </option>
										<option value="samsung"> Samsung 4k TV </option>
										<option value="vizio"> Vizio 4k TV </option>
										<option value="panasonic"> Panasonic 4k TV </option>
										<option value="phillips"> Phillips 4k TV </option>
									</select>
								</div>
								<div class="form-group">
									<input type="number" class="form-control" id="rating-control" step="0.1" max="5" placeholder="Rate 1 - 5" disabled>
								</div>
							</form>
						</div>
						
						<div class="table-responsive">
							<table class="table table-hover table-sm">
								<thead class="bg-dark text-warning">
									<tr>
										<th scope="col"> 4k Television </th>
										<th scope="col"> Ratings </th>
									</tr>
								</thead>
								<tbody>
									<tr class="sony">
										<td> Sony 4k TV </td>
										<td> 
											<div class="star-outer">
												<div class="star-inner"></div>
											</div>
											<span class="numbers-rating"></span>
										</td>
									</tr>						
									<tr class="samsung">
										<td> Samsung 4k TV </td>
										<td> 
											<div class="star-outer">
												<div class="star-inner"></div>
											</div>
											<span class="numbers-rating"></span>
										</td>
									</tr>						
									<tr class="vizio">
										<td> Vizio 4k TV </td>
										<td> 
											<div class="star-outer">
												<div class="star-inner"></div>
											</div>
											<span class="numbers-rating"></span>
										</td>
									</tr>						
									<tr class="panasonic">
										<td> Panasonic 4k TV </td>
										<td> 
											<div class="star-outer">
												<div class="star-inner"></div>
											</div>
											<span class="numbers-rating"></span>
										</td>
									</tr>						
									<tr class="phillips">
										<td> Phillips 4k TV </td>
										<td> 
											<div class="star-outer">
												<div class="star-inner"></div>
											</div>
											<span class="numbers-rating"></span>
										</td>
									</tr>
								</tbody>
							</table>	
						</div>
					</div>
				</div>
			</div>
			
			
			<script type="text/javascript">
				//initialize ratings
				const ratings = {
					sony: 4.7,
					samsung: 3.4,
					vizio: 2.3,
					panasonic: 3.6,
					phillips: 2.8
				}
				
				//total starts
				const startTotal = 5;
				
				//run getRatings when DOM is loads
				document.addEventListener('DOMContentLoaded', getRatings);
				
				//form elements
				const productSelect = document.getElementById('product-select');
				const ratingControl = document.getElementById('rating-control');
				
				//init products
				let product;
				
				//product select change
				productSelect.addEventListener('change', (e) => {
					product = e.target.value;
					
					//enable rating control
					ratingControl.disabled = false;
					ratingControl.value = ratings[product];
				});
				
				//rating control change
				ratingControl.addEventListener('keydown', (e) => {
					const rating = e.target.value;
					
					//make sure rating is under 5
					if(rating > 5) {
						alert('Please give your valuable ratings between 1-5');
						return;
					}
					
					//change rating
					ratings[product] = rating;
					getRatings();
				});
				
				//get ratings
				function getRatings() {
					for(let rating in ratings) {
						
						//get percentage
						const starPercentage = (ratings[rating] / startTotal) * 100;
						
						//rounded in nearest 10
						const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;
						
						//set width of star-inner according to percentage
						document.querySelector(`.${rating} .star-inner`).style.width = starPercentageRounded;
						console.log(starPercentageRounded);	
						
						//add number rating
						document.querySelector(`.${rating} .numbers-rating`).innerHTML = ratings[rating];
					}
				}
			</script>
			
		</div>
	</body>
</html>
