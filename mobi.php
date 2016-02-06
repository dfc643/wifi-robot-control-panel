<?php include 'config/config.php'; 
include 'login.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>无线小车控制台</title>
    <meta content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width" name="viewport" /> 
    <link rel="stylesheet" href="style/main.css" type="text/css" />
</head>
<body>
    <div id="topbar">
        <div class="contentmobi" >
            <div class="title">　无线小车控制台 <small>v1.0</small></div>
            <div class="user"><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><input name="syslogout" value="退出系统" type="submit"/></form></div>
        </div>
    </div>
        <p>当前小车捕获的实时画面：</p>
        <center><img src="http://<?php echo $camip; ?>:<?php echo $camport; ?>/?action=stream" width="320px" height="240px"/></center>
        <p>小车行进方向控制面板：</p>
        <iframe src="include/ctrl-mobi.php" scrolling="no" width="100%" height="110px" frameborder="0"></iframe>
    <p><center><small>Hunan International Economics University - CS201203</small></center></p>
<?php
    if($_POST['syslogout']=="退出系统")
    {
        unset($_SESSION['FC_GOODJOU']);
        echo '<SCRIPT>window.location.href="login.php"</SCRIPT>';
    }
?>
</body>
</html>