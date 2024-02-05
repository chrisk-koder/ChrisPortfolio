$(function () {
    $(document).scroll(function () {
        var $nav = $("#navbar");
        var $height = $("1px");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $height.height());
    });
});
