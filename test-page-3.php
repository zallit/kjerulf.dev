<!DOCTYPE html>
<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
<title>Test page 3</title>

</head>
<h1>Test page 3</h1>
<nav>
      <?php
        $TITLE = "test page 3";
        ob_start();
      ?>

      <?php

        $CONTENT = ob_get_clean();
        include "template.html"
      ?>
</nav>

<body>


</body>
</html>
