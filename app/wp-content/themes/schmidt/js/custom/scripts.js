$('ul>.pills-tab .nav-item .nav-link').on('click', function showtabs(e) {
    e.preventDefault()
    $(this).tab('show')
})