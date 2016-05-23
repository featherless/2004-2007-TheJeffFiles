<?php

class MySQL
{
  $link_id = false;
  $dbSelected = false;

  function __construct($server,$username,$password,$db)
  {
    $link_id=mysql_connect($server,$username,$password);
    $dbSelected=mysql_select_db($db,$link_id);
  }

  function __destruct()
  {
    mysql_close($link_id);
  }

  function dbOK() { return $dbSelected; }
}

?>