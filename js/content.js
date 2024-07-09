"use strict";
import jSecRenderer from './jSecRenderer.js';

const SectionsMain = [
    {
        imgSrc: 'https://download.scamcraft.net/img/jakobsoftlogo-ohne-schrift.png',
        imgAlt: 'Jakobsoft',
        title: 'Jakobsoft',
        description: 'Jakobsoft Software Provider',
        buttonText: 'Zur Jakobsoft Seite!',
        buttonAction: () => {
            jSecRenderer.setSections(SectionsJakobsoft);
        },
        imgStyles: { width: '50px', height: '65px' },
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/timemachine.png',
        imgAlt: 'Time Machine',
        title: 'Time Machine',
        description: 'Die Zeitmaschine bringt dich zu jedem Codename Zurück!',
        buttonText: 'Du Geben Zeitmaschine!',
        buttonAction: () => {
            jSecRenderer.setSections(SectionsTimemachine);
        },
        imgStyles: { width: '65px', height: '65px' },
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/seatables.png',
        imgAlt: 'Seatables',
        title: '',
        description: 'Die BESTEN Sitze der WELT! (Made in China!)',
        buttonText: 'Ich Kaufe!',
        buttonAction: () => {
            jSecRenderer.setSections(SectionsSeatables);
        },
        imgStyles: { width: '65px', height: '65px' },
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/gratspiel-logo.png',
        imgAlt: 'Gratspiel.Virus',
        title: '',
        description: 'Die Besten Vir- Ähhh Spiele!',
        buttonText: 'Zur Gratspiel Seite!',
        buttonAction: () => {
            jSecRenderer.setSections(SectionsGratspiel);
        },
        imgStyles: { width: '130px', height: '65px' },
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/minecraft.png',
        imgAlt: 'Minecraft',
        title: 'Minecraft',
        description: 'Die Besten Basen, Deathchamber und Müllchamber!',
        buttonText: 'Anzeigen',
        buttonLink: 'minecraft',
        buttonAction: () => {
            jSecRenderer.setSections(SectionsMinecraft);_
        },
        imgStyles: { width: '50px', height: '65px' },
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/book.png',
        imgAlt: 'Stadtordnung',
        title: 'Stadtordnung',
        description: 'Die Stadtordnung von MCDONELTS CITY (Die ist fürs Klo!)',
        buttonText: 'Leider Gratgesperrt! (Gratsperre.virus)',
        disabled: true,
        imgStyles: { width: '65px', height: '65px' },
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/codename-kapsel-security.png',
        imgAlt: 'Codename Kapselsecurity',
        title: 'Codename Kapselsecurity',
        description: 'Der Login Für Codename Kapselsecurity!',
        buttonText: 'Zur Kapselsecurity Alpha!',
        buttonLink: 'accounts/',
        imgStyles: { width: '65px', height: '65px' },
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/scamcraft-logo.png',
        imgAlt: 'SCAMCRAFT',
        title: 'SCAMCRAFT.NET',
        description: 'Der Beste Server Der Welt.',
        buttonText: 'Leider Gratgesperrt! (Gratsperre.virus)',
        disabled: true,
        imgStyles: { width: '65px', height: '65px' },
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/stellar.png',
        imgAlt: 'Codename Stellarvideo',
        title: 'Codename Stellarvideo',
        description: 'Der Login Für Codename Stellarvideo!',
        buttonText: 'Zur Stellarvideo Alpha!',
        buttonLink: 'stellarvideo/',
        imgStyles: { width: '65px', height: '65px' },
        showButton: true,
    }
];

// Define the sections for Jakobsoft
const SectionsJakobsoft = [
    {
        imgSrc: '',
        imgAlt: '',
        title: 'Codename Winwows',
        description: 'Jakobsoft Codename Winwows Installer',
        buttonText: 'Winwows Installer DOWNLOAD!',
        buttonAction: () => alert('Download Fehlgeschlagen :('),
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/rickrollblocker.png',
        imgAlt: 'Rickrollblocker',
        title: 'Rickrollblocker',
        description: 'Er blockiert jeden Rickroll 100% ünzuverlässig!',
        buttonText: 'Leider Gratgesperrt! (Gratsperre.virus)',
        disabled: true,
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/jakobsoft-browserlogo.png',
        imgAlt: 'Internet Erforscher',
        title: 'iErforsch (Interforsch)',
        description: 'Der Beste Browser Der Welt von Jakobsoft. Version: 2.6',
        buttonText: 'Internet Erforscher DOWNLOAD!',
        buttonLink: 'https://download.scamcraft.net/internet-erforscher/2.6.zip',
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/product-keys.png',
        imgAlt: 'Product Keys',
        title: 'Product Keys',
        description: 'Der Product Key fÃ¼r Das Beste Betriebsystem Winwows!',
        buttonText: 'GEBEN GLATIS!!',
        buttonAction: () => alert('KEINE GLATIS KEY HIER!!!'),
        imgStyles: { width: '50px', height: '50px' },
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/jakobsoft-router.png',
        imgAlt: 'Moden',
        title: 'Moden',
        description: 'Jakobsoft J-5894 DFÃœ Moden!',
        buttonText: 'Leider Gratgesperrt! (Gratsperre.virus)',
        disabled: true,
        showButton: true,
    }
];

