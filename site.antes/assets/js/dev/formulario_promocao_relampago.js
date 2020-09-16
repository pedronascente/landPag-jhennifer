$(function () {

    checkCookie();

    if (!redirMobile()) {
        $(window).scroll(function () {
            // var url = window.location.href.toString().replace(path, '');

            var c = getCookie('tempo');
            if ($(window).scrollTop() >= 2 && c != '00:00')
                $('div#gatilho').fadeIn('slow');
            else
                $('div#gatilho').fadeOut('slow');

        });
    }
});//documentt

var min = 15, seg = 1;

function deleteCookie(nome) {
    var exdate = new Date();
    exdate.setTime(exdate.getTime() + (-1 * 24 * 3600 * 1000));
    document.cookie = nome + "=" + escape("") + ((-1 == null) ? "" : "; expires=" + exdate);
}

function start() {
    if ((min == 15) && (seg == 1))
        relogio();
}

function relogio() {
    if ((min > 0) || (seg > 0)) {
        if (seg == 0) {
            seg = 59;
            min = min - 1;
        }
        else
            seg = seg - 1;
        if (min.toString().length == 1)
            min = "0" + min;
        if (seg.toString().length == 1)
            seg = "0" + seg;
        $('div#gatilho a').html('00:' + min + ":" + seg);
        setTimeout('relogio()', 1000);
        setCookie('tempo', min + ":" + seg, 30);
    } else {
        $('div#gatilho a').html('00:00:00');
        $('div#gatilho').fadeOut('slow');
        min = 15;
        seg = 1;
        deleteCookie('tempo');
    }
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue;//+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ')
            c = c.substring(1);
        if (c.indexOf(name) == 0)
            return c.substring(name.length, c.length);
    }
    return "";
}

function checkCookie() {
    var cookie = getCookie("tempo");
    if (cookie != "") {
        var tempo = getCookie('tempo').split(':');
        min = tempo[0];
        seg = tempo[1];
        relogio();
    } else
        start();
}

function redirMobile() {
    var deviceAgent = navigator.userAgent.toLowerCase();
    var agentID = deviceAgent.match(/(iphone|ipod|ipad|android)/);
    if (agentID) {
        return true;
    } else {
        return false;
    }
    //return true;
}