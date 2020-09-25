<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Abdullah Al Mamun Roni">
		
		<title>Multiple Image Preview</title>
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<div class="display-4 text-center" style="font-size: 2.5em;"> JavaScript API </div>
			<hr class="mx-5">
			<div class="display-4 text-center text-info">
				Please Check Your Browser Console <br>
				<span style="font-size: 0.8em;" class="text-secondary">
					Don't run all functions at a time and remove comments as per your required crud operation
				</span>
			</div>
		</div>
		
		<script src="class.js"></script>
		<script type="text/javascript">
			const http = new HTTPRequest();
			
			/*
			//GET ALL POSTS
			http.get('https://jsonplaceholder.typicode.com/posts', function (err, posts) {
				if (err) {
					console.log(err);
				} else {
					console.log(posts);
				}
			});
			*/
			
			
			//GET SINGLE POSTS
			http.get('https://jsonplaceholder.typicode.com/posts/11', function (err, post) {
				if (err) {
					console.log(err);
				} else {
					console.log(post);
				}
			});
			
			
			/*
			//CREATE POSTS
			const data = {
				"title": "Custom Posts",
				"body": "This is a lorem ispum dollar sit amet dummy post"
			}
			
			http.post('https://jsonplaceholder.typicode.com/posts', data, function (err, post) {
				if (err) {
					console.log(err);
				} else {
					console.log(post);
				}
			});
			*/
			
			
			/*
			//UPDATE POST
			http.put('https://jsonplaceholder.typicode.com/posts/1', data, function (err, post) {
				if (err) {
					console.log(err);
				} else {
					console.log(post);
				}
			});
			*/
			
			
			/*
			//DELETE POST
			http.delete('https://jsonplaceholder.typicode.com/posts/12', function (err, posts) {
				if (err) {
					console.log(err);
				} else {
					console.log(posts);
				}
			});
			*/
			
		</script>
		
	</body>
</html>