//=====================================\\
// Synco Navbar Change Class On Scroll
//=====================================//

$(function () {
    $(document).scroll(function () {
        var $nav = $("#navbar");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
});

//============================\\
// Synco Premade Model Script
//============================//

$('#syncoModel').on('shown.bs.modal', function () {
    $('#syncoMI').trigger('focus');
});