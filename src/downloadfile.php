<?php
  include("globalfunctions.php");

  startHeader();

  endHeader();

  connectSQL();
?>
     <div class=title>
         Download File</div>
         <p></p>
<?php

  $id=$_GET['id'];
  $id=intval($id);

  $downloadstable=$GLOBALS['downloads_table'];
  $query="SELECT * FROM $downloadstable WHERE id='$id';";
  $result=mysql_query($query);

  if(!$result || mysql_num_rows($result)==0)
  {
     print("<div class=contentHeader>");
     print("Download Error");
     print("</div><div class=content>");
     print("Error finding file\n");
     print("</div><p></p>");
  }else
  {
     $filetype=mysql_result($result,0,'filetype');
     if($filetype==2)
     {
       print("<div class=contentHeader>Invalid file type</div>");
       endBody();
       die();
     }
     $numdownloads=incrementDownload($id);

     $filename=mysql_result($result,0,'filename');
     $description=stripslashes(mysql_result($result,0,'description'));

     $downloadlink=$GLOBALS['download_dir'].$filename;

     print("<div class=contentHeader>");
     print("Downloading file");
     print("</div><div class=content>");
     print("Please wait while we get your file: <i>$filename</i>\n");
     print("<br>");
     print("If the download does not appear, click <a href=\"$downloadlink\">here</a> to download it.<p></p>");

     print("<hr><b>");
     print($description);
     print("</b><iframe height=0 width=0 src='$downloadlink'></iframe>");

     print("</div><div class=footer>This file has been downloaded $numdownloads times.</div><p></p>");
  }
?>
  <div class=title>DISCLAIMER</div>
  <div class=content>
     <font size=1pt>
       I (Jeff Verkoeyen) can not be held accountable for any side-affects that the downloads may cause.
       You download all files on this site on your own accord.
     </font>
  </div><p></p>

<?php
  endBody();
?>