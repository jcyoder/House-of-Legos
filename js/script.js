/* JavaScript */

/*function loadAJAX() {
	var request;
	if(window.XMLHttpRequest) {
		request = new XMLHttpRequest();
	}
	else {
		request = new ActiveXObject("Microsoft.XMLHTTP");
	}

	request.open('GET', 'categories.json');
	request.onreadystatechange = function() {
		if((request.readyState===4) && (request.status===200)) {
			var items = JSON.parse(request.responseText);
			console.log(items.Categories);
			
			var output = '';		
			 for (var i=0; i< items.Categories.length; i++) {
				output += '<a href="#" class="list-group-item category-item">' + items.Categories[i] + '</a>';
			}
			console.log(output);
			document.getElementById('category-items').innerHTML = output;
		}
	}
	request.send();
}

loadAJAX();
*/

/*jQuery alternative method*/
/*$.getJSON('categories.json', function(data) {
	console.log(data);
	var output = '';
	for (var i=0; i< data.Categories.length; i++) {
				output += '<a href="#" class="list-group-item category-item">' + data.Categories[i] + '</a>';
	}
	console.log(output);
	$('#category-items').html(output);
});
*/
$.getJSON('newcategories.json', function(data) {
	var output = '';

	/*outer each handles the Categories object*/
	$.each(data, function() {
		$.each(this, function (index, value) {
			console.log(value.URL + ":" + value.name);
		output += '<a href="' + value.URL + '" class="list-group-item category-item">' + value.name + '</a>';
		});
	});
	
	/* way to do it with a for loop*/
	/*for (var i=0; i< data.Categories.length; i++) {
		output += '<a href="' + data.Categories[i].URL + '" class="list-group-item category-item">' + data.Categories[i].name + '</a>';
	}
	*/
	$('#category-items').html(output);
});

