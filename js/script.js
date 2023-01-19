$(document).ready(function() {
    $("#btn-send-email").click(function() {
        window.open('mailto:arthurllbender@gmail.com', '_blank').focus();
    });

    $("#language-select").change(function() {
        window.location.replace(window.location.href.split("?")[0].split("#")[0] + "?lang=" + $(this).val());
    });
});