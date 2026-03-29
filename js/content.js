"use strict";
import jSecRenderer from './jSecRenderer.js';

const SectionsMain = [
    {
        imgSrc: 'https://s3.wagger.dev/uploads/595e497fe20495dc3c7448d4b797993ba6bc2a4841d73aa97e424a8d9f518471.png',
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
        imgSrc: 'https://s3.wagger.dev/uploads/12aa404d7205eb73009eea6e907043b976bd90b416925ffeac57985961d75d8e.png',
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
        imgSrc: 'https://s3.wagger.dev/uploads/d623f96302f8f3ecf83785d1812a3b993fd8847c4eec610c95367c03ff73d0d8.png',
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
        imgSrc: 'https://s3.wagger.dev/uploads/bd6c316236c51e4d8229b500e5424e4525948f41b436613b96e7741db852379c.png',
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
        imgSrc: 'https://s3.wagger.dev/uploads/ba4d469418ade1afe20c77e2fb4655472c4dfcccd203d7401230b16f66d1b42d.png',
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
        imgSrc: 'https://s3.wagger.dev/uploads/3c724fde5a1a01667b363c0dfc0f89c7200a21bed908444de4f2f1f80e75c2bf.png',
        imgAlt: 'Stadtordnung',
        title: 'Stadtordnung',
        description: 'Die Stadtordnung von MCDONELTS CITY (Die ist fürs Klo!)',
        buttonText: 'Leider Gratgesperrt! (Gratsperre.virus)',
        disabled: true,
        imgStyles: { width: '65px', height: '65px' },
        showButton: true,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/e2efdc8aecb41e28a8b0203928985dee39a65d3aa0360fceb8e754456ba5dd82.png',
        imgAlt: 'Codename Kapselsecurity',
        title: 'Codename Kapselsecurity',
        description: 'Der Login Für Codename Kapselsecurity!',
        buttonText: 'Zur Kapselsecurity Alpha!',
        buttonLink: 'accounts/',
        imgStyles: { width: '65px', height: '65px' },
        showButton: true,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/7756c7bd439cea78bd7427ed335d63885286eae1eb715a411ef86a5f89a7b510.png',
        imgAlt: 'SCAMCRAFT',
        title: 'SCAMCRAFT.NET',
        description: 'Der Beste Server Der Welt.',
        buttonText: 'Leider Gratgesperrt! (Gratsperre.virus)',
        disabled: true,
        imgStyles: { width: '65px', height: '65px' },
        showButton: true,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/07bd7976d559df1523b63861985e8cb8ff43eec9757aad6a442a4148b4eb84a6.png',
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
        imgSrc: 'https://s3.wagger.dev/uploads/d3e7ead5c2ced9ac085d9333717d5b321a60c2539151102d4a02ee6b90a6ce3a.png',
        imgAlt: 'Rickrollblocker',
        title: 'Rickrollblocker',
        description: 'Er blockiert jeden Rickroll 100% unzuverlässig!',
        buttonText: 'Leider Gratgesperrt! (Gratsperre.virus)',
        disabled: true,
        showButton: true,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/947a5051ad0982fbb55c1c30209e9dba47cf3f1490be6bbf6bb6b6928777f65c.png',
        imgAlt: 'Internet Erforscher',
        title: 'iErforsch (Interforsch)',
        description: 'Der Beste Browser Der Welt von Jakobsoft. Version: 2.6',
        buttonText: 'Internet Erforscher DOWNLOAD!',
        buttonLink: 'https://download.scamcraft.net/internet-erforscher/2.6.zip',
        showButton: true,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/38583ccdfecf1ac30f2e1dfd16615d127e88e64eca2bcea794b608c57ff4e557.png',
        imgAlt: 'Product Keys',
        title: 'Product Keys',
        description: 'Der Product Key für Das Beste Betriebsystem Winwows!',
        buttonText: 'GEBEN GLATIS!!',
        buttonAction: () => alert('KEINE GLATIS KEY HIER!!!'),
        imgStyles: { width: '50px', height: '50px' },
        showButton: true,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/2ae7d10fdac273d8694fc196235642902829efcc9038336c5fb87df9b5ddb087.png',
        imgAlt: 'Moden',
        title: 'Moden',
        description: 'Jakobsoft J-5894 DFÜ Modem!',
        buttonText: 'Leider Gratgesperrt! (Gratsperre.virus)',
        disabled: true,
        showButton: true,
    }
];

