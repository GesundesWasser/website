"use strict";

// An IIFE to avoid polluting global scope
(function() {
    $(document).ready(function() {
        // Update the copyright year
        $('#copyright-year').text("2024 -> " + new Date().getFullYear());

        // Set the Codename, version, revision, testbuild and Copyright Year.
        const CODENAME = "Kapselordnung";
        const VERSION = "v1.10";
        const REVISION = "0";
        const TEST_BUILD = true;
        const TEST_BUILD_MSG = TEST_BUILD ? "This version of Codename " + CODENAME + " also looks Experimental!" : "";
        $('#site-name-version').text("Codename " + CODENAME + " " + VERSION + " -> R" + REVISION);
        $('#testbuild').text(TEST_BUILD_MSG);
        $('#copyright-year').text("2024 -> " + new Date().getFullYear());
    });
})();
