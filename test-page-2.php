<link href="style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
      <h1>Test page 2</h1>
  <title>Test page 2</title>
    <?php

    $CONTENT = ob_get_clean();
    include "template.html"
  ?>

  </head>

    <nav>
      <?php
        $TITLE = "test page 2";
        ob_start();
      ?>

</nav>


<body>


</body>
</html>
