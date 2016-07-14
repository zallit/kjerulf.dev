<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<h1>Test page 3</h1>
<?php
  $TITLE = "Test side 3";
  ob_start();
?>

<?php

  $CONTENT = ob_get_clean();
  include "template.html"
?>
