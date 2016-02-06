<?php 
/* ==========================================
样本文件：登陆程序
文本版本：1, 0, 0, 1
字符编码：Unicode UTF-8
程序语言：PHP
调用方式：include '本文件';[仅同目录生效]
编写人员：dfc643(北极光.Norckon)
                         http://www.fcsys.us
=========================================== */
//SESSION 设置区
//error_reporting(0);
session_start();

if($_SESSION['FC_GOODJOU']!="jou")
{
    loginstatus();
}

function loginstatus()
{
    $filename= substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/')+1);
    include 'config/config.php'; //全局设置
    
    
    if (!isset($_POST['FC_USER'])) 
    {
        if($filename!="login.php") echo '<SCRIPT>window.location.href="login.php"</SCRIPT>';  
        loginfo(1);
        return 1;
        exit;
    } 
    else if($_POST['FC_USER']!=$loginuser||$_POST['FC_PW']!=$loginpasswd)
    {
        if($filename!="login.php") echo '<SCRIPT>window.location.href="login.php"</SCRIPT>';  
        loginfo(2);
        return 2;
        exit;
    }
    else if(($_POST['FC_USER']==$loginuser&&$_POST['FC_PW']==$loginpasswd)||$_SESSION['FC_GOODJOU']=="jou")
    {
        $_SESSION['FC_GOODJOU']="jou";
        passthru('echo "'.$passkey.'" >> /dev/ttyS1');
        if($filename=="login.php") echo '<SCRIPT>window.top.location.href="../index.php"</SCRIPT>';
        return 0;
    }
    else
    {
        if($filename!="login.php") echo '<SCRIPT>window.location.href="login.php"</SCRIPT>';  
        loginfo(3);
        return 3;
        exit;
    }
}

function loginfo($status)
{
    include 'config/config.php'; //全局设置 
    include 'config/gb-head.php';   //公用HTML头部 
    include 'config/dialog.php';    //对话框函数

    
    if($status==1)
    {
        $filename= substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/')+1);
            if($filename!="login.php")
                echo '<SCRIPT>window.location.href="login.php"</SCRIPT>';  
                
        print '<body class="dialogbody"><center><form action="'.$_SERVER['PHP_SELF'].'" method="post">';
            dialogbegin('系统登录');
        print '<table border="0">
                <tr><td>用户名:</td><td><input name="FC_USER" type="text" size="25" /></td></tr>
                <tr><td>密　码:</td><td><input name="FC_PW" type="password" size="25" /></td></tr>
                </table>';
            dialogend('<input name="loginbut" type="submit" class="buttonface" value="登陆" />');   
        print '</form></center></body>';
    }
    else if($status==2)
    {
        $filename= substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/')+1);
            if($filename!="login.php")
                echo '<SCRIPT>window.location.href="login.php"</SCRIPT>';  
                
        print '<body class="dialogbody"><center>';
            dialogbegin('登录失败');
        print '用户名或者密码错误，请重试！';
            dialogend('FC-System Computer Inc');   
        print '</center></body>';
    }
    else
    {
        $filename= substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/')+1);
            if($filename!="login.php")
                echo '<SCRIPT>window.location.href="login.php"</SCRIPT>';  
                
        print '<body class="dialogbody"><center>';
            dialogbegin('登录失败');
        print '未知错误';
            dialogend('FC-System Computer Inc');   
        print '</center></body>';
    }
    
    print '</html>';
}
?>
