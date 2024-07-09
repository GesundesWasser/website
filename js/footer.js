"use strict";
import $ from 'jquery';
// Function to initialize header
function loadFooter() {
    $(document).ready(function() {
        // Set the Codename, version, revision, test build, and copyright year
        const CODENAME = "Kapselordnung";
        const VERSION = "v1.9";
        const REVISION = "0";
        const TEST_BUILD = true;
        const TEST_BUILD_MSG = TEST_BUILD ? "This version of Codename " + CODENAME + " also looks Experimental!" : "";
        $('#site-name-version').text("Codename " + CODENAME + " " + VERSION + " -> R" + REVISION);
        $('#testbuild').text(TEST_BUILD_MSG);
        $('#copyright-year').text("2024 -> " + new Date().getFullYear());
    });
}

export default loadFooter;