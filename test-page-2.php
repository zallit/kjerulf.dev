<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">

<?php
  $TITLE = "My Home Page";
  ob_start();
?>
<p>Welcome to my web page<p>

<?php

  $CONTENT = ob_get_clean();
  include "template.html"
?>
