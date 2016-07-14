<head>
<?php

$CONTENT = ob_get_clean();
include "template.html"
?>

<link href="style.css" rel="stylesheet" type="text/css">  <!-- Tell the page to use style.css as a stylesheet and defines how the text and background looks-->
<meta charset="utf-8"> <!-- Defines what kind of character set is in use -->
</head>

<nav>
  <?php
    $TITLE = "My Home Page";
    ob_start();
  ?>

dette er en test håber den til passer sig
