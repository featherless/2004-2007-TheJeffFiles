<?php
  include("globalfunctions.php");

  startHeader();

  endHeader();

  include 'PHP/WriteScreenshots.php';
?>

     <div class=title>
         Screenshots</div>
         <p></p>

<?php
  WriteScreenshots("screenshots");

  endBody();
?>