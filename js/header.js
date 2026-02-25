"use strict";
import $ from 'jquery';
function loadHeader() {
    $(document).ready(function() {
        $('#header-text').text("KRDB.INFO");//window.location.hostname);
        $('.logo').attr('src', 'img/logo.png');
        $('#logo-link').attr('href', 'javascript:');
    });
}

export default loadHeader;