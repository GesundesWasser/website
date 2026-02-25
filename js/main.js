"use strict";

import '../css/button.css';
import '../css/img.css';
import '../css/layout.css';
import '../css/master.css';
import '../css/scrollbar.css';
import '../css/section.css';
import '../css/text.css';
import '../css/footer.css';
import './content.js';
import loadTheme from './theme.js';
import loadHeader from './header.js';
import loadFooter from './footer.js';
loadTheme();
loadHeader();
loadFooter();
console.log("[mcdonelts.city] Successfully loaded all Scripts!");