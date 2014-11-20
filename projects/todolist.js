function addItem() {
	var content = document.getElementById("itemInput").value;
	var s = '<td>>></td><td></td>';
	var newNode = document.createElement("tr");
	newNode.innerHTML = s;
	// append node
	document.getElementById("itemList").appendChild(newNode);
	var lastC = document.getElementById('itemList').lastChild.lastChild;
	// add the item in the last child node
	lastC.innerHTML = content;

}

function deleteContent() {
	// document.getElementById("item").innerHTML = "";
	document.getElementById('itemList').removeChild(document.getElementById('itemList').lastChild);
	
}

function test() {
	document.getElementById("item").innerHTML= "TEST";
}

function unTest() {
	document.getElementById("item").innerHTML = "Row 1";
}

function testing () {
var x = document.getElementById("itemInput");
var text = "";
var i;
for (i = 0; i < x.length; i++) {
    text += x.elements[i].value + "<br>";
}
document.getElementById("demo").innerHTML = text;
}