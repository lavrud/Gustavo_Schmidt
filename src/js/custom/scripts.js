// $('ul>.pills-tab .nav-item .nav-link').on('click', function showtabs(e) {
//     e.preventDefault()
//     $(this).tab('show')
// })


$(document).ready(function () {

    $(".next").click(function () {

        var tab = $(this).closest('.tab-pane');

        $('#' + tab[0].id + ', .nav-pills li').removeClass('active');

        $('.nav-pills li a[href="#' + tab.next()[0].id + '"]').parent().addClass('active');

        tab.next().addClass('active');

    });
    
});