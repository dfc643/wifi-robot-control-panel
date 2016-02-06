/* ==========================================
样本文件：验证网站是否登陆
文本版本：1, 0, 0, 1
字符编码：Unicode UTF-8
程序语言：Javascript
调用方式：body onload="auth();"
编写人员：dfc643(北极光.Norckon)
                         http://www.fcsys.us
=========================================== */

function auth() {
    var currUrl=document.referrer;
    var c2=currUrl.substring(currUrl.indexOf('/',10),currUrl.lastIndexOf('/'));
    if(currUrl==""||c2!="/ctrl") {
        alert('抱歉，您的来路不明！');
        window.location.href="./";
    }
}