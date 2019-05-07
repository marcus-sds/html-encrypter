<?php
require_once '../src/HtmlEncryptor.class.php';

$html = new Html\Encryptor;
$html->Encrypt();
?>
<html>
<head>
  <title>Page Title</title>
  <script>
  function myFunction() {
    document.getElementById("demo").innerHTML = "Hello JavaScript!";
  }
  </script>
</head>
<body>

<h1>My Web Page</h1>
<p id="demo">A Paragraph</p>
<button type="button" onclick="myFunction()">Try it</button>

</body>
</html>