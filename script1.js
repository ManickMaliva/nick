function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("my").value;
  var inputage = document.getElementById("age").value;
 var t = document.createTextNode(inputValue +" " +"have " + " "+ inputage +" "+"old");
  li.appendChild(t);
  if (inputValue === '') {
   alert("You must write something!");
  } else {
   document.getElementById("ad").appendChild(li);
  }
}