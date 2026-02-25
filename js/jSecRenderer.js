"use strict";
console.log("[jSec] Starting...");
import $ from 'jquery';

const jSecRenderer = (function() {
    let currentSections = [];
    let currentLabel = 'Posts';
    const $mainContent = $('#main-content');

    // Render blog card list
    function renderBlogList(sections, label) {
        $mainContent.empty();

        const $feed = $('<div class="blog-feed"></div>');
        const $feedLabel = $('<h2 class="feed-label"></h2>').text(label || 'Posts');
        $feed.append($feedLabel);

        sections.forEach((section, index) => {
            const $card = $('<article class="blog-card"></article>');
            const $body = $('<div class="blog-card-body"></div>');

            if (section.date) {
                $body.append($('<time class="blog-card-date"></time>').text(section.date));
            }

            if (section.title) {
                const $title = $('<h3 class="blog-card-title"></h3>').text(section.title);
                $body.append($title);
            }

            if (section.description) {
                const excerpt = section.description.length > 160
                    ? section.description.slice(0, 160).trimEnd() + '…'
                    : section.description;
                $body.append($('<p class="blog-card-excerpt"></p>').text(excerpt));
            }

            // Bottom row: thumbnail + read more button
            const $bottom = $('<div class="blog-card-bottom"></div>');

            if (section.imgSrc) {
                const $thumb = $('<img class="blog-card-thumb">');
                $thumb.attr('src', section.imgSrc);
                $thumb.attr('alt', section.imgAlt || '');
                $bottom.append($thumb);
            }

            const $readMore = $('<a class="blog-read-more" href="#">Weiterlesen →</a>');
            $readMore.on('click', (e) => {
                e.preventDefault();
                renderArticle(section, sections, label);
            });
            $bottom.append($readMore);

            $body.append($bottom);
            $card.append($body);
            $feed.append($card);
        });

        $mainContent.append($feed);
        $('html, body').animate({ scrollTop: 0 }, 'fast');
        console.log("[jSec] Blog list rendered.");
    }

    // Render a single article
    function renderArticle(section, sections, label) {
        $mainContent.empty();

        const $article = $('<article class="blog-article"></article>');

        // Back button
        const $back = $('<button class="blog-back-btn">← Zurück</button>');
        $back.on('click', () => renderBlogList(sections, label));
        $article.append($back);

        if (section.imgSrc) {
            const $hero = $('<img class="blog-article-hero">');
            $hero.attr('src', section.imgSrc);
            $hero.attr('alt', section.imgAlt || '');
            $article.append($hero);
        }

        if (section.date) {
            $article.append($('<time class="blog-article-date"></time>').text(section.date));
        }

        if (section.title) {
            $article.append($('<h1 class="blog-article-title"></h1>').text(section.title));
        }

        const $divider = $('<hr class="blog-article-divider">');
        $article.append($divider);

        if (section.description) {
            // Split on double-newline to support paragraphs
            const paragraphs = section.description.split(/\n\n+/);
            const $content = $('<div class="blog-article-content"></div>');
            paragraphs.forEach(para => {
                $content.append($('<p></p>').text(para));
            });
            $article.append($content);
        }

        // Action button (download, link, etc.) if present
        if (section.showButton && section.buttonText) {
            const $btn = $('<button class="blog-action-btn"></button>').text(section.buttonText);
            if (section.disabled) {
                $btn.prop('disabled', true);
            } else if (section.buttonAction) {
                $btn.on('click', section.buttonAction);
            } else if (section.buttonLink) {
                $btn.on('click', () => { window.location.href = section.buttonLink; });
            }
            $article.append($btn);
        }

        $mainContent.append($article);
        $('html, body').animate({ scrollTop: 0 }, 'fast');
        console.log("[jSec] Article rendered.");
    }

    return {
        setSections: function(sections, label) {
            currentSections = sections;
            currentLabel = label || 'Posts';
            renderBlogList(currentSections, currentLabel);
        },
        initialize: function(sections, label) {
            currentSections = sections;
            currentLabel = label || 'Die neuesten nachrichten aus Bulettien';
            renderBlogList(currentSections, currentLabel);
        }
    };
})();

export default jSecRenderer;