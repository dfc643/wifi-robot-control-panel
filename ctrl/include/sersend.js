/* ==========================================
样本文件：串口送信脚本
文本版本：1, 0, 0, 1
字符编码：Unicode UTF-8
程序语言：Javascript
调用方式：onclick="serSend("text");"
编写人员：互联网
=========================================== */

function serSend(value){
    document.getElementById("ser").src="/cgi-bin/web2ser?"+value;
}