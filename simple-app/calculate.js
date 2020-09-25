//LISTEN FOR SUBMIT
document.querySelector('#loan-form').addEventListener('submit', function (e) {

	//hide result
	document.getElementById('results').style.display = 'none';

	//show result
	document.getElementById('loading').style.display = 'block';
	setTimeout(calculateResults, 2000);

	e.preventDefault();
});


//CALCULATE RESULTS
function calculateResults() {

	//user interface variable
	const amount = document.getElementById('amount');
	const interest = document.getElementById('interest');
	const years = document.getElementById('years');
	const monthlyPayment = document.getElementById('monthly_payment');
	const totalPayment = document.getElementById('total_payment');
	const totalInterest = document.getElementById('total_interest');


	//calculative data
	const principle = parseFloat(amount.value);
	const calculatedInterest = parseFloat(interest.value) / 100 / 12;
	const calculatedPayments = parseFloat(years.value) * 12;


	//calculative monthly payments
	const x = Math.pow(1 + calculatedInterest, calculatedPayments);
	const monthly = (principle * x * calculatedInterest) / (x - 1);

	if (isFinite(monthly)) {
		monthlyPayment.innerHTML = monthly.toFixed(2);
		totalPayment.innerHTML = (monthly * calculatedPayments).toFixed(2);
		totalInterest.innerHTML = ((monthly * calculatedPayments) - principle).toFixed(2);

		document.getElementById('results').style.display = 'block';
		document.getElementById('loading').style.display = 'none';

	} else {
		showError('Please check your numbers')
	}
}


//CREATE ERROR MESSAGE
function showError(error) {
	
	//create an element for error message show
	const errorDiv = document.createElement('Blockquote');

	//get elements
	const card = document.querySelector('.loan-title');
	const heading = document.querySelector('.heading');

	//add a class
	errorDiv.className = 'grey lighten-5 red-text errorText';

	errorDiv.appendChild(document.createTextNode(error));

	//insert error above div
	card.insertBefore(errorDiv, heading);

	//clear error message
	setTimeout(clearError, 2000);
}


//CLEAR ERROR MESSAGE
function clearError() {
	document.querySelector('.loan-title').remove();
}
