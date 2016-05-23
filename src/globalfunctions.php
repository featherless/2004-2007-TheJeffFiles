<?php

  $GLOBALS['site_title']='TheJeffFiles.com';
  $GLOBALS['upload_size']=26214400;
  $GLOBALS['download_dir']='downloads/';
  $GLOBALS['valid_filetypes']=array('htm','html','js','css','ico','gif','bmp','jpg','jpeg','rar','zip','txt','pdf','mp3','wav','mid','midi','png','php','gz','tar','doc','h','cpp','cc','c','ppt','rc','res','cur','xml','nsi','iss','swf');
  $GLOBALS['valid_filetypesphp']=array('htm','html','js','css','ico','gif','bmp','jpg','jpeg','rar','zip','txt','pdf','mp3','wav','mid','midi','png','php','gz','tar','doc','h','cpp','cc','c','ppt','rc','res','cur','xml','nsi','iss','swf');
  $GLOBALS['hostversion']='0.4.1b (10/06/05)';
  $GLOBALS['validchars']='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890_ ().,-';
  $GLOBALS['sql_class']='';

  if (!array_key_exists('printerfriendly', $_GET)) {
    $_GET['printerfriendly'] = '';
  }

  function startHeader()
  {
    print("<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n");
    print("<html>\n\n");
    print("    <head>\n");
    if($_GET['printerfriendly']!='yes')
    {
      print("      <link rel=StyleSheet type=\"text/css\" href=layout.css>\n");
      print("      <script src=functions.js language=JavaScript type=text/javascript></script>\n");
    }
    else
      print("      <link rel=StyleSheet type=\"text/css\" href=layoutprint.css>\n");
    $title=$GLOBALS['site_title'];
    print("        <title>$title</title>\n");
    print("      <meta http-equiv=content-type content=\"text/html; charset=iso-8859-1\">\n");
  }

  function endHeader()
  {
    print("    </head>\n");
    print("    <body>\n");
    if($_GET['printerfriendly']!='yes')
      require("PHP/topcode.php");
  }

  function endBody()
  {
    if($_GET['printerfriendly']!='yes')
      require("PHP/botcode.php");
  }

  function printError($error,$returnURL)
  {
     startHeader();
     endHeader();
     print("<div class=\"title\">Error</div>\n <div class=\"content\"><center>$error<p><a href=\"$returnURL\">Return</a></div><p></p>");
     endBody();
  }

  function verifyString($string)
  {
    $validChars='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890_';

    $length=strlen($string);
    for($count=0;$count<$length;$count++)
    {
      if(!strchr($validChars,$string[$count]))
        return false;
    }
    return true;
  }
  function checkDirLocked($dir)
  {
      if($dir[strlen($dir)-1]!='/')
         $dir.='/';
      $file_ptr=fopen($dir.'.lock','rb');
      if($file_ptr)
      {
        fclose($file_ptr);
        return true;
      }
      return false;
  }

  function verifyFilename($string)
  {
    $validChars=$GLOBALS['validchars'];
    $length=strlen($string);
    for($count=0;$count<$length;$count++)
    {
      if(!strchr($validChars,$string[$count]))
        return false;
    }
    return true;
  }
  function getFirstInvalid($string)
  {
    $validChars=$GLOBALS['validchars'];
    $length=strlen($string);
    for($count=0;$count<$length;$count++)
    {
      if(!strchr($validChars,$string[$count]))
        return $string[$count];
    }
    return '';
  }

  function connectSQL()
  {
  }

  function disconnectSQL()
  {
  }

  function checkLogin()
  {
    session_start();
    $time=time();
    $userID=1;
    $loggedin=true;
    $ip='127.0.0.1';
    return 1;
  }

  function getUserInfo()
  {
    $userID=1;

    $array['name']='jeff';
    $array['membersince']='forever';
    $array['username']='jverkoey';
    $array['email']='email';
    $array['solution']='solution';
    $array['domain']='domain';
    $array['space']=500;
    $array['bblog']=0;
    $array['phpbb']=0;
    $array['wiki']=0;
    $array['num_packages']=0;

    if($array['solution']==2 || $array['solution']==4)
      $array['maxspace']=536870912;
    else if($array['solution']==3)
      $array['maxspace']=10485760;
    else
      $array['maxspace']=1;
/*  if($array['solution']!=4)
  {
    print("At this time there is maintenance on TheJeffFiles' hosting service.  The following things are being done:<br>Updating package system (adding mediawiki software).");
    die();
  }*/
    $array['remspace']=$array['maxspace']-$array['space'];
    $array['spaceperc']=round($array['space']/$array['maxspace']*100,2);
    return $array;
  }

  function printLoginForm()
  {
    require('loginform.php');
  }

  function printActiveUsers()
  {
    print("No active users");
    print("\n");
  }

  function initUsersTable()
  {
  }

  function grabUser($row)
  {
    return 0;
  }





  function initNewsTable($sortuser,$archive)
  {
  }

  function grabNews($row)
  {
    return array();
  }

  function grabDownloadInfo($id)
  {
    return array();
  }

  function initSourceTable($parentfolder,$userID)
  {
  }
  function grabSource($row)
  {
    return array();
  }


  function initPortoliosTable($parentfolder,$userID)
  {

  }
  function grabPortfolio($row)
  {
    return array();
  }


  function initDownloadsTable($sortuser)
  {
  }


  function grabDownload($row)
  {
    return array();
  }

  function incrementDownload($id)
  {
    return array();
  }

  function filesizeType($filesize)
  {
    $filesizeType=" bytes";
    if($filesize>=1024)
    {
       $filesize/=1024;
       $filesizeType="kb";
       if($filesize>=1024)
       {
          $filesize/=1024;
          $filesizeType="mb";
       }
    }
    $filesize=round($filesize,2);
    return $filesize.$filesizeType;
  }
?>