function HTTPRequest() {
	this.http = new XMLHttpRequest();
}

//HTTP GET Request
HTTPRequest.prototype.get = function (url, callback) {
	this.http.open('GET', url, true);

	/* ES5
	 *	let self = this;
	 *	this.http.onload = function () {
	 *		if (self.http.status === 200) {
	 *			console.log(self.http.responseText);
	 *		}
	 *	}
	 */

	this.http.onload = () => {
		if (this.http.status === 200) {
			callback(null, this.http.responseText);
		} else {
			callback('Error: ' + this.http.status);
		}
	}

	this.http.send();
}


//HTTP POST Request
HTTPRequest.prototype.post = function (url, data, callback) {
	this.http.open('POST', url, true);
	this.http.setRequestHeader('Content-type', 'application/json');

	this.http.onload = () => {
		callback(null, this.http.responseText);
	}
	this.http.send(JSON.stringify(data));
}


//HTTP PUT Request
HTTPRequest.prototype.put = function (url, data, callback) {
	this.http.open('PUT', url, true);
	this.http.setRequestHeader('Content-type', 'application/json');

	this.http.onload = () => {
		callback(null, this.http.responseText);
	}
	this.http.send(JSON.stringify(data));
}


//HTTP DELETE Request
HTTPRequest.prototype.delete = function (url, callback) {
	this.http.open('DELETE', url, true);

	this.http.onload = () => {
		if (this.http.status === 200) {
			callback(null, 'Post is deleted');
		} else {
			callback('Error: ' + this.http.status);
		}
	}

	this.http.send();
}
