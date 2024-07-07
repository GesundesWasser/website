"use strict";
console.log("[jSec] Starting...");

const jSecRenderer = (function() {
    // Private variables
    let currentSections = [];
    const $mainContent = $('#main-content'); // Ensure jQuery is available

    function renderSections(sections) {
        $mainContent.empty(); // Clear existing content

        sections.forEach((section) => {
            const $sectionElement = $('<section></section>');

            const $imgElement = $('<img>');
            $imgElement.attr('src', section.imgSrc);
            $imgElement.attr('alt', section.imgAlt);
            if (section.imgStyles) {
                $imgElement.css(section.imgStyles);
            }
            $sectionElement.append($imgElement);

            if (section.title) {
                const $titleElement = $('<h2></h2>').text(section.title);
                $sectionElement.append($titleElement);
            }

            const $descriptionElement = $('<p></p>').text(section.description);
            $sectionElement.append($descriptionElement);

            if (section.showButton) {
                const $buttonElement = $('<button></button>').text(section.buttonText);

                if (section.disabled) {
                    $buttonElement.prop('disabled', true);
                } else if (section.buttonAction) {
                    $buttonElement.click(section.buttonAction);
                } else if (section.buttonLink) {
                    $buttonElement.click(() => {
                        window.location.href = section.buttonLink;
                    });
                }

                $sectionElement.append($buttonElement);
            }

            $mainContent.append($sectionElement);
        });

        $('html, body').animate({ scrollTop: 0 }, 'slow'); // Scroll to the top when a page is rendered
        console.log("[jSec] Done! Page loaded.");
    }

    return {
        /**
         * Sets the sections to be rendered and calls the render function.
         * @param {Array} sections - Array of section objects to render.
         */
        setSections: function(sections) {
            currentSections = sections;
            renderSections(currentSections);
        },

        /**
         * Initializes the renderer with the given sections.
         * @param {Array} sections - Array of section objects to render initially.
         */
        initialize: function(sections) {
            currentSections = sections;
            renderSections(currentSections);
        }
    };
})();

export default jSecRenderer;