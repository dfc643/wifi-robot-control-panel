/* ==========================================
�����ļ�������ͷ�ؼ�
�ı��汾��1, 0, 0, 1
�ַ����룺Unicode UTF-8
�������ԣ�Javascript
���÷�ʽ��<body onload="createImageLayer();">
          <div id="webcam"></div>
��д��Ա��mjpg-streamer ��д��
=========================================== */

var camport = "10086";  //����ͷ�˿�

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
