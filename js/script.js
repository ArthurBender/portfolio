$(document).ready(function() {
    $("#btn-send-email").click(function() {
        window.open('mailto:arthurllbender@gmail.com', '_blank').focus();
    });

    $("#language-select").change(function() {
        window.location.replace(window.location.href.split("?")[0].split("#")[0] + "?lang=" + $(this).val());
    });

    $(".navbar .nav-link").click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    $('.navbar-collapse').on('show.bs.collapse', function() {
        $("#navbar-collapse-icon").removeClass('fa-angle-down');
        $("#navbar-collapse-icon").addClass('fa-angle-up');
    });

    $('.navbar-collapse').on('hide.bs.collapse', function() {
        $("#navbar-collapse-icon").removeClass('fa-angle-up');
        $("#navbar-collapse-icon").addClass('fa-angle-down');
    });
});