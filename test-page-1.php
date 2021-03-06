<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {margin: 0;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right,
    ul.topnav li {float: none;}
}
</style>
</head>
<h1>Test page 1 Responsive menu</h1>
<body>
<ul class="topnav">
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="changelog.htm"> Changelog</a></li>
  <li><a href="test-page-2.htm">Test page 2</a></li>
  <li><a href="test-page-3.htm">Test page 3</a></li>
  <li class="right"><a href="#about">test</a></li>
</ul>
<div style="padding:0 16px;">
  <h2>Responsive Topnav Example</h2>
  <p>This example use media queries to stack the topnav vertically when the screen size is 600px or less.</p>
  <h4>Resize the browser window to see the effect.</h4>
</div>
</body>
</html>
