<!DOCTYPE html>
<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
<title>List of links</title>

</head>
  <body>
    <h1 id="top">List of links</h1>
    <nav>
          <?php
            $TITLE = "List of links";
            ob_start();
          ?>

          <?php

            $CONTENT = ob_get_clean();
            include "template.html";
          ?>
    </nav>
