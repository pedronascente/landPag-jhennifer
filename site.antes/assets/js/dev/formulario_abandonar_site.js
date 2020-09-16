if(window.location.hostname=='localhost'){
    var path = 'http://localhost/PROTOTIPOS/m.novo/';
}else{
    var path = window.location.origin;
}

$(function () {
    if (!redirMobile()) {
        $(document).bind('mousemove', function (e) {
            var posicao = e.pageY - $(window).scrollTop();
            var display = $('div#auxiliar').css('display');
            
            
           // alert(display)
            
          //$('#_bodu').text(posicao);
            if ( posicao <= 200 &&   display == "none" && !$('div#auxiliar').hasClass('aberto') ) {
                $('div#auxiliar').addClass('aberto').css({'background': 'none', 'width': '1000px', 'height': '563px'});
                abrirModal('modal-abandono');
            }
        });
    }
});

function redirMobile() {
    var deviceAgent = navigator.userAgent.toLowerCase();
    var agentID = deviceAgent.match(/(iphone|ipod|ipad|android)/);
    if (agentID) {
        return true;
    } else {
        return false;
    }
    //return true;
};

function abrirModal(modal) {
    var local = 'div#auxiliar div.content-auxiliar';
    if (modal != '')
        $(local).load(path + 'inc-' + modal);
    showModal();
};

function showModal() {
    showOverlay();
    var winH = $(window).height();
    var winW = $(window).width();
    var modW = $('#auxiliar').width() + parseInt($('#auxiliar').css("paddingLeft")) + parseInt($('#auxiliar').css("paddingRight"));
    var modH = $('#auxiliar').height() + parseInt($('#auxiliar').css("paddingTop")) + parseInt($('#auxiliar').css("paddingBottom"));
    $('#auxiliar').css({top: winH / 2 - modH / 2, left: winW / 2 - modW / 2, zIndex: "102"});
    $('#auxiliar').fadeIn();
};

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
