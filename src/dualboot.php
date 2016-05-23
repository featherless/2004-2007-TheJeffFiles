<?php
  include("globalfunctions.php");

  startHeader();

  endHeader();
?>
     <div class=title>
         A Guide to Setting Up Windows XP and SuSE Dual Boot.</div>
         <p></p>

     <div class=contentHeader>
      About this article
     </div>
     <div class=content>
      This article will walk you through, step by step, setting up and 
        installing a dual boot system of Windows XP and SuSE Linux.&nbsp; I am 
        writing this article as I go through the process myself on a spare 
        computer to verify that all of the information I place here is as 
        accurate as possible.<br>
        <a href="dualboot.php?printerfriendly=yes">View the Printer Friendly version</a>
     </div><div class=footer>
      Last updated 7/17/05 at 10:00PM
     </div><p></p>

     <div class=contentHeader>
      Gathering the things you'll need</div>
     <div class=content>
      <ol>
       <li>A Windows XP installation CD.&nbsp; Any version will suffice.<br>
&nbsp;</li>
        <li>A SuSE Linux installation CD.&nbsp; These are available at
        <a href="http://www.linuxiso.org/">LinuxISO.org</a>.&nbsp;
        <a href="http://www.linuxiso.org/download.php/593/SUSE-9.1-personal-x86.iso">
        Direct link to SuSE 9.1</a> (700megs).<br>
&nbsp;</li>
        <li>A computer with a CD drive, at least 20 gigs of hard drive space 
        (preferably 40 or higher), and I would suggest an absolute minimum of 
        256 megs of ram.<br>
&nbsp;</li>
        <li>A connection to the internet (optional, but suggested).<br>
&nbsp;</li>
        <li>Keyboard, mouse, and monitor would be nice, too.</li>
      </ol>
     </div><p></p>
     <div class=contentHeader>
      Installing Windows</div><div class=content>
        <ol>
       <li>The first OS we need to install is Windows.&nbsp; The reason for this 
        is Windows gets very, <i>very</i> picky about its boot loader, and tends 
        not to boot if you install Linux first.<br>
&nbsp;</li>
        <li>Stick in your Windows CD to your computer, and boot up using the CD.&nbsp; 
        You will be greeted by the Windows installation screen after it boots 
        up.<br>
&nbsp;</li>
        <li>On the first screen, follow the directions <i>&quot;To set up Windows XP 
        now, press ENTER&quot;</i>.<br>
&nbsp;</li>
        <li>Press F8 on the next screen to agree to the terms.<br>
&nbsp;</li>
        <li>If you have already installed a copy of windows on this system, 
        press escape to continue to the partitioning screen.<br>
&nbsp;</li>
        <li>Here, you will need to remove all existing partitions from your hard 
        drive, allowing you to start with a clean slate.<br>
        <b><i>WARNING: This will remove all data from your hard drive.&nbsp; 
        Make sure you back up any important data you may have.</i></b><br>
&nbsp;</li>
        <li>Once the partitions have been removed, create a new partition of at
        <i>least</i> 10 gigs (10240 megs) for Windows.&nbsp; Leave the rest of 
        your hard drive unpartitioned for now, as Linux will handle that.<br>
&nbsp;</li>
        <li>Select the partition you just created and press ENTER to start 
        formatting your partition.<br>
&nbsp;</li>
        <li>Select <i>&quot;Format the partition using the NTFS file system&quot;</i>, 
        this file system allows file-compression and is incredibly useful.<br>
&nbsp;</li>
        <li>Windows will now format your hard drive, this step may take a while 
        depending on how large your hard drive is.<br>
&nbsp;</li>
        <li>Once formatting is complete, Windows will begin installing files on 
        your computer, and you basically have to wait for a bit while Windows 
        installs itself.<br>
&nbsp;</li>
        <li>After rebooting, windows will finalize installation (it tends to 
        estimate it at about 40 minutes).&nbsp; This part is rather easy to do, 
        just click some dialogs, set your clock, and you're on your way.<br>
&nbsp;</li>
        <li>Finally, reboot one last time once the installation is finished and 
        make sure Windows is running fine.&nbsp; Assuming that it is, reboot 
        your computer and you're ready for the next step.</li>
      </ol>
     </div><p></p>

     <div class=contentHeader>
      Installing SuSE</div>
     <div class=content>
      <ol>
       <li>When your computer starts up, stick the SuSE cd in and you will be 
        welcome by the SuSE boot menu.&nbsp; You will want to click 
        &quot;Installation&quot; within 20 seconds to start installing it.<br>
&nbsp;</li>
        <li>Select the language you want to install SuSE in.<br>
&nbsp;</li>
        <li>The next screen is where you set up all your configurations.&nbsp; 
        Theoretically you should be able to just click accept.&nbsp; However, if 
        you would like, you can customize your settings here quite a lot.&nbsp; 
        For this article, we will just be installing the default package, 
        therefore we will just click Accept immediately.<br>
&nbsp;</li>
        <li>Enter a password for Root.<br>
&nbsp;</li>
        <li>Configure your network.<br>
&nbsp;</li>
        <li>Test the connection on the next screen and download any updates that 
        it may find.&nbsp; Make sure to skip over any kernel updates and to do 
        them when you are finished installing SuSE.<br>
&nbsp;</li>
        <li>After the updates page is finished, SuSE will update the system 
        configuration and then allow you to set the machine as stand-alone or a 
        network client.&nbsp; Depending on your setup, choose whichever one 
        works best for you.<br>
&nbsp;</li>
        <li>Enter a username and password for the main account and hit Next.<br>
&nbsp;</li>
        <li>Next you'll get to view the release notes, and the next screen after 
        that is verifying your hardware configuration.&nbsp; Hopefully SuSE was 
        able to select all of the proper drivers for your video card and 
        monitor.&nbsp; I suggest going in to the video card configuration 
        manager and testing the video card (by clicking Finalize and Test).&nbsp; 
        Also make sure to select as high of resolution as possible in this 
        screen to see how far SuSE will be able to go.&nbsp; The video card is 
        the most likely part of the computer to not run correctly, often forcing 
        you to use a command-prompt style SuSE instead of the GUI.<br>
&nbsp;</li>
        <li>Once you have finished configuring your hardware, hit Finish and 
        SuSE will start up.<br>
&nbsp;</li>
        <li>Congratulations!&nbsp; You now have a dual boot Windows XP/SuSE 
        Linux computer!</li>
      </ol>
     </div><p></p>

<?php
  endBody();
?>