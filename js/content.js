"use strict";
import jSecRenderer from './jSecRenderer.js';

const SectionsMain = [
    {
        imgSrc: '', // Verbuggt
        author: 'Comrade Sam',
        date: '26.02.2026',
        imgAlt: '', // Verbuggt
        title: 'Release von krdb.info',
        description: 'Halölölö? Hier ist Comrade Sam, Live aus Bulettien! Die neue Seite krdb.info ist jetzt offiziell online, das heißt jeder, auch außerhalb KRDB kann die News sehen!',
        buttonText: 'Lorem ipsum',
        showButton: false, // Verbuggt
    },
    {
        imgSrc: '',
        author: 'Leonidas Vanec, Ilse Bamberg',
        date: '26.02.2026',
        imgAlt: '',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing',
        description: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        buttonText: 'Lorem ipsum',
        showButton: false,
    },
    {
        imgSrc: '',
        author: 'Leonidas Vanec, Ilse Bamberg',
        date: '26.02.2026',
        imgAlt: '',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing',
        description: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        buttonText: 'Lorem ipsum',
        showButton: false,
    },
    {
        imgSrc: '',
        author: 'Leonidas Vanec, Ilse Bamberg',
        date: '26.02.2026',
        imgAlt: '',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing',
        description: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        buttonText: 'Lorem ipsum',
        showButton: false,
    },
    {
        imgSrc: '',
        author: 'Leonidas Vanec, Ilse Bamberg',
        date: '26.02.2026',
        imgAlt: '',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing',
        description: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        buttonText: 'Lorem ipsum',
        showButton: false,
    },
    {
        imgSrc: '',
        author: 'Leonidas Vanec, Ilse Bamberg',
        date: '26.02.2026',
        imgAlt: '',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing',
        description: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        buttonText: 'Lorem ipsum',
        showButton: false,
    },
    {
        imgSrc: '',
        author: 'Leonidas Vanec, Ilse Bamberg',
        date: '26.02.2026',
        imgAlt: '',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing',
        description: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        buttonText: 'Lorem ipsum',
        showButton: false,
    },
    {
        imgSrc: '',
        author: 'Leonidas Vanec, Ilse Bamberg',
        date: '26.02.2026',
        imgAlt: '',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing',
        description: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        buttonText: 'Lorem ipsum',
        showButton: false,
    },
    {
        imgSrc: '',
        author: 'Leonidas Vanec, Ilse Bamberg',
        date: '26.02.2026',
        imgAlt: '',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing',
        description: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        buttonText: 'Lorem ipsum',
        showButton: false,
    },
    {
        imgSrc: '',
        author: 'Leonidas Vanec, Ilse Bamberg',
        date: '26.02.2026',
        imgAlt: '',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing',
        description: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
        buttonText: 'Lorem ipsum',
        showButton: false,
    }
];
jSecRenderer.initialize(SectionsMain);
export { SectionsMain };