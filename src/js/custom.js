// exibe pills
$(function() {
    slick_home(".slick_home"),
    $(".tab_news .nav-pills").click(function(e) {
        $(".slick_home .info_news"),
        e.preventDefault(),
        $(this).tab("show"),
        setTimeout(function() {
            $(".active .slick_home").slick("destroy"),
            slick_home(".active .slick_home")
        }, 1e3)
    })
});


// bootstrap
$('#myTab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
  })