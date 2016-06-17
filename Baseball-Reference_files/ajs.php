(function(){
var isIE = window.navigator.userAgent.indexOf("MSIE ") > 0;
var ifr = "<"+"iframe id=\"cto_iframe_96dae4666f\" frameBorder=\"0\" allowtransparency=\"true\" hspace=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" vspace=\"0\" width=\"160px\" height=\"600px\"\n";
if(isIE && document.domain !== window.location.hostname) {
ifr += " src=\"javascript:'<script>window.onload=function(){document.write(\\\'<script>document.domain = &quot;"+document.domain + "&quot;;<\\\\/script>\\\');document.close();};</script>'\"";
}
ifr += "><"+"/iframe>\n";
document.write(ifr);
var ifc = "\n";
ifc += "<"+"!DOCTYPE html>\n";
ifc += "<"+"html>\n";
ifc += "  <"+"head>\n";
ifc += "    <"+"meta name=\"format-detection\" content=\"telephone=no\"><"+"meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">\n";
ifc += "  <"+"/head>\n";
ifc += "  <"+"body><"+"script type=\"text/javascript\" src=\"http://a557.casalemedia.com/pcreative?au=5&c=6085BD&pcid=281000095C00&pr=55&r=28100009&s=28AFA&t=57641503&u=VnhaNXBNQW9JSE1BQUNsaXlUd0FBQUNL&m=b7e20af782b049a036ee73ee0cb96f34&wp=C8&cp=1.13&aid=F3CF38611693E01F&tid=0&dm=64&n=sports-reference.com&epr=96dae4666f\"><"+"/script>\n";
ifc += "<"+"div id=\'beacon_96dae4666f\' style=\'position: absolute; left: 0px; top: 0px; visibility: hidden;\'>\n";
ifc += "<"+"img width=\"0\" height=\"0\" src=\"http://cat.ny.us.criteo.com/delivery/lg.php?cppv=1&cpp=9EYB%2B3xtbGVYZzVWNzF2U3p5d2JZMVcrbzB5QldWanhOUVZmUGpOR2gzMmRXNk9YcWUrNzB5WXAzRmtPanc1TlpCbGRLa2t2YndJK2NHbE9kWldldWk0ZWUvMEREaEhjQXNmcE1ZbWFTcFNEV1RVKzZrdDVmZThoMTM3WWFoUTdpR3ZNbVBaTm5NQW5rbjlUWGNNYklZWXlHMVNzTXFrOGxtZjFoWlEwaEErdkMvMExBUW5GNG1pamtITVBiM0taZ3ZhV2kxTnVFQVd3VTN1SisxVnpMNHd5R1h2RHNKYTUrTzNQY1ZZOU14ZXd0Z09KYzZRK3NKL3RiczBYM2hFdkIyTEEwfA%3D%3D\"/>\n";
ifc += "<"+"/div>\n";
ifc += "<"+"/body>\n";
ifc += "<"+"/html>\n";

var fillIframe = function(ifrd) {
    var getDocument = function(iframe) {
        var result_document = iframe.contentWindow || iframe.contentDocument;
        if (result_document && result_document.document)
            result_document = result_document.document;
        return result_document;
    };
    var c = getDocument(ifrd);
    if (c) {
        c.open();
        c.write(ifc);
        c.close();
    }
};


var maxRetryAttempts = 100;
var loaded = false;
var pollIframe = function() {
    var ifrd = document.getElementById('cto_iframe_96dae4666f');
    if (ifrd && isIE) {
         ifrd.onload = function() {
            if(!loaded) {
                loaded = true;
                fillIframe(ifrd);
            }
        };
    } else if (ifrd) {
        loaded = true;
        fillIframe(ifrd);
    } else if (maxRetryAttempts-- > 0) {
        setTimeout(pollIframe, 10);
    }
};pollIframe();
})();
