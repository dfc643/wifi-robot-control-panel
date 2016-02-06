<?php include '../config/config.php'; 
include '../login.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>无线小车控制台</title>
</head>
<body>
    <form action="<?php echo $_SERVER[PHP_SELF]; ?>" method="post">
        <table border="0">
            <tr>
                <td width="123.6px" height="65px" valign="bottom" align="right"></td>
                <td width="123.6px" height="65px" valign="bottom" align="center"><input type="image" name="dpad" value="dpadup" accessKey="i" src="../image/dpad-up.png" onmouseover='this.src="../image/dpad-up2.png"' onmouseout='this.src="../image/dpad-up.png"'/></td>
                <td width="123.6px" height="65px" valign="center" align="center"></td>
            </tr>
            <tr>
                <td width="123.6px" height="65px" valign="center" align="right"><input type="image" name="dpad" value="dpadleft" accessKey="j" src="../image/dpad-left.png" onmouseover='this.src="../image/dpad-left2.png"' onmouseout='this.src="../image/dpad-left.png"' /></td>
                <td width="123.6px" height="65px" valign="center" align="center"><input type="image" name="dpad" value="dpadstop" accessKey="m" src="../image/dpad-stop.png" onmouseover='this.src="../image/dpad-stop2.png"' onmouseout='this.src="../image/dpad-stop.png"' /></td>
                <td width="123.6px" height="65px" valign="center" align="left"><input type="image" name="dpad" value="dpadright" accessKey="l" src="../image/dpad-right.png" onmouseover='this.src="../image/dpad-right2.png"' onmouseout='this.src="../image/dpad-right.png"' /></td>
            </tr>
            <tr>
                <td width="123.6px" height="65px" valign="center" align="center"></td>
                <td width="123.6px" height="65px" valign="top" align="center"><input type="image" name="dpad" value="dpadudown" accessKey="k" src="../image/dpad-down.png" onmouseover='this.src="../image/dpad-down2.png"' onmouseout='this.src="../image/dpad-down.png"' /></td>
                <td width="123.6px" height="65px" valign="center" align="center"></td>
            </tr>
        </table>
        <table border="0">
            <tr>
                <td width="92.7px" height="65px" valign="center" align="center"><input type="image" name="dpad" value="funclight" src="../image/tool-light.png"/></td>
                <td width="92.7px" height="65px" valign="center" align="center"><input type="image" name="dpad" value="funclight" src="../image/tool-light.png"/></td>
                <td width="92.7px" height="65px" valign="center" align="center"><input type="image" name="dpad" value="funclight" src="../image/tool-light.png"/></td>
                <td width="92.7px" height="65px" valign="center" align="center"><input type="image" name="dpad" value="funclight" src="../image/tool-light.png"/></td>
            </tr>
        </table>
    </form>
<?php
    $dpad=$_POST['dpad'];
    switch($dpad)
    {
        case "dpadup": passthru('echo "'.$upkey.'" >> /dev/ttyS1');break;
        case "dpadudown": passthru('echo "'.$downkey.'" >> /dev/ttyS1');break;
        case "dpadleft": passthru('echo "'.$leftkey.'" >> /dev/ttyS1');break;
        case "dpadright": passthru('echo "'.$rightkey.'" >> /dev/ttyS1');break;
        case "dpadstop": passthru('echo "'.$stopkey.'" >> /dev/ttyS1');break;
        case "funclight": passthru('echo "'.$lightkey.'" >> /dev/ttyS1');break;
    }
?>
</body>
</html>