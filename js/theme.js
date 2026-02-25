"use strict";
import $ from 'jquery';
// Function to initialize the theme
function loadTheme() {
    $(document).ready(function() {
        const $darkButton = $('#dark');
        const $lightButton = $('#light');
        const $solarButton = $('#solar');
        const $body = $('body');

        const theme = localStorage.getItem('theme');
        const isSolar = localStorage.getItem('isSolar');

        if (theme) {
            $body.addClass(theme);
            if (isSolar) {
                $body.addClass('solar');
                $solarButton.text("normalize");
                $solarButton.css('--bg-solar', 'white');
            }
        } else {
            $body.addClass('dark');
            localStorage.setItem('theme', 'dark');
        }

        $darkButton.on('click', () => {
            $body.removeClass('light').addClass('dark');
            localStorage.setItem('theme', 'dark');
        });

        $lightButton.on('click', () => {
            $body.removeClass('dark').addClass('light');
            localStorage.setItem('theme', 'light');
        });

        $solarButton.on('click', () => {
            if ($body.hasClass('solar')) {
                $body.removeClass('solar');
                $solarButton.css('--bg-solar', 'var(--yellow)');
                $solarButton.text('Solarize');
                localStorage.removeItem('isSolar');
            } else {
                $solarButton.css('--bg-solar', 'white');
                $body.addClass('solar');
                $solarButton.text('Normalize');
                localStorage.setItem('isSolar', true);
            }
        });
    });
}

export default loadTheme;