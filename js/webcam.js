/* ==========================================
样本文件：摄像头控件
文本版本：1, 0, 0, 1
字符编码：Unicode UTF-8
程序语言：Javascript
调用方式：<body onload="createImageLayer();">
          <div id="webcam"></div>
编写人员：mjpg-streamer 编写组
=========================================== */

var camport = "10086";  //摄像头端口

var imageNr = 0;
var finished = new Array();
var paused = true;

function createImageLayer() {
    var img = new Image();
    var currUrl = window.location.host;
    if(currUrl.lastIndexOf(":")!=-1)
        currUrl = currUrl.substring(0,currUrl.lastIndexOf(":"));
    img.style.position = "relative";
    img.style.zIndex = 1;
    img.onload = imageOnload;
    img.src = "http://"+currUrl+":"+camport+"/?action=stream";
    img.width = 587;
    img.height = 440;
    var webcam = document.getElementById("webcam");
    webcam.insertBefore(img, webcam.firstChild);
}

function imageOnload() {
    this.style.zIndex = imageNr;
    
    while (1 < finished.length) {
        var del = finished.shift();
        del.parentNode.removeChild(del);
    }
    finished.push(this);
    if (!paused){ createImageLayer();}
}

function imageOnclick() {
    paused = !paused;
    if (!paused){ createImageLayer();}
}
