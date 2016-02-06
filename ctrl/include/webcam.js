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
    img.style.position = "absolute";
    img.style.zIndex = 1;
    img.onload = imageOnload;
    //img.onclick = imageOnclick;
    //img.src = "http://"+currUrl+":"+camport+"/?action=snapshot&n=" + (++imageNr);
    img.src = "http://"+currUrl+":"+camport+"/?action=stream";
    img.width = 640;
    img.height = 480;
    var webcam = document.getElementById("webcam");
    webcam.insertBefore(img, webcam.firstChild);
}

function createImageLayer2() {
    var img = new Image();
    var currUrl = window.location.host;
    if(currUrl.lastIndexOf(":")!=-1)
        currUrl = currUrl.substring(0,currUrl.lastIndexOf(":"));
    img.style.position = "absolute";
    img.style.zIndex = 1;
    img.onload = imageOnload;
    //img.onclick = imageOnclick;
    //img.src = "http://"+currUrl+":"+camport+"/?action=snapshot&n=" + (++imageNr);
    img.src = "http://"+currUrl+":"+camport+"/?action=stream";
    img.width = 300;
    img.height = 220;
    var webcam_m = document.getElementById("webcam_m");
    webcam_m.insertBefore(img, webcam_m.firstChild);
}

function imageOnload() {
    this.style.zIndex = imageNr;
    
    while (1 < finished.length) {
        var del = finished.shift();
        del.parentNode.removeChild(del);
    }
    finished.push(this);
    if (!paused){ createImageLayer();createImageLayer2();}
}

function imageOnclick() {
    paused = !paused;
    if (!paused){ createImageLayer();createImageLayer2();}
}
