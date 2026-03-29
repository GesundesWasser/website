"use strict";
import $ from 'jquery';
function loadHeader() {
    $(document).ready(function() {
        $('#header-text').text(window.location.hostname);
        $('.logo').attr('src', 'https://s3.wagger.dev/uploads/3ebc73767e5955bd7c68637dd538cd7830790f4e1f8b720f155a51266d7ccfa9.png');
        $('#logo-link').attr('href', 'javascript:');
    });
}

export default loadHeader;