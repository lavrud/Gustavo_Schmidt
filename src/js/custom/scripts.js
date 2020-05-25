$(".next").click(function () {

    var tab = $(this).closest('.tab-pane');

    $('#' + tab[0].id + ', .nav-pills li').removeClass('active');

    $('.nav-pills li a[href="#' + tab.next()[0].id + '"]').parent().addClass('active');

    tab.next().addClass('active');

});