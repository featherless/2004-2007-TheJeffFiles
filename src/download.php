<?php
  include("globalfunctions.php");

  startHeader();

  endHeader();
?>
     <div class=title>
         Downloads</div>
         <p></p>
<?php
  connectSQL();

  initUsersTable();

  print("<div class=contentHeader>View by user:</div><div class=content>");
  if(!isset($sortuser) || $sortuser==-1)
    print("All - ");
  else
  {
    $link="download.php?sortuser=-1";
    print("<a href=\"$link\">All</a> - ");
  }

  for($count=0;$count<$GLOBALS['usersrows'];$count++)
  {
    $array=grabUser($count);
    $id=$array['id'];
    if($sortuser!=$id)
    {
      $link="download.php?sortuser=$id";
      print("<a href=\"$link\">");
    }
    print($array['realname']);
    if($sortuser!=$id)
      print("</a>");
    if($count<$GLOBALS['usersrows']-1)
      print(" - ");
  }
  print('</div><p></p>');

  if(!isset($sortuser))
     $sortuser=-1;

  initDownloadsTable($sortuser);

  if($GLOBALS['downloadsrows']>0)
  {
    for($count=0;$count<$GLOBALS['downloadsrows'];$count++)
    {
      $array=grabDownload($count);
      $filesize=$array['size'];
      print("<div class=contentHeader>\n");
      print('<a href="downloadfile.php?id='.$array['id'].'" class="red">'.$array['filename'].'</a> ('.filesizeType($filesize).')');

      print("</div><div class=content>\n");
      print($array['description']);
      print("</div>\n");

      print("<div class=footer>");
      print("Downloads- ".$array['downloads']."<br>Uploaded by- ".$array['poster']." on ".$array['date']);
      print("</div>\n<p></p>");
    }
  }
  else
  {
    print("<div class=contentHeader>No Downloads</div>");
  }
  print("<p></p>");
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