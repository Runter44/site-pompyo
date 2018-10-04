$(document).ready(function () {

    if ($(window).width() < 768) {
        $("#mainMenu").hide();
    }

    // Afficher le menu quand resize
    $(window).resize(function () {
        if ($(window).width() >= 768) {
            console.log($( window ).width());
            $("#mainMenu").show();
        } else {
            $("#mainMenu").hide();
        }
    });

    $(".wysiwyg img").attr('onclick', 'openModalImage(this)');

    $(".btn-accept-cookies").click(function () {
        $(".bandeau-cookies").hide();
        document.cookie = "cookies_accepted=true";
    });
});

function openMenuMobile() {
    if ($(window).width() < 768) {
        if ($("#mainMenu").is(":hidden")) {
            $("#mainMenu").slideDown();
        } else {
            $("#mainMenu").slideUp();
        }
    }
}

function openModalImage(image) {
    $("#imageModale").show();
    $("#imgImageModale").attr('src', image.src);
    $("#imageModale").click(function (event) {
        if (!$(event.target).is($("#imgImageModale"))) {
            $("#imageModale").hide();
        }
    });
}