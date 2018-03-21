$('#button-hidden').click(function menuSlide() {
    if (!$('.ul-hidden').hasClass('slide')) {
        $('.ul-hidden').slideDown();
        $('.ul-hidden').addClass('slide');
    } else {
        $('.ul-hidden').slideUp();
        $('.ul-hidden').removeClass('slide');
    }
})
$('.ul-hidden-slideHeader').click(function menuSlide() {
    if (!$('.ul-hidden-slide').hasClass('slide')) {
        $('.ul-hidden-slide').slideDown();
        $('.ul-hidden-slide').addClass('slide');
    } else {
        $('.ul-hidden-slide').slideUp();
        $('.ul-hidden-slide').removeClass('slide');
    }
})
$('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
})