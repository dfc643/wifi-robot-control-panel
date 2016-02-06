<?php include '../config/config.php'; 
include '../login.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>WIFI</title>
</head>
<body>
    <form action="<?php echo $_SERVER[PHP_SELF]; ?>" method="post">
        <table border="0" width="100%">
            <tr>
                <td width="20%" align="center"><input type="image" name="dpad" value="dpadup" src="../image/dpad-up.png"/></td>
                <td width="20%" align="center"><input type="image" name="dpad" value="dpadleft" src="../image/dpad-left.png"/></td>
                <td width="20%" align="center"><input type="image" name="dpad" value="dpadstop" src="../image/dpad-stop2.png"/></td>
                <td width="20%" align="center"><input type="image" name="dpad" value="dpadright" src="../image/dpad-right.png"/></td>
                <td width="20%" align="center"><input type="image" name="dpad" value="dpadudown" src="../image/dpad-down.png"/></td>
            </tr>
            <tr>
                <td width="20%" align="center"><input type="image" name="dpad" value="funclight" src="../image/tool-light.png"/></td>
                <td width="20%" align="center"><input type="image" name="dpad" value="funclight" src="../image/tool-light.png"/></td>
                <td width="20%" align="center"><input type="image" name="dpad" value="funclight" src="../image/tool-light.png"/></td>
                <td width="20%" align="center"><input type="image" name="dpad" value="funclight" src="../image/tool-light.png"/></td>
                <td width="20%" align="center"><input type="image" name="dpad" value="funclight" src="../image/tool-light.png"/></td>
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