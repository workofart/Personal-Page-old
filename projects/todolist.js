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

function deleteItem() {
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

function numItems () {
	var w = document.getElementById('itemList');
	var count = 0; // this will contain the total elements.
	for (var i = 0; i < w.childNodes.length; i++) {
		var node = w.childNodes[i];
		if (node.nodeName == "TR") {
			count++;
		}
	}
	
	document.getElementById("itemCount").innerHTML = count + " items";
}
