/* ==========================================
样本文件：登陆程序
文本版本：1, 0, 0, 1
字符编码：Unicode UTF-8
程序语言：Javascript
调用方式：onclick="loginchk();"
编写人员：dfc643(北极光.Norckon)
                         http://www.fcsys.us
=========================================== */

function login() {
    //--------您的账号密码---------//
    /*-----------------------------*/
    var     usr='admin';       //账号
    var     pwd='password';    //密码
    /*-----------------------------*/
    
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    
    if(username==usr&&password==pwd) {
        window.location.href="top.htm";
    } else {
        alert('抱歉，用户名密码不正确！');
    }
}