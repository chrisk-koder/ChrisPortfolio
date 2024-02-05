$(function () {
    $(document).scroll(function () {
        var $scrollUp = $("#scroller");
        var $navbarHeight = $("#navbar");
        $scrollUp.toggleClass("scrollUp", $(this).scrollTop() > $navbarHeight.height());
    });
});