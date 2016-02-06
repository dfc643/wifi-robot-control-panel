<?php 
  require_once('password.php');
  require_once('key.php');
  
   switch($_POST['action']) 
   {
       case '向上':      passthru('echo "'.$cameraup.'" > /dev/ttyUSB0'); break;
       case '向下':      passthru('echo "'.$cameradown.'" > /dev/ttyUSB0'); break;
   }     
  if(!($_POST['username']==$user&&$_POST['password']==$pass))
    die();
   passthru('echo "'.$onlock.'" > /dev/ttyUSB0');
   switch($_POST['action']) 
   {
       case '房间门':    passthru('echo "'.$opendoor.'" > /dev/ttyUSB0'); break;
       case '室内主灯':  passthru('echo "'.$light.'" > /dev/ttyUSB0'); break;
       case '台灯':      passthru('echo "'.$taideng.'" > /dev/ttyUSB0'); break;
   }     
?>