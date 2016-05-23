<?php
  include("globalfunctions.php");

  startHeader();

  endHeader();
?>
     <div class=title>
         News</div>
         <p></p>
<?php
  connectSQL();

  initUsersTable();

  $sortuser=$_GET['sortuser'];
  if(!isset($sortuser))
     $sortuser=-1;

  $viewarchive=$_GET['viewarchive'];
  if(!isset($viewarchive))
    $viewarchive=0;

  initNewsTable($sortuser,$viewarchive);

  if($GLOBALS['newsrows']>0)
  {
    for($count=0;$count<$GLOBALS['newsrows'];$count++)
    {
      $array=grabNews($count);
      print("  <div class=contentHeader>\n   ");
      print($array['newstitle']);
      print("\n  </div>\n");

      print("  <div class=content>\n\n<!-- News Item Start -->\n   ");
      print($array['news']);
      print("\n<!-- News Item End -->\n\n  </div>\n");

      print("  <div class=footer>\n   ");
      print("Posted by- ".$array['newsposter']." on ".$array['newsdate']);

      if($array['newsmodified']!='N/A')
      {
        print("<br>Modified- ".$array['newsmodified']);
      }
      print("\n  </div><p></p>\n");
    }
  }
  else
  {
    print("  <div class=contentHeader>No News</div>");
  }
  print("<p>&nbsp;</p>");


  print("     <div class=contentHeader>\n         View by</div><div class=content>Poster:<br>");
  if(!isset($sortuser) || $sortuser==-1)
    print("All - ");
  else
  {
    $link="index.php?sortuser=-1";
    if(isset($viewarchive))
      $link.="&amp;viewarchive=$viewarchive";
    print("<a href=\"$link\">All</a> - ");
  }

  for($count=0;$count<$GLOBALS['usersrows'];$count++)
  {
    $array=grabUser($count);
    $id=$array['id'];
    if($sortuser!=$id)
    {
      $link="index.php?sortuser=$id";
      if(isset($viewarchive))
        $link.="&amp;viewarchive=$viewarchive";
      print("<a href=\"$link\">");
    }
    print($array['realname']);
    if($sortuser!=$id)
      print("</a>");
    if($count<$GLOBALS['usersrows']-1)
      print(" - \n");
  }
  print("\n  <p></p>Time:<br>\n  ");

  if(!isset($viewarchive) || $viewarchive==0)
    print("Newest - <a href=\"index.php?sortuser=$sortuser&amp;viewarchive=1\">Archive</a>\n    ");
  else
    print("<a href=\"index.php?sortuser=$sortuser&amp;viewarchive=0\">Newest</a> - Archive\n    ");

  print('</div><p></p>'."\n  ");


  disconnectSQL();
  endBody();
?>