<?php include 'config/config.php'; 
include 'login.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>无线小车控制台</title>
    
    <link rel="stylesheet" href="style/main.css" type="text/css" />
    <script src="include/uaredirect.js" type="text/javascript"></script>
    <script type="text/javascript">uaredirect("http://<?php echo $_SERVER["HTTP_HOST"]; ?>/mobi.php");</script>
</head>
<body>
    <div id="topbar">
        <div class="content">
            <div class="title">无线小车控制台 <small>v1.0</small></div>
            <div class="item"><a href="#">[控制台]</a></div>
            <div class="item"><a href="mobi.php">[手机版]</a></div>
            <div class="user"><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><input name="syslogout" value="退出系统" type="submit"/></form></div>
        </div>
    </div>
    <div id="content">
        <div class="camera">
            <p>当前小车捕获的实时画面：</p>
            <img src="http://<?php echo $camip; ?>:<?php echo $camport; ?>/?action=stream" width="370px" height="278px" style="box-shadow: 5px 5px 5px #888888;"/>
        </div>
        <div class="dpad">
            <p>小车行进方向控制面板：</p>
            <iframe src="include/ctrl-pc.php" frameborder="0" scrolling="no" width="371px" height="293px"></iframe>
        </div>
    </div>
    <br/>
    <div id="introduce">
        <p><b>项目介绍：</b>WIFI-Robot 智能遥感机器人就是利用非常成熟的WIFI无线网络为数据传输载体，实现实时控制、音视频传输和数据采集等功能的智能系统。
        WIFI-Robot 智能遥感机器人是集远程无线通讯、音视频传输、数据采集、多向机械云台、灯光控制、环境检测、超声波测距、超声波壁障。</p>
        <p><b>项目开发:</b> <a href="http://www.xshsale.com" target="_blank">小米-小米工作室</a> & <a href="http://www.fcsys.us" target="_blank">Norckon-FC-SYSTEM</a> & 其他爱好者</p>
        <p>Copyright: <small> 2013 by Hunan International Economics University - CS201203 </small>
    </div>
<?php
    if($_POST['syslogout']=="退出系统")
    {
        unset($_SESSION['FC_GOODJOU']);
        echo '<SCRIPT>window.location.href="login.php"</SCRIPT>';
    }
?>
</body>
</html>