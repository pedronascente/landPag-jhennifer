if(window.location.hostname=='localhost'){
    var path = 'http://localhost/PROTOTIPOS/m.novo/';
}else{
    var path = window.location.origin;
}

$(function () {
    $('#_hj_feedback_container').remove();

    checkCookie();

    if (!redirMobile()) {
        $(document).bind('mousemove', function (e) {
            var posicao = e.pageY - $(window).scrollTop();
            var display = $('div#auxiliar').css('display');
            var url = window.location.href.toString().replace(path, '');
            if (
                    posicao <= 5 &&
                    display == "none" &&
                    !$('div#auxiliar').hasClass('aberto') &&
                    url != 'area' &&
                    url != 'area-do-cliente-carsystem' &&
                    url != 'area-do-cliente-carsystem/primeiro-acesso' &&
                    url != 'area-do-cliente-carsystem/esqueci-a-senha'
                    ) {
                $('div#auxiliar').addClass('aberto').css({'background': 'none', 'width': '1000px', 'height': '563px'});
                abrirModal('modal-abandono');
            }
        });
    }

    if (!redirMobile()) {
        $(window).scroll(function () {
            var url = window.location.href.toString().replace(path, '');
            if (
                    url != 'area' &&
                    url != 'area-do-cliente-carsystem' &&
                    url != 'area-do-cliente-carsystem/primeiro-acesso' &&
                    url != 'area-do-cliente-carsystem/esqueci-a-senha'
                    ) {
                var c = getCookie('tempo');
                if ($(window).scrollTop() >= 2 && c != '00:00')
                    $('div#gatilho').fadeIn('slow');
                else
                    $('div#gatilho').fadeOut('slow');
                if ($(window).scrollTop() >= 1200)
                    $('div#home div#form').fadeOut('slow');
                else
                    $('div#home div#form').fadeIn('slow');
            }

            if ($(window).scrollTop() > 171) {
                $('div#home div#form').css({position: 'fixed', top: '0px'});
            }
            if ($(window).scrollTop() <= 171) {
                $('div#home div#form').css({position: 'absolute', top: '169px'});
            }
            if ($(window).scrollTop() > 220) {
                $('div#servicos div#box-video').css({position: 'fixed', top: '0px'});
            }
            if ($(window).scrollTop() <= 220) {
                $('div#servicos div#box-video').css({position: 'absolute', top: '20px'});
            }
            if ($(window).scrollTop() >= 1200)
                $('div#servicos div#box-video').fadeOut('slow');
            else
                $('div#servicos div#box-video').fadeIn('slow');
        });
    }
    
    $('div#gatilho a').live('click', function (e) {
        modalGatilho();
    });
  

    $('#bt-enviar-gatilho').live('click', function (e) {
        gatilho();
    });
    $('#bt-enviar-abandono').live('click', function (e) {
        abandono();
    });
   
    $('.telefone').live('keypress', function (e) {
        return MM_format(e, '#' + this.id, '########');
    }).attr('maxlength', '8');
    $('.celular').live('keypress', function (e) {
        return MM_format(e, '#' + this.id, '#########');
    }).attr('maxlength', '9');
    $('.ddd').live('keypress', function (e) {
        return MM_format(e, '#' + this.id, '###');
    }).attr('maxlength', '2');
    $('.data').attr('maxlength', '10').keypress(function (e) {
        return MM_format(e, '.data', '##-##-####');
    });
    $('.ano').attr('maxlength', '4').keypress(function (e) {
        return MM_format(e, '.ano', '####');
    });
    $('.numero').live('keypress', function (e) {
        return MM_format(e, this, '############');
    });
    $('.datahora').attr('maxlength', '16').attr('readonly', 'readonly').keypress(function (e) {
        return MM_format(e, '.datahora', '##-##-#### ##:##');
    });
    $('.moeda').focusout(function (e) {
        return formatar_moeda('#' + this.id, '.', ',', e);
    }).keypress(function (e) {
        return formatar_moeda('#' + this.id, '.', ',', e);
    });
    $('div#vantagens-car-system h3').hover(
            function () {
                vantagens(this.id);
            },
            function () {
                $('div#vantagens-car-system h3').css({'background': 'none'});
                $('div#vantagens-car-system h3#mobile').css({'background': '#F0F0F0'});
                $('div#vantagens-car-system img.celular-vantagens').css({'background-position': '-329px 0px'});
            }
    );

    var w = $(window).width();
    var h = 0;

    if (redirMobile()) {
        w = 325;
        h = 385;
        $("div#banners").css({'width': w + 'px', 'height': h + 'px'});
        $("div#banners div").css({'width': w + 'px', 'height': h + 'px'});
        $("div#banners div img").css({'width': w + 'px', 'height': h + 'px'});
    } else {
        $("div#banners").css('width', w + 'px');
        $("div#banners div").css('width', w + 'px');
        $("div#banners div img").css('width', w + 'px');
        $(window).resize(function () {
            var w = $(window).width();
            if (w >= 1115) {
                $("div#banners").css('width', w + 'px');
                $("div#banners div").css('width', w + 'px');
                $("div#banners div img").css('width', w + 'px');
                //$("div.jquery-slider-wrapper").css('width',w+'px');
                $("#banner").slideshow({width: w});
            }
        });
        w = w - 17;
        h = 500;
    }
    

    
    


});//documentt

function modalGatilho() {
    $('div#auxiliar').css({'background': '#EAEAEA', 'width': '510px', 'height': '400px', 'padding': '25px'});
    $('div#auxiliar a#bt-fechar').css({'margin': '-45px -25px 0 0', 'color': '#fff', 'font-size': '12px'});
    abrirModal('gatilho');
}

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

function abrirFormularios(id) {
    $('div.formulario').load(path + 'includes/inc-form-' + id + '.php');
}

function permalink(s) {
    d = "-";
    s = s.replace(/<[^>]+>/g, '');
    for (var p in dirify_table)
        if (s.indexOf(p) != -1)
            s = s.replace(new RegExp(p, "g"), dirify_table[p]);
    s = s.toLowerCase();
    s = s.replace(/&[^;\s]+;/g, '');
    s = s.replace(/[^-a-z0-9_ ]/g, '');
    s = s.replace(/\s+/g, '_');
    s = s.replace(/_+$/, '');
    s = s.replace(/_+/g, d);
    return s;
}

var dirify_table = {
    "\u0026": 'and', // ampersand
    "\u00C0": 'A', // A`
    "\u00E0": 'a', // a`
    "\u00C1": 'A', // A'
    "\u00E1": 'a', // a'
    "\u00C2": 'A', // A^
    "\u00E2": 'a', // a^
    "\u0102": 'A', // latin capital letter a with breve
    "\u0103": 'a', // latin small letter a with breve
    "\u00C6": 'AE', // latin capital letter AE
    "\u00E6": 'ae', // latin small letter ae
    "\u00C5": 'A', // latin capital letter a with ring above
    "\u00E5": 'a', // latin small letter a with ring above
    "\u0100": 'A', // latin capital letter a with macron
    "\u0101": 'a', // latin small letter a with macron
    "\u0104": 'A', // latin capital letter a with ogonek
    "\u0105": 'a', // latin small letter a with ogonek
    "\u00C4": 'A', // A:
    "\u00E4": 'a', // a:
    "\u00C3": 'A', // A~
    "\u00E3": 'a', // a~
    "\u00C8": 'E', // E`
    "\u00E8": 'e', // e`
    "\u00C9": 'E', // E'
    "\u00E9": 'e', // e'
    "\u00CA": 'E', // E^
    "\u00EA": 'e', // e^
    "\u00CB": 'E', // E:
    "\u00EB": 'e', // e:
    "\u0112": 'E', // latin capital letter e with macron
    "\u0113": 'e', // latin small letter e with macron
    "\u0118": 'E', // latin capital letter e with ogonek
    "\u0119": 'e', // latin small letter e with ogonek
    "\u011A": 'E', // latin capital letter e with caron
    "\u011B": 'e', // latin small letter e with caron
    "\u0114": 'E', // latin capital letter e with breve
    "\u0115": 'e', // latin small letter e with breve
    "\u0116": 'E', // latin capital letter e with dot above
    "\u0117": 'e', // latin small letter e with dot above
    "\u00CC": 'I', // I`
    "\u00EC": 'i', // i`
    "\u00CD": 'I', // I'
    "\u00ED": 'i', // i'
    "\u00CE": 'I', // I^
    "\u00EE": 'i', // i^
    "\u00CF": 'I', // I:
    "\u00EF": 'i', // i:
    "\u012A": 'I', // latin capital letter i with macron
    "\u012B": 'i', // latin small letter i with macron
    "\u0128": 'I', // latin capital letter i with tilde
    "\u0129": 'i', // latin small letter i with tilde
    "\u012C": 'I', // latin capital letter i with breve
    "\u012D": 'i', // latin small letter i with breve
    "\u012E": 'I', // latin capital letter i with ogonek
    "\u012F": 'i', // latin small letter i with ogonek
    "\u0130": 'I', // latin capital letter with dot above
    "\u0131": 'i', // latin small letter dotless i
    "\u0132": 'IJ', // latin capital ligature ij
    "\u0133": 'ij', // latin small ligature ij
    "\u0134": 'J', // latin capital letter j with circumflex
    "\u0135": 'j', // latin small letter j with circumflex
    "\u0136": 'K', // latin capital letter k with cedilla
    "\u0137": 'k', // latin small letter k with cedilla
    "\u0138": 'k', // latin small letter kra
    "\u0141": 'L', // latin capital letter l with stroke
    "\u0142": 'l', // latin small letter l with stroke
    "\u013D": 'L', // latin capital letter l with caron
    "\u013E": 'l', // latin small letter l with caron
    "\u0139": 'L', // latin capital letter l with acute
    "\u013A": 'l', // latin small letter l with acute
    "\u013B": 'L', // latin capital letter l with cedilla
    "\u013C": 'l', // latin small letter l with cedilla
    "\u013F": 'l', // latin capital letter l with middle dot
    "\u0140": 'l', // latin small letter l with middle dot
    "\u00D2": 'O', // O`
    "\u00F2": 'o', // o`
    "\u00D3": 'O', // O'
    "\u00F3": 'o', // o'
    "\u00D4": 'O', // O^
    "\u00F4": 'o', // o^
    "\u00D6": 'O', // O:
    "\u00F6": 'o', // o:
    "\u00D5": 'O', // O~
    "\u00F5": 'o', // o~
    "\u00D8": 'O', // O/
    "\u00F8": 'o', // o/
    "\u014C": 'O', // latin capital letter o with macron
    "\u014D": 'o', // latin small letter o with macron
    "\u0150": 'O', // latin capital letter o with double acute
    "\u0151": 'o', // latin small letter o with double acute
    "\u014E": 'O', // latin capital letter o with breve
    "\u014F": 'o', // latin small letter o with breve
    "\u0152": 'OE', // latin capital ligature oe
    "\u0153": 'oe', // latin small ligature oe
    "\u0154": 'R', // latin capital letter r with acute
    "\u0155": 'r', // latin small letter r with acute
    "\u0158": 'R', // latin capital letter r with caron
    "\u0159": 'r', // latin small letter r with caron
    "\u0156": 'R', // latin capital letter r with cedilla
    "\u0157": 'r', // latin small letter r with cedilla
    "\u00D9": 'U', // U`
    "\u00F9": 'u', // u`
    "\u00DA": 'U', // U'
    "\u00FA": 'u', // u'
    "\u00DB": 'U', // U^
    "\u00FB": 'u', // u^
    "\u00DC": 'U', // U:
    "\u00FC": 'u', // u:
    "\u016A": 'U', // latin capital letter u with macron
    "\u016B": 'u', // latin small letter u with macron
    "\u016E": 'U', // latin capital letter u with ring above
    "\u016F": 'u', // latin small letter u with ring above
    "\u0170": 'U', // latin capital letter u with double acute
    "\u0171": 'u', // latin small letter u with double acute
    "\u016C": 'U', // latin capital letter u with breve
    "\u016D": 'u', // latin small letter u with breve
    "\u0168": 'U', // latin capital letter u with tilde
    "\u0169": 'u', // latin small letter u with tilde
    "\u0172": 'U', // latin capital letter u with ogonek
    "\u0173": 'u', // latin small letter u with ogonek
    "\u00C7": 'C', // ,C
    "\u00E7": 'c', // ,c
    "\u0106": 'C', // latin capital letter c with acute
    "\u0107": 'c', // latin small letter c with acute
    "\u010C": 'C', // latin capital letter c with caron
    "\u010D": 'c', // latin small letter c with caron
    "\u0108": 'C', // latin capital letter c with circumflex
    "\u0109": 'c', // latin small letter c with circumflex
    "\u010A": 'C', // latin capital letter c with dot above
    "\u010B": 'c', // latin small letter c with dot above
    "\u010E": 'D', // latin capital letter d with caron
    "\u010F": 'd', // latin small letter d with caron
    "\u0110": 'D', // latin capital letter d with stroke
    "\u0111": 'd', // latin small letter d with stroke
    "\u00D1": 'N', // N~
    "\u00F1": 'n', // n~
    "\u0143": 'N', // latin capital letter n with acute
    "\u0144": 'n', // latin small letter n with acute
    "\u0147": 'N', // latin capital letter n with caron
    "\u0148": 'n', // latin small letter n with caron
    "\u0145": 'N', // latin capital letter n with cedilla
    "\u0146": 'n', // latin small letter n with cedilla
    "\u0149": 'n', // latin small letter n preceded by apostrophe
    "\u014A": 'N', // latin capital letter eng
    "\u014B": 'n', // latin small letter eng
    "\u00DF": 'ss', // double-s
    "\u015A": 'S', // latin capital letter s with acute
    "\u015B": 's', // latin small letter s with acute
    "\u0160": 'S', // latin capital letter s with caron
    "\u0161": 's', // latin small letter s with caron
    "\u015E": 'S', // latin capital letter s with cedilla
    "\u015F": 's', // latin small letter s with cedilla
    "\u015C": 'S', // latin capital letter s with circumflex
    "\u015D": 's', // latin small letter s with circumflex
    "\u0218": 'S', // latin capital letter s with comma below
    "\u0219": 's', // latin small letter s with comma below
    "\u0164": 'T', // latin capital letter t with caron
    "\u0165": 't', // latin small letter t with caron
    "\u0162": 'T', // latin capital letter t with cedilla
    "\u0163": 't', // latin small letter t with cedilla
    "\u0166": 'T', // latin capital letter t with stroke
    "\u0167": 't', // latin small letter t with stroke
    "\u021A": 'T', // latin capital letter t with comma below
    "\u021B": 't', // latin small letter t with comma below
    "\u0192": 'f', // latin small letter f with hook
    "\u011C": 'G', // latin capital letter g with circumflex
    "\u011D": 'g', // latin small letter g with circumflex
    "\u011E": 'G', // latin capital letter g with breve
    "\u011F": 'g', // latin small letter g with breve
    "\u0120": 'G', // latin capital letter g with dot above
    "\u0121": 'g', // latin small letter g with dot above
    "\u0122": 'G', // latin capital letter g with cedilla
    "\u0123": 'g', // latin small letter g with cedilla
    "\u0124": 'H', // latin capital letter h with circumflex
    "\u0125": 'h', // latin small letter h with circumflex
    "\u0126": 'H', // latin capital letter h with stroke
    "\u0127": 'h', // latin small letter h with stroke
    "\u0174": 'W', // latin capital letter w with circumflex
    "\u0175": 'w', // latin small letter w with circumflex
    "\u00DD": 'Y', // latin capital letter y with acute
    "\u00FD": 'y', // latin small letter y with acute
    "\u0178": 'Y', // latin capital letter y with diaeresis
    "\u00FF": 'y', // latin small letter y with diaeresis
    "\u0176": 'Y', // latin capital letter y with circumflex
    "\u0177": 'y', // latin small letter y with circumflex
    "\u017D": 'Z', // latin capital letter z with caron
    "\u017E": 'z', // latin small letter z with caron
    "\u017B": 'Z', // latin capital letter z with dot above
    "\u017C": 'z', // latin small letter z with dot above
    "\u0179": 'Z', // latin capital letter z with acute
    "\u017A": 'z'     // latin small letter z with acute
};

function abrirModal(modal) {
    var local = 'div#auxiliar div.content-auxiliar';
    //if(modal != '') $(local).load(path+'includes/inc-'+modal+'.php'); 
    if (modal != '')
        $(local).load(path + 'inc-' + modal);
    showModal();
}

function numeros(e, src) {
    if (window.event) {
        _TXT = e.keyCode;
    }
    else if (e.which) {
        _TXT = e.which;
    }
    if (_TXT > 47 && _TXT < 58) {
        return true;
    }
    else {
        if (_TXT != 8) {
            return false;
        } else {
            return true;
        }
    }
}

function MM_format(e, src, mask) {
    if (window.event) {
        _TXT = e.keyCode;
    }
    else if (e.which) {
        _TXT = e.which;
    }
    if (_TXT > 47 && _TXT < 58) {
        var i = $(src).val().length;
        var saida = mask.substring(0, 1);
        var texto = mask.substring(i)
        if (texto.substring(0, 1) != saida) {
            $(src).val($(src).val() + texto.substring(0, 1));
        }
        return true;
    } else {
        if (_TXT != 8) {
            return false;
        } else {
            return true;
        }
    }
}

function ajaxInit() {
    var xmlhttp;
    try {
        xmlhttp = new XMLHttpRequest();
    }
    catch (ee) {
        try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e) {
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (E) {
                xmlhttp = false;
            }
        }
    }
    return xmlhttp;
}

function readOnly() {
    $('.endereco').removeAttr('readonly');
    $('.bairro').removeAttr('readonly');
    $('.cidade').removeAttr('readonly');
    $('.uf').removeAttr('readonly').focus();
}

function validacao(form) {
    var str = $("#" + form).serialize();
    var arr = str.split("&");
    for (var i = 0; i < arr.length; i++) {
        fields = arr[i].split("=");
        erro = false;
        msg = 'O campo "' + $("#" + form + ' #' + fields[0]).attr('title') + '" é obrigatório';
        compl = ' ou está incorreto';
        oldField = fields[0];
        if ($("#" + form + ' #' + fields[0]).hasClass("obrigatorio")) {
            if ($("#" + form + ' #' + fields[0]).hasClass("email")) {
                if (!$("#" + form + ' #' + fields[0]).val().isMail()) {
                    erro = true;
                    msg = msg + compl;
                }
            }
            if ($("#" + form + ' #' + fields[0]).hasClass("cpf")) {
                if (!$("#" + form + ' #' + fields[0]).val().isCpf()) {
                    erro = true;
                    msg = msg + compl;
                }
            }
            if ($("#" + form + ' #' + fields[0]).hasClass("telefone")) {
                if (!$("#" + form + ' #' + fields[0]).val().isTel()) {
                    erro = true;
                    msg = msg + compl;
                }
            }
            if ($("#" + form + ' #' + fields[0]).hasClass("celular")) {
                if (!$("#" + form + ' #' + fields[0]).val().isCel()) {
                    erro = true;
                    msg = msg + compl;
                }
            }
            if ($("#" + form + ' #' + fields[0]).hasClass("permalink")) {
                permalink(fields[0], oldField);
            }
            if (!$("#" + form + ' #' + fields[0]).val().trim()) {
                erro = true;
            }
        } else {
            if ($("#" + form + ' #' + fields[0]).hasClass("celular")) {
                if ($("#" + form + ' #' + fields[0]).val() != '')
                    if (!$("#" + form + ' #' + fields[0]).val().isCel()) {
                        erro = true;
                        msg = msg + compl;
                    } else
                        erro = false;
            }
        }
        if (erro) {
            alert(msg + '!');
            $("#" + form + ' #' + fields[0]).focus();
            return false;
        }
    }
    return true;
}