const SectionsTimemachine = [
    {
        imgSrc: 'https://s3.wagger.dev/uploads/12aa404d7205eb73009eea6e907043b976bd90b416925ffeac57985961d75d8e.png',
        imgAlt: 'Timemachine',
        title: 'WAGO Klemme',
        description: 'Welcome to Codename Kapselordnung! Click the Button for WAGO Klemme!',
        buttonText: 'Anzeigen!',
        buttonLink: 'timemachine/wagoklemme',
        showButton: true,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/12aa404d7205eb73009eea6e907043b976bd90b416925ffeac57985961d75d8e.png',
        imgAlt: 'Timemachine',
        title: 'Lange Geschichte',
        description: 'Der Text? Laange G´schicht ;)',
        buttonText: 'Anzeigen!',
        buttonLink: 'timemachine/langegeschichte',
        showButton: true,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/12aa404d7205eb73009eea6e907043b976bd90b416925ffeac57985961d75d8e.png',
        imgAlt: 'Timemachine',
        title: 'Stadtunordnung',
        description: 'Stadtordnung? NÖ! Stadtunordnung: JÖ!',
        buttonText: 'Anzeigen!',
        buttonLink: 'timemachine/stadtunordnung',
        showButton: true,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/12aa404d7205eb73009eea6e907043b976bd90b416925ffeac57985961d75d8e.png',
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
        imgSrc: 'https://s3.wagger.dev/uploads/f353c7e478a8296dfa83e44b47fd28ef02d6a87f3c531698c07d40f0d8f798a1.png',
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
        imgSrc: 'https://s3.wagger.dev/uploads/f353c7e478a8296dfa83e44b47fd28ef02d6a87f3c531698c07d40f0d8f798a1.png',
        imgAlt: 'Snake',
        title: 'Snake',
        description: 'Ein simples Spiel, dessen Ziel es ist, so viele Punkte wie möglich einzusammeln. (IST HALT SNAKE!)',
        buttonText: 'ICH WILL SCHLANGE!',
        buttonLink: 'gratspiel.virus/snake/',
        showButton: true,
    },
    {
        imgSrc: '', // Was ist mit dem Logo passiert?
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
        imgSrc: 'https://s3.wagger.dev/uploads/3989b755e8f7e475353eb15426ee25c667307d72f0630be5f191a519a23c2ab8.png',
        imgAlt: 'Bedwars',
        title: 'Made By: Fassade Inc.',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/81b047e9db27429750419c79e0633d07bf285dd83607a06000c833a629cfef89.png',
        imgAlt: 'Bedwars',
        title: 'Die Erste MÜLLBASE!',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/1ca14d5222f69f6cea4d253cddc03ea51e06f6907d51bb84df779330fcfa0221.png',
        imgAlt: 'Bedwars',
        title: 'Camo Chamber!',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/57890023134f9769c6a34a6740200bc7b2297d745422dd1a95bc677ef80e82e0.png',
        imgAlt: 'Bedwars',
        title: 'Die Erste MÜllbase',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/0417b9a14bb3ce32ad2ffd32f03736c76f2f8da86dc42b747cd95168467c5358.png',
        imgAlt: 'Bedwars',
        title: 'Camo Chamber!',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/1216f40249e06aa13d74076e90059efa373fc17682bf1b0ac4c146f11a911d70.png',
        imgAlt: 'Bedwars',
        title: 'Der MÜllchamber (Besser)!',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/ab0f17a29b50e1ad9696670b6a8cfb05760d8b815b289c7bb3445ec6a5c13513.png',
        imgAlt: 'Bedwars',
        title: 'Der Mystery Hallway',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/acea05bbc3f9f870e98e74a9a747815e14817471d2ffbea0ea244f2b15e1842a.png',
        imgAlt: 'Bedwars',
        title: 'Der Beste "Cooler President!"',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/5a5b7c414a6879de529c07f1442b9a8f258776381d1e916ad7c4642e340a0d3d.png',
        imgAlt: 'Bedwars',
        title: 'Win? Was Das?',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    },
    {
        imgSrc: 'https://s3.wagger.dev/uploads/cc77aacd78bc2d5c18b56df3ebc87b8485f2eed6f7e8b9f6dab2f4cc251e2291.png',
        imgAlt: 'Bedwars',
        title: 'Oha, WIN!',
        imgStyles: { width: '480px', height: '270px' },
        showButton: false,
    }
];
jSecRenderer.initialize(SectionsMain);
export { SectionsMain, SectionsJakobsoft, SectionsTimemachine, SectionsSeatables, SectionsGratspiel, SectionsMinecraft };