$(function () {
    $(document).scroll(function () {
        var $nav = $("#navbarScroll");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
});