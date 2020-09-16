$(function () {
   
    $('#bt-enviar').on('click', function (e) {
        var s = validacao('formHome');
        
        
        alert(s); return false
        
        if (s) {
            $('#formHome').submit();
        }
    });
    $('#bt-validar').on('click', function (e) {
        var s = validacao('formValida');
        if (s) {
            $('#formValida').submit();
        }
    });

    $('.telefone').on('keypress', function (e) {
        return MM_format(e, '#' + this.id, '########');
    }).attr('maxlength', '8');
    $('.celular').on('keypress', function (e) {
        return MM_format(e, '#' + this.id, '#########');
    }).attr('maxlength', '9');
    $('.ddd').on('keypress', function (e) {
        return MM_format(e, '#' + this.id, '###');
    }).attr('maxlength', '2');
    $('.data').attr('maxlength', '10').keypress(function (e) {
        return MM_format(e, '.data', '##-##-####');
    });
});//documentt

function menuSanfona(t) {
    $('div.txt').hide();
    $('li.menu-sanfona h3').css('margin-top', '0');
    $(t).children('h3').css('margin-top', '40px');
    $(t).children('div').fadeIn('fast');
}
;

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
;

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
;

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
;

String.prototype.empty = function () {
    if (this.value == '')
        return false;
    else
        return true;
};

String.prototype.trim = function () {
    return this.replace(/(^\s*)|(\s*$)/g, '');
};

String.prototype.isMail = function () {
    var objExclude = /[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
    var objCheck = /@[\w\-]+\./;
    var objCheckEnd = /\.[a-zA-Z]{2,3}$/;
    var strEmail = this;
    if (((strEmail.search(objExclude) != -1) || (strEmail.search(objCheck)) == -1) || (strEmail.search(objCheckEnd) == -1))
        return false;
    else
        return true;
};

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
};

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
};

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
};

function centerObj(obj) {
    var winH = $(window).height();
    var winW = $(window).width();
    var modW = $(obj).width() + parseInt($(obj).css("paddingLeft")) + parseInt($(obj).css("paddingRight"));
    var modH = $(obj).height() + parseInt($(obj).css("paddingTop")) + parseInt($(obj).css("paddingBottom"));
    $(obj).css({top: winH / 2 - modH / 2, left: winW / 2 - modW / 2, zIndex: "102"});
}
;

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
;

function hideModal() {
    $("#overlay").fadeOut(500);
    $('div#auxiliar').hide();
    $('div.content-auxiliar').attr('style', '').removeAttr('style').html('');
}
;