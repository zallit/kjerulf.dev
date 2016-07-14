<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<?php
  $TITLE = "Test side 3";
  ob_start();
?>

<?php

  $CONTENT = ob_get_clean();
  include "template.html"
?>


test 3
