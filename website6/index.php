<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search User</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
  <script>
    function showSuggestion(str) {
      if (str.length == 0) {
        document.getElementById('output').innerHTML = '';
      }
      else {
        // AJAX request
        // from here: https://www.w3schools.com/xml/ajax_xmlhttprequest_send.asp
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById('output').innerHTML = this.responseText;
          }
        }
      }
      xmlhttp.open("GET", "suggest.php?q="+str, true);
      xmlhttp.send();
    }
  </script>
</head>
<body>
  <div class="container">
    <h1>Search Users</h1>
    <form action="">
      <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions: </p><span id="output" style="font-weight:bold;"> </span>
  </div>
</body>
</html>