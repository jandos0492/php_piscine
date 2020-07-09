let id = 0;
data = Array();
getCookie();
for (t in data) {
	addTask(data[t]);
}

function addCookie() {
	document.cookie = "list=" + data.toString();  // The toString() method converts a number to a string.
}
function getCookie() {
	let cookie = document.cookie.split(';');  // The split() method is used to split a string into an array of substrings, and returns the new array.
	for (c in cookie) {
		let key = cookie[c].split('=');
		if (key[0].trim() == "list") {  // The trim() method is used to remove white space and from both ends of a string
			if (key[1] != "") {
				d = key[1].split(',');
				for (t in d) {
					data.push(d[t]);  // The push() method adds new items to the end of an array, and returns the new length.
				}
			}
		}
	}
}
function addTask(t) {
	let ft_list = document.getElementById("ft_list");  // The getElementById() method returns the element that has the ID attribute with the specified value.
	let div = document.createElement('div');  // The createElement() method creates an Element Node with the specified name.
	div.setAttribute("id", id++);
	div.setAttribute("onclick", "delTask(this.id)");  // The setAttribute() method adds the specified attribute to an element, and gives it the specified value.
	let task = document.createTextNode(t);  // The createTextNode() method creates a Text Node with the specified text.
	div.appendChild(task);  // The appendChild() method appends a node as the last child of a node.
	ft_list.insertBefore(div, ft_list.childNodes[0]);  // The insertBefore() method inserts a node as a child, right before an existing child, which you specify.
}
function delTask(id) {
	let r = confirm("Remove it ?");  // The confirm() method displays a dialog box with a specified message, along with an OK and a Cancel button.
	if (r == true) {
		let elem = document.getElementById(id);
		data.splice(data.indexOf(elem.textContent), 1);  // The splice() method adds/removes items to/from an array, and returns the removed item(s).
		elem.parentNode.removeChild(elem);  // The removeChild() method removes a specified child node of the specified element.
		addCookie();
	}
}
function add() {
	let item = prompt("Enter a task");  // The prompt() method displays a dialog box that prompts the visitor for input.
	
	if (item != null) {
		console.log(data);
		data.push(item);
		addTask(item);
		addCookie();
	}
}