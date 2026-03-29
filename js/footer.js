"use strict";
import $ from 'jquery';
// Function to initialize header
function loadFooter() {
    $(document).ready(function() {
        // Set the Codename, version, revision, test build, and copyright year
        const CODENAME = "Permanent Release Candidate";
        const VERSION = __GIT_HASH__;
        let TEST_BUILD;
        if (window.location.hostname !== "mcdonelts.city") {
            TEST_BUILD = true;
        } else {
            TEST_BUILD = false;
        }
        const TEST_BUILD_MSG = TEST_BUILD ? "This version of Codename " + CODENAME + " also looks Experimental!" : "";
        $('#site-name-version').text(CODENAME + " (Git Commit: " + VERSION + ")");
        $('#testbuild').text(TEST_BUILD_MSG);
        $('#copyright-year').text("2024 -> " + new Date().getFullYear());
    });
}

export default loadFooter;