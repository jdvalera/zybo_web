<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/starter-template.css" rel="stylesheet">
<script type="text/javascript">// <![CDATA[

$(document).ready(function() {

$('#on').mousedown(function(){

$("#on").text("mousedown");
 
var a= new XMLHttpRequest();
 
a.open("GET", "on.php"); a.onreadystatechange=function(){
 
if(a.readyState==4){ if(a.status ==200){
 
 } else alert ("http error"); } }
 
a.send();
 
});

$('#on').mouseup(function(){

$("#on").text("mouseup");
 
var a= new XMLHttpRequest();
 
a.open("GET", "on.php"); a.onreadystatechange=function(){
 
if(a.readyState==4){ if(a.status ==200){
 
 } else alert ("http error"); } }
 
a.send();
 
});
 
});

$(document).ready(function()

{ $('#off').click(function(){

var a= new XMLHttpRequest();

a.open("GET", "off.php");

a.onreadystatechange=function(){

if(a.readyState==4){

if(a.status ==200){

 } else alert ("http error"); } }

a.send();

});

});

</script>
</head>

<body>
<div class="container">
    <div class="starter-template">
        <h1>Wifi Test</h1>
        <br>
    <button id="on" type="button"> Switch Lights On </button>
    <button id="off" type="button"> Switch Lights Off </button>
</div>
</body>
</html>
