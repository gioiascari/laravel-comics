console.log("Ok Js :)");
const jumbotron = document.querySelector(".jumbotron");
const img_Jumbotron = document.querySelector("#provaImg");

const arrayCarousel = [
    "https://www.dccomics.com/sites/default/files/dc-hero_20220520_AAPI_NewSuper-Man_62881dd01788a0.73066572.jpg",
    "https://www.dccomics.com/sites/default/files/dc-hero_20220520_TTGDCSHG_Mayhem_62881e0115fcb7.71538310.jpg",
    "https://www.dccomics.com/sites/default/files/dc-hero_20220520_JurassicLeague_62881e6a5754b4.98346794.jpg",
    "img/jumbotron.jpg",
];

counter = 0;
const setImage = () => {
    document.getElementById("provaImg").src = arrayCarousel[counter];
    counter = (counter + 1) % arrayCarousel.length;
};

setInterval(setImage, 3000);
