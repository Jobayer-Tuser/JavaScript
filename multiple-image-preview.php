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
			<div class="display-4 mt-4 text-center" style="font-size: 2.5em;"> multiple image preview </div>
			<hr class="mx-5">
			
			<?php
				if(isset($_POST['upload']))
				{
					//Uploaded Files Data As an Array
					echo '<pre>';
					print_r($_FILES);
					echo '</pre>';
				}
			?>
			
			<div class="row">
				<div class="col-8 offset-2 my-4">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="upload" class="btn btn-dark btn-block">
								Upload Multiple Images and Preview
							</label>
							<input type="file" name="avatar[]" multiple class="form-control" id="upload" style="display: none;" onChange="previewFiles()">
						</div>
						<div class="form-group text-center">
							<div id="preview"></div>
						</div>	
						<div class="text-center">
							<button name="upload" type="sumbit" class="btn btn-success">
								Data Print in PHP 
							</button>
						</div>
					</form>
				</div>
			</div>			
		</div>
		
		<script type="text/javascript">
			/* *-+-*-+-* Multiple Image Previewer Script *-+-*-+-* */
			function previewFiles() {
				let preview = document.querySelector('#preview');
				let files = document.querySelector('input[type=file]').files;
				
				function readAndPreview(file) {
					if (/\.(jpe?g|png|gif)$/i.test(file.name)) {
						let reader = new FileReader();
						
						reader.addEventListener("load", function() {
							let image = new Image();
							image.height = 100;
							image.style.padding = "10px";
							
							image.title = file.name;
							image.src = this.result;
							preview.appendChild(image);
						}, false);
						reader.readAsDataURL(file);
					}
				}
				
				if (files) {
					[].forEach.call(files, readAndPreview);
				}
			}
		</script>
		
	</body>
</html>