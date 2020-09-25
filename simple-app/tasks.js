//TASK APPLICATION IN JAVASCRIPT | 2020

//define all the required variables
const form = document.querySelector('#task-form');
const taskList = document.querySelector('.collection');
const clearBtn = document.querySelector('.clear-tasks');
const filter = document.querySelector('#filter');
const taskInput = document.querySelector('#task');


//LOAD ALL EVENT LISTENER
loadEventsListers();

function loadEventsListers() {
	//get all task if page is reloaded
	document.addEventListener('DOMContentLoaded', getTasks);

	//add task events
	form.addEventListener('submit', addTask);

	//remove task events
	taskList.addEventListener('click', removeTask);

	//clear all task events
	clearBtn.addEventListener('click', clearTask);

	//filter task events
	filter.addEventListener('keyup', filterTasks);
}


//GET TASKS
function getTasks() {
	//if exists data
	let tasks;

	if (localStorage.getItem('tasks') === null) {
		tasks = [];
	} else {
		tasks = JSON.parse(localStorage.getItem('tasks'));
	}

	//fetch all the data
	tasks.forEach(function (task) {

		const li = document.createElement('li');
		li.className = 'list-group-item';
		li.appendChild(document.createTextNode(task));

		const link = document.createElement('a');
		link.className = 'delete-item float-right';
		link.innerHTML = '<i class="far fa-times-circle text-danger"></i>';
		li.appendChild(link);

		taskList.appendChild(li);
	});
}



//ADD TASKS
function addTask(e) {

	//form validation
	if (taskInput.value == '') {
		alert('Please Add a Task')
	} else {
		//(1) create a list element
		//(2) add a class to the list element
		//(3) create text nodes and append to the list element

		const li = document.createElement('li');
		li.className = 'list-group-item';
		li.appendChild(document.createTextNode(taskInput.value));


		//(1) create a link element for further using
		//(2) add a class to the link element
		//(3) add icons to the link element inner
		//(4) add icons to the link element inner
		//(5) append to the list element as parent

		const link = document.createElement('a');
		link.className = 'delete-item float-right';
		link.innerHTML = '<i class="far fa-times-circle text-danger"></i>';
		li.appendChild(link);


		//append the list into the DOM
		taskList.appendChild(li);


		//store list data into the local storage
		storeTasksInLocalStorage(taskInput.value);


		//remove the input value after sumbitted
		taskInput.value = '';
	}
	e.preventDefault();
}



//STORED TASKS IN LOCAL STORAGE
function storeTasksInLocalStorage(task) {

	let tasks;

	if (localStorage.getItem('tasks') === null) {
		tasks = [];
	} else {
		tasks = JSON.parse(localStorage.getItem('tasks'));
	}

	tasks.push(task);

	localStorage.setItem('tasks', JSON.stringify(tasks));
}



//REMOVE A TASK FROM DOM
function removeTask(e) {
	if (e.target.parentElement.classList.contains('delete-item')) {

		//get the delete items name
		const itemName = e.target.parentElement.parentElement.textContent;

		//after confirm delete item
		if (confirm(`Are you really want to delete ${itemName}?`)) {
			e.target.parentElement.parentElement.remove();

			removeFromLocalStorage(e.target.parentElement.parentElement);
		}
	}
}



//REMOVE A TASK FROM LOCAL STORAGE
function removeFromLocalStorage(taskItem) {
	let tasks;

	if (localStorage.getItem('tasks') === null) {
		tasks = [];
	} else {
		tasks = JSON.parse(localStorage.getItem('tasks'));
	}

	tasks.forEach(function (task, index) {
		if (taskItem.textContent === task) {
			tasks.splice(index, 1);
		}
	});

	localStorage.setItem('tasks', JSON.stringify(tasks));
}



//CLEAR ALL TASKS
function clearTask() {
	//technique no. 1
	/*
	 *	taskList.innerHTML = '';
	 */

	//technique no. 2
	while (taskList.firstChild) {
		taskList.removeChild(taskList.firstChild);
	}

	//clear form local storage
	clearFormLocalStorage();
}


//CLEAR TASKS FROM LOCAL STORAGE
function clearFormLocalStorage() {
	localStorage.clear();
}



//FILTER TASKS
function filterTasks(e) {
	const text = e.target.value.toLowerCase();

	document.querySelectorAll('.list-group-item').forEach(function (task) {
		const item = task.firstChild.textContent;
		if (item.toLowerCase().indexOf(text) != -1) {
			task.style.display = 'block';
		} else {
			task.style.display = 'none';
		}
	});
}