const SectionsTimemachine = [
    {
        imgSrc: 'https://download.scamcraft.net/img/timemachine.png',
        imgAlt: 'Timemachine',
        title: 'WAGO Klemme',
        description: 'Welcome to Codename Kapselordnung! Click the Button for WAGO Klemme!',
        buttonText: 'Anzeigen!',
        buttonLink: 'timemachine/wagoklemme',
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/timemachine.png',
        imgAlt: 'Timemachine',
        title: 'Lange Geschichte',
        description: 'Der Text? Laange Geschichte ;)',
        buttonText: 'Anzeigen!',
        buttonLink: 'timemachine/langegeschichte',
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/timemachine.png',
        imgAlt: 'Timemachine',
        title: 'Stadtunordnung',
        description: 'Stadtordnung? NÖ! Stadtunordnung: JÖ!',
        buttonText: 'Anzeigen!',
        buttonLink: 'timemachine/stadtunordnung',
        showButton: true,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/timemachine.png',
        imgAlt: 'Timemachine',
        title: 'Vergammelkapsel',
        description: 'Die Kapsel: Bestellen! Leider Vergammelt :(',
        buttonText: 'Anzeigen!',
        buttonLink: 'timemachine/vergammel',
        showButton: true,
    },
];

const SectionsSeatables = [
    {
        imgSrc: 'https://download.scamcraft.net/img/404.png',
        imgAlt: 'Seatables',
        title: '',
        description: '',
        buttonText: '',
        buttonAction: () => alert('This feature is under construction!'),
        showButton: true,
    }
];

const SectionsGratspiel = [
    {
        imgSrc: 'https://download.scamcraft.net/img/404.png',
        imgAlt: 'Snake',
        title: 'Snake',
        description: 'Ein simples Spiel, dessen Ziel es ist, so viele Punkte wie möglich einzusammeln. (IST HALT SNAKE!)',
        buttonText: 'ICH WILL SCHLANGE!',
        buttonLink: 'gratspiel.virus/snake/',
        showButton: true,
    },
    {
        imgSrc: 'https://firebasestorage.googleapis.com/v0/b/codename-stellar.appspot.com/o/videos%2Fnumber.svg?alt=media&token=6365a609-6fbe-4264-928c-8fe41de42bb7',
        imgAlt: 'Guess the Number',
        title: 'Guess the Number',
        description: 'Ein simples Spiel, dessen Ziel es ist, so viele Punkte wie möglich einzusammeln.',
        buttonText: 'ICH WILL SCHLANGE!',
        buttonLink: 'gratspiel.virus/guess-the-number/',
        showButton: true,
    }
];

const SectionsMinecraft = [
    {
        imgSrc: 'https://download.scamcraft.net/img/bedwars/1.png',
        imgAlt: 'Bedwars',
        title: 'Made By: Fassade Inc.',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/bedwars/2.png',
        imgAlt: 'Bedwars',
        title: 'Die Erste MÜLLBASE!',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/bedwars/3.png',
        imgAlt: 'Bedwars',
        title: 'Camo Chamber!',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/bedwars/4.png',
        imgAlt: 'Bedwars',
        title: 'Die Erste MÜllbase',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/bedwars/5.png',
        imgAlt: 'Bedwars',
        title: 'Camo Chamber!',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/bedwars/6.png',
        imgAlt: 'Bedwars',
        title: 'Der MÜllchamber (Besser)!',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/bedwars/7.png',
        imgAlt: 'Bedwars',
        title: 'Der Mystery Hallway',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/bedwars/8.png',
        imgAlt: 'Bedwars',
        title: 'Der Beste "Cooler President!"',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/bedwars/9.png',
        imgAlt: 'Bedwars',
        title: 'Win? Was Das?',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://download.scamcraft.net/img/bedwars/10.png',
        imgAlt: 'Bedwars',
        title: 'Oha, WIN!',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    }
];
jSecRenderer.initialize(SectionsMain);
export { SectionsMain, SectionsJakobsoft, SectionsTimemachine, SectionsSeatables, SectionsGratspiel, SectionsMinecraft };