// JavaScript Document

$(document).ready(function () {
    /*non lo sappiamo*/
    var tasti = '';
    $.each($('#footer .navbar-collapse'), function () {
        var element_id = $(this).attr('id');
        $('#' + element_id).before('<button type="button" class="navbar-toggle col-sm-24 col-xs-24" data-toggle="collapse" data-target="#' + $('#' + element_id).attr('id') + '">' + $('#' + element_id).children().html() + '<span class="sr-only"> Toggle navigation</span></button>');
        $('#' + element_id + ' .nav-header').attr('class', ' nav-header navbar-collapse collapse');
    });

    /*visualizza twitter*/
    jQuery('#tabtwitter').removeClass('hide');
    jQuery('#teitter_noscript').addClass('hide');
    jQuery('#tabtwitter').click(function (e) {
        e.preventDefault()
        jQuery(this).tab('show')
    });

    !function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + "://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");


    jQuery('table').each(function () {

        //$(this).wrap('<div class="table-responsive">');
        $(this).addClass('table');
        //$(this).after('</div>');

    });
    $('.venobox').venobox({
        bgcolor: '#5dff5e', // default: '#fff'
        titleattr: 'title' // default: 'title'
    });
    $('#dismiss-cookie-adv').click(function () {
        $('#accept-cookies').toggle();
    });

});

var grandezze = new Array('1em', '1.5em', '2em', '2.5em');
var inizioDim = 1;
function ridimTesto(inc) {
    var sz = inizioDim
    sz += inc;
    if (sz < 0)
        sz = 0;
    if (sz > 3)
        sz = 3;
    inizioDim = sz;
    $("body").css('font-size', grandezze[sz]);
}