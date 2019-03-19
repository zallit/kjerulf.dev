<!DOCTYPE html>
<html>
<head>
<style media="screen">
body{ overflow-y: scroll; margin: 0; padding: 0; font-family: Karla; }

nav{ background-color: #383332; text-align: center; }
nav ul{ list-style-type: none; padding: 0; margin: 0; position: relative; }
nav ul li{ display: inline-block; }
nav ul li:hover{ background-color: #2465F3; }
nav ul li a{ display: block; padding: 15px; color: #FFF; text-decoration: none; }

nav ul li:hover > ul{ display: block; }
nav ul ul{ padding: 3px 0 3px 0; display: none; text-align: left; position: absolute; background-color: #2465F3; border: 2px solid #383332; border-top: 0; margin: 0 0 0 -2px; min-width: 200px; }
nav ul ul li{ display: block; border: none; }
nav ul ul li:hover{ background-color: #383332; }

@import url(https://fonts.googleapis.com/css?family=Karla);

</style>
<title>Test page 3</title>

</head>
<h1>Test page 3</h1>
<nav>


  </font>

  <ul> <!-- this is the start of the menu -->
      <li><a href="#">Home</a></li> <!-- this link is  by it self -->
      <li><a href="#">Changelog</a></li>
      <li><a href="#">Dropdown</a> <!-- This is the start of Dropdown -->
      <ul>
        <li><a href="test-page-1.php">Test page 1 (respnsesive menu and old site)</a></li> <!-- this link is in Dropdown menu -->
        <li><a href="test-page-2.php">Test page 2</a></li> <!-- this link is in Dropdown menu -->
        <li><a href="test-page-3.php">Test page 3</a></li> <!-- this link is in Dropdown menu -->
      </ul>
</li> <!-- This is the end of Dropdown -->
        <li><a href="#">Andreas</a>
        <ul>
          <li><a href="www.dsin.dk">Kjerulf</a></li> <!-- this link is under Andreas -->
          <ul>
            <li><a href="www.dsin.dk">Kjerulf</a></li>
          </ul>
        </ul>
      </li>
    </ul> <!-- this is the end of the menu -->
</nav>

<body>


</body>
</html>
