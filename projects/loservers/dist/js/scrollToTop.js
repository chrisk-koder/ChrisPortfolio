$(function () {
    $(document).scroll(function () {
        var $scrollUp = $("#scroller");
        var $navbarHeight = $("#navbarScroll");
        $scrollUp.toggleClass("scrollUp", $(this).scrollTop() > $navbarHeight.height());
    });
});