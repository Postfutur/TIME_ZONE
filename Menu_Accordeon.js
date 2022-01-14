$(document).ready(function () {
    $('#menu-accordeon>li').click(function () {
        $(this).toggleClass('active');
        $(this).siblings().removeClass('active');
    })
});