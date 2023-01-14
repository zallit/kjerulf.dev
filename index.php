<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css">  <!-- Tell the page to use style.css as a stylesheet and defines how the text and background looks-->
    <meta charset="utf-8"> <!-- Defines what kind of character set is in use -->
  <title>Andreas Kjerulf´s testing site</title> <!-- The page title showing in the browser window -->
  </head>
<body> <!-- The body text of the page and me testing verious things -->
  <h1> Welcome to my testing website kjerulf.dev</h1> <!-- The headline for the index page -->

  <nav>
      <?php
        $TITLE = "kjerulf.dev index";
        ob_start();
      ?>

      <?php

        $CONTENT = ob_get_clean();
        include "template.html";
      ?>
  </nav>
  <h2 style="color:red;">Please note that this is where I test my code so dont expect anything to work at all !!! </h2>
  <br> <!-- Break Line (new line) -->
  <table style="border: 1px solid white">
  <tr>
  <td>
This content will be surrounded by a 1 pixel wide white solid line.
  </td>
  </tr>
  </table>
<br>

<h3 style="color:royalblue;">This is a royalblue heading</h3>
<h3 style="color:blue;">This is a blue heading</h3>
<img style="border:1px solid white;" src="img/andreas-mic.png" alt="Andreas Mic Pic" height="20%" width="20%" /><br>
<span style="color:red;">This is a red span test </span>

</body>  <!-- End of the page -->
</html>
