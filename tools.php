<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
  <title>Tools used to code Zallit´s testing site </title>
  </head>
<body>
      <h1 id="top">Tools used to code Zallit´s testing site</h1>
  <nav>
        <?php
          $TITLE = "Changelog";
          ob_start();
        ?>

        <?php

          $CONTENT = ob_get_clean();
          include "template.html";
        ?>
  </nav>

  <h2>Editor</h2>
    <h4> Github´s ATOM <a href=www.atom.io>www.atom.io</a> with the following plugins <br> </h4>
    <h5><li>emmet <a href="https://atom.io/packages/emmet">  </li>
  <li>git-plus https://github.com/akonwi/git-plus</li>
  <li>remote-FTP https://github.com/icetee/remote-ftp </li> </h5>
  <br>

<h2>Code storage</h2> <br>
  Github <br>
  AZE webhosting <a href=https://my.azehosting.net/aff.php?aff=286>www.aze-hosting.dk

</body>
