<!DOCTYPE html>
<html>
<body>

<ul id="myList">
  <li>Coffee</li>
  <li>Tea</li>
</ul>

<p>Click the button to append an item to the end of the list.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  var node = document.createElement("LI");
  var textnode = document.createTextNode("<b>water</b>");
  node.appendChild(textnode);
  document.getElementById("myList").appendChild(node);
}
</script>

<p><strong>Note:</strong><br>First create an LI node,<br> then create a Text node,<br> then append the Text node to the LI node.<br>Finally append the LI node to the list.</p>

</body>
</html>