String.prototype.empty = function () {
    if (this.value == '')
        return false;
    else
        return true;
}

String.prototype.trim = function () {
    return this.replace(/(^\s*)|(\s*$)/g, '');
}

String.prototype.isMail = function () {
    var objExclude = /[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
    var objCheck = /@[\w\-]+\./;
    var objCheckEnd = /\.[a-zA-Z]{2,3}$/;
    var strEmail = this;
    if (((strEmail.search(objExclude) != -1) || (strEmail.search(objCheck)) == -1) || (strEmail.search(objCheckEnd) == -1))
        return false;
    else
        return true;
}

String.prototype.isTel = function () {
    var value = this;
    value = value.replace("(", "");
    value = value.replace(")", "");
    value = value.replace("-", "");
    value = value.replace(" ", "").trim();
    if (value == '00000000')
        return false;
    else if (value == '00000000')
        return false;
    if (["00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10"].indexOf(value.substring(0, 2)) != -1)
        return false;
    if (value.length != 8)
        return false;
    //alert(value.substring(2, 3)+' - '+value.substring(0, 1));
    if (["1", "2", "3", "4", "5"].indexOf(value.substring(0, 1)) == -1)
        return false;
    return true;
}

String.prototype.isCel = function () {
    var value = this;
    value = value.replace("(", "");
    value = value.replace(")", "");
    value = value.replace("-", "");
    value = value.replace(" ", "").trim();
    if (value == '000000000')
        return false;
    else if (value == '000000000')
        return false;
    if (["00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10"].indexOf(value.substring(0, 2)) != -1)
        return false;
    if (value.length < 9)
        return false;
    //alert(value.substring(2, 3)+' - '+value.substring(0, 1));
    if (["6", "7", "8", "9"].indexOf(value.substring(0, 1)) == -1)
        return false;
    return true;
}

String.prototype.isCpf = function () {
    var numcpf = this;
    cpf = numcpf.replace(/\D/g, "");
    while (cpf.length < 11) {
        cpf = "0" + cpf;
    }
    if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999")
        return false;
    add = 0;
    for (var i = 0; i < 9; i ++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;
    add = 0;
    for (i = 0; i < 10; i ++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;
    return true;
}

function showModal() {
    showOverlay();
    var winH = $(window).height();
    var winW = $(window).width();
    var modW = $('#auxiliar').width() + parseInt($('#auxiliar').css("paddingLeft")) + parseInt($('#auxiliar').css("paddingRight"));
    var modH = $('#auxiliar').height() + parseInt($('#auxiliar').css("paddingTop")) + parseInt($('#auxiliar').css("paddingBottom"));
    $('#auxiliar').css({top: winH / 2 - modH / 2, left: winW / 2 - modW / 2, zIndex: "102"});
    //$('html, body').animate({scrollTop: 0}, 300);
    $('#auxiliar').fadeIn(1000);
}

function centerObj(obj) {
    var winH = $(window).height();
    var winW = $(window).width();
    var modW = $(obj).width() + parseInt($(obj).css("paddingLeft")) + parseInt($(obj).css("paddingRight"));
    var modH = $(obj).height() + parseInt($(obj).css("paddingTop")) + parseInt($(obj).css("paddingBottom"));
    $(obj).css({top: winH / 2 - modH / 2, left: winW / 2 - modW / 2, zIndex: "102"});
}

function hideModal() {
    $("#overlay").fadeOut(500);
    $('div#auxiliar').hide();
    $('div.content-auxiliar').attr('style', '').removeAttr('style').html('');
}

function showOverlay() {
    if (!document.getElementById("overlay")) {
        $('<div id="overlay" class="closeOverlay"></div>').insertBefore(document.body.firstChild);
    }
    $("#overlay").css({backgroundColor: "#000000", zIndex: "101", width: "100%", height: "100%", display: "none", top: "0", left: "0"});
    if (navigator.userAgent.toLowerCase().indexOf("msie 6") != -1) {
        $("#overlay").css({position: "absolute", height: $(document).height()});
    }
    else {
        $("#overlay").css("position", "fixed");
    }
    $("#overlay").fadeIn(600);
    $("#overlay").fadeTo("slow", 0.75);
    $('.closeOverlay').click(function (e) {
        e.preventDefault();
        $("#overlay").fadeOut(500);
        $('div#auxiliar').hide();
        $('div.content-auxiliar').attr('style', '').removeAttr('style').html('');
    });
}