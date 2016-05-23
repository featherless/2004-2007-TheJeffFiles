<?php
  include('globalfunctions.php');

  $thankyou='';
  if($_POST['OK']=='Submit Error')
  {
     $senderemail="webmaster@TheJeffFiles.com";
     $sendername=$_POST['username'];
     $recipient="jverkoey@gmail.com";
     $subject="TheJeffFiles.com Error Report";
     $mailheader="From: webmaster@TheJeffFiles.com\n";
     $mailheader.="Reply-To: none\n\n";
     $message="This is an automatically generated email sent from TheJeffFiles.com.\n\n";
     $message.="Error report:\n\n";
     $message.=$_POST['errorreport'];

     if(!mail($recipient, $subject, $message, $mailheader))
     {
       print("Error sending mail.");
       endBody();
       die();
     }

     $thankyou='Thank you for submitting your error.  It will be fixed ASAP.<p>';
  }
  startHeader();
  endHeader();
?>
     <div class=title>
         Report an Error</div>
         <p></p>
     <div class=content>
       <?php print($thankyou); ?>
       <form method=post action=errorreporting.php>
        <center>
        <textarea cols='50' rows='10' name=errorreport>Error reports should contain: What the error was, how it happened, the site location it happened at, and a way to recreate the error.</textarea><br>
        Please enter your name: <input type=text name=username size=20 value="<?=$_SESSION['name']?>"><br>
        <input type=submit name=OK value="Submit Error">
        </center>
       </form>
     </div><p></p>
<?php
  endBody();
?>