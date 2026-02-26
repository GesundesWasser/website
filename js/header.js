"use strict";
import $ from 'jquery';
function loadHeader() {
    $(document).ready(function() {
        $('#header-text').text("");//window.location.hostname);
        $('.logo').attr('src', 'https://download.scamcraft.net/img/krdb-01.png');
        $('#logo-link').attr('href', 'javascript:');
    });
}

export default loadHeader;