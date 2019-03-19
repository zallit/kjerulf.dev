this is my own personal not so secrect startpage with links to a lot of stuff
<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css">  <!-- Tell the page to use style.css as a stylesheet and defines how the text and background looks-->
    <meta charset="utf-8"> <!-- Defines what kind of character set is in use -->
  <title>Andreas Kjerulf´s testing site</title> <!-- The page title showing in the browser window -->
  </head>
<body> <!-- The body text of the page and me testing verious things -->
  <h1> Welcome to my testing site kjerulf.dev</h1> <!-- The headline for the index page -->

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
