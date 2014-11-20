function addItem() {
	var content = document.getElementById("itemInput");
	var numElems = numItems() + 1; // adjust discrepancies
	var s = '<td id="item' + numElems + '"><button type="button" class="btn" onclick="deleteItem(' + numElems + ');numItems()"><span class="glyphicon glyphicon-ok"></span></button></td><td></td>';
	var newNode = document.createElement("tr");
	newNode.innerHTML = s;
	// append node
	document.getElementById("itemList").appendChild(newNode);
	var lastC = document.getElementById('itemList').lastChild.lastChild;
	// add the item in the last child node
	lastC.innerHTML = content.value;
	content.value = "";

}

function deleteAllItems() {
	while (numItems() >0){
		document.getElementById('itemList').removeChild(document.getElementById('itemList').lastChild);
	}
	
}
function deleteItem (n1) {
	var str = "item".concat(n1);
	var target = document.getElementById(str).parentNode;
	target.parentNode.removeChild(target);
}

function test() {
	// document.getElementById("item").innerHTML= "TEST";
	// get the parent of the parent of the option, which is the tr, assign it to target
	var target = this.parentNode.parentNode;
	// remove the target node
	target.parentNode.removeChild(target);
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
	return count;
}
