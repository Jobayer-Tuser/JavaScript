<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Abdullah Al Mamun Roni">
		
		<title> Simle Application in JavaScript </title>
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	
	<body>
		<div class="container">
			<div class="display-4 text-center mt-3 mb-2" style="font-size: 2.5em;">
				A Simple Application in JavaScript
			</div>
			<hr class="mx-5">
			<div class="row">
				
				<!--*=*=* Tasks Application Content Start *=*=*-->
				<div class="col-sm-12 col-md-6 my-5">
					<div class="card text-center">
						<div class="card-header h4"> Task Application </div>
						<div class="card-body">
							<div id="main">
								<form id="task-form" action="">
									<div class="form-group">
										<input type="text" name="task" id="task" class="form-control" placeholder="Add a new task here..">
									</div>
									<button type="submit" class="btn btn-success btn-sm btn-block">
										<i class="fas fa-plus-circle"></i> Add Task
										</button>
								</form>	
							</div>
						</div>
						<div class="card-footer text-muted">
							<h5 id="tasks-title">All Tasks List</h5>
							<div class="input-field col-s12">
								<input class="form-control mr-sm-2" name="filter" id="filter" placeholder="Filter Tasks">
							</div>
							<ul class="list-group my-3 text-left collection"></ul>
							<button href="#" class="btn btn-secondary btn-block btn-sm clear-tasks">
								<i class="fas fa-times-circle"></i> Clear All Tasks
							</button>
						</div>
					</div>
				</div>
				<!--*=*=* Tasks Application Content End *=*=*-->
				
				<!-- LOAN CALCULATOR START -->
				<div class="col-sm-12 col-md-6 my-5">
					<div class="card text-center">
						<div class="card-header h4"> Loan Calculator </div>
						<div class="card-body">
							<div id="main">
								<form id="loan-form">
									<div class="form-group">
										<div class="col-sm-12">
											<input type="number" class="form-control" id="amount" placeholder="Enter Amount">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="number" class="form-control" id="interest" step="any" placeholder="Enter Interest">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<input type="number" class="form-control" id="years" placeholder="Enter Years">
										</div>
									</div>
									<div class="mx-3">
										<button type="submit" class="btn btn-info btn-sm btn-block">
											<i class="fas fa-plus-circle"></i> Calculate Total Interest
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="card-footer text-muted">
							<div class="progress progress-bar-striped progress-bar-warning bg-success" id="loading" style="display: none;">
								<div></div>
							</div>
							<div id="results" style="display: none;">
								<table class="table table-sm table-hover bg-white">
									<thead>
										<tr>
											<th scope="col" colspan="2" class="h3 text-info">Calculate Result</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" class="text-left">Monthly Payment</th>
											<td> <span id="monthly_payment" class="text-right"></span> </td>
										</tr>
										<tr>
											<th scope="row" class="text-left">Total Payment</th>
											<td> <span id="total_payment" class="text-right"></span> </td>
										</tr>
										<tr>
											<th scope="row" class="text-left">Total Interest</th>
											<td> <span id="total_interest" class="text-right"></span> </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- LOAN CALCULATOR END -->
			
		</div>
	</div>
	
	<script src="tasks.js"></script>
	<script src="calculate.js"></script>
</body>

</html>
