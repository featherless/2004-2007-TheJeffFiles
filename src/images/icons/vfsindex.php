<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<?php
   $dirname=dirname($_SERVER['PHP_SELF']);
   echo "<title>Virtual File System--$dirname</title>\n";

   echo "<script type=\"text/javascript\" src=\"http://www.TheJeffFiles.com/wz_dragdrop.js\"></script>\n";

/*   echo "<SCRIPT TYPE=\"TEXT/JAVASCRIPT\" LANGUAGE=\"JAVASCRIPT\">\n";

   echo "function grabStyle(id)\n{\n";            
   echo "var ns4 = (document.layers);\n";
   echo "var ie4 = (document.all && !document.getElementById);\n";
   echo "var ie5 = (document.all && document.getElementById);\n";
   echo "var ns6 = (!document.all && document.getElementById);\n";
   echo "   if(ns4)             return document.layers[id].style;\n";
   echo "   else if(ie4)        return document.all[id].style;\n";
   echo "   else if(ie5 || ns6) return document.getElementById(id).style;\n}\n";

   echo "function position()\n{\n";
   echo "  var width=document.body.clientWidth;\n";
   echo "  var height=document.body.clientHeight;\n";
   echo "  var obj;\n";
   echo "  var row=60;\n";
   echo "  var x=0;\n";    */

  if($dir=@opendir("/home/users/web/b2851/pow.jverkoey/htdocs".$dirname))
  {   
    $num_files=0;
    while(($file_name_dir=readdir($dir))!==false)
    {
       if($file_name_dir!=".")
       {
         $file_names[$num_files]=$file_name_dir;
         $num_files++;
       }
    } 
/*    if($num_files>0)
    {
       for($count=0;$count<$num_files;$count++)
       {
           echo "  obj=grabStyle(\"file$count\");\n";
           echo "  obj.left=x+\"pt\";\n";
           echo "  obj.top=row+\"pt\";\n";                      
         //  echo "  alert(\"x: \"+obj.left+\" row: \"+obj.top+\"\\nx: \"+x+\" row: \"+row);\n";
           echo "  x+=80;\n";
           echo "  if(x+80*5>=width)\n  {\n";
           echo "    x=0;\n";
           echo "    row+=80;\n  }\n";
           echo "\n";
       }
    }    */
  }
  else
  {
     die('Error opening directory.<p>');
  }
//  echo "}\n</SCRIPT>\n";
  echo "<STYLE TYPE=\"TEXT/CSS\">\n";
    if($num_files>0)
    {              
       $x=0;
       $row=60;
       for($count=0;$count<$num_files;$count++)
       {
          echo "#file$count";
          echo "\n{\nposition:         absolute;\ntop:              ".$row."px;\nleft:             ".$x."px;\nwidth:            100px;\nheight:           80px;\nz-index:          1;\n  }\n";
          $x+=140;
          if($x>600)
          {
            $x=0;
            $row+=100;
          }
       }
    }
  echo "</STYLE>\n";
?>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        
</head>
<body bgcolor="#FFFFFF">

<?php
    echo "<h2>Browsing directory: $dirname--Click the <img src=\"http://www.TheJeffFiles.com/vfsimages/dragndrop.gif\"> to drag the icon</h2>\n";

    if($num_files>0)
    {
       for($count=0;$count<$num_files;$count++)
       {
          $currfile=$file_names[$count];
          $lasttype=$currfile;       
          $filetype=strchr($currfile,'.');
          $filetype=substr($filetype,1);
          while(strlen($filetype)>=1)
          {
            $lasttype=$filetype;
            $filetype=strchr($lasttype,'.');
            $filetype=substr($filetype,1);
          }
          $filetype=$lasttype;
          $gifimage="noimage";
          echo "<div ID=\"file$count\" ALIGN=\"center\">\n";
          $link=1;
          if(is_dir($currfile))
          {
             $gifimage="folder";
             $currfile.="/vfsindex.php";
             if(!file_exists($currfile))
               $link=0;
          }
          if(file_exists("/home/users/web/b2851/pow.jverkoey/htdocs/vfsimages/$filetype.gif"))
             $gifimage="$filetype";
          if($link)
            echo "<img src=\"http://www.TheJeffFiles.com/vfsimages/dragndrop.gif\"><a href=\"$currfile\">";
          echo "<img border=0 src=\"http://www.TheJeffFiles.com/vfsimages/$gifimage.gif\" alt=\"$file_names[$count]\">";
          echo "<br>$file_names[$count]\n";
          if($link)
            echo "</a>";
          echo "</div>\n";
       }
    }
    else
    {
       echo "No files or folders found.<br>\n";
    }
    closedir($dir);

    if($num_files>0)
    {
       echo "<script type=\"text/javascript\">\n<!--\nSET_DHTML(";
       for($count=0;$count<$num_files;$count++)
       {
          echo "\"file$count\"";
          if($count<$num_files-1)
            echo ", ";
       }
       echo ");\n//-->\n</script>";
    }
?>
</body>

</html>