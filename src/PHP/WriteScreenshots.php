<?php
Include("shuffle.php");
function WriteScreenshots($dir_name)
{
  $num_files=0;

  if($dir=@opendir($dir_name))
  {
    while(($file_name_dir=readdir($dir))!==false)
    {
      if(substr($file_name_dir,0,1)!=="." && $file_name_dir!="fullsize" && strstr($file_name_dir,".txt")=="" && strstr($file_name_dir,".count")=="")
      {
        $file_names[$num_files]=$file_name_dir;
        $num_files++;
      }
    }
    if($num_files>0)
    {
      shuffle_array(&$file_names);
      for($count=0;$count<$num_files;$count++)
      {
        $image_link="$dir_name/fullsize/$file_names[$count]";
        $image_thumb="$dir_name/$file_names[$count]";
        $file_size=filesize($image_link);
        $file_size_mb=round(($file_size/1024)/1024,2);
        $date_modified=date("F d Y H:i:s", filemtime($image_link));

        print("<div class=contentHeader>");

         print("$file_names[$count]");

        $counter_file="$image_link.count.txt";
        if(!file_exists($counter_file))
        {
          $counter=0;
        }
        else
        {
          $file=fopen($counter_file,"r+");
          $counter=fgets($file);
          fclose($file);
        }

         print("</div><div class=content>");
         print("<center><a href=\"viewimage.php?fileID=$image_link\"><img src=\"$image_thumb\" alt=\"$image_link\" border=0></a></center>");
         print("</div><div class=footer>");

         print("Views: $counter<br>Size: $file_size_mb mb<br>$date_modified");

        print("</div><p></p>");
      }

    }else
    {
      print("No images found\n");
    }
  }else
  {
    print("<i>Error finding files directory $dir_name</i>\n");
  }
}?>