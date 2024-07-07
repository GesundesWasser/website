"use strict";

$(window).on('load', function() {
    const currentYear = new Date().getFullYear();
    $('#copyright-year').text(currentYear);
    $('#site-name-version').text("Codename Kapselordnung Release v1.9 -> R3");
});
