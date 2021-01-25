<!DOCTYPE html>
<html>
<head>
  <title>Leave Application</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:300' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:600' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <style type="text/css">
.container-fluid
{
  background-color: #05147D;
  font-family: 'Montserrat';
  padding:40px;
}
.header-text, .footer-text
{
  margin-left: auto;
  margin-right: auto;
  display: block;
  color:#ffffff;
  font-weight:600;
  font-size:22px;
  text-align: center;
}
.card
{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width:100%;
  margin-top: 100px;
  padding: 50px;
  padding-bottom: 30px;
}
.container1
{
  font-family: Montserrat;
  font-weight: 600;
  margin-left: 350px;
  margin-right: 500px;
  display: block;
  width: 700px;
  height: 500px;
}

input[type=text]
{
  border: none;
  border-bottom: 3px solid #ffc107;
  padding: 10px;
  width: 50%;
  font-family: Montserrat;
  font-weight: 500;
}

  </style>

</head>

<body>

<div class="container-fluid">
  <div class="header-text">
    Apply for Leave
  </div>
</div>

<div class="container1">
  <div class="card">
    <center>
<h3>Types of Leaves available:</h3>
</center>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter keywords" id="txt1" onkeyup="showHint(this.value)">
<br>
<p style="margin-left: 150px;">Suggestions: <span id="txtHint"></span></p> 
</div>
</div>

<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
</script>

</body>
</html>
