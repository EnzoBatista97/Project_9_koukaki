console.log("Hello world !");

/*Script loading after HTML*/

document.addEventListener("DOMContentLoaded", function () {
  Script();
});

function Script() {

  /* Swipper initilisation*/

    var swiper = new Swiper(".swiper", {
        spaceBetween: 60,
        speed: 1000,

        autoplay: {
            delay: 250,
        },

        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 3,
        coverflowEffect: {
            rotate: 60,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });

    let posX = 0;
    let moveCloud = false;

    const root = document.documentElement;
    const place = document.querySelector("#place");

    const handleIntersect = (entries) => {
        entries.forEach(function (entry) {
        // Contrôle si l'élément à observer
        // est dans le ratio de la zone qui est affichée

            if (entry.intersectionRatio > ratio) {
                elementName = entry.target.className;
                // console.log(elementName + " est visible");

                // Si on trouve l'élément indiqué, on active l'animation d'apparition
                if (
                    elementName === "story hide" ||
                    elementName === "studio hide" ||
                    elementName === "oscars hide" ||
                    elementName === "site-footer hide"
                ) 
            
                {
                    // On valide la class qui va executer le keyframes d'apparition des sections
                    entry.target.classList.add("fade-in-from-bottom");
                    // On arrête l'observation sur cet élément
                    observer.unobserve(entry.target);
                    // On retire la class qui cachait par défaut l'élement
                    entry.target.classList.remove("hide");
                }

                if (
                    elementName === "story__title hide" ||
                    elementName === "studio__title hide" ||
                    elementName === "characters__title hide" ||
                    elementName === "place__title hide"
                ) 
        
                {
                    entry.target.classList.add("title-animation");
                    observer.unobserve(entry.target);
                    entry.target.classList.remove("hide");
                }
            }
        });
    };

    const ratio = 0.05;
    // Initialisation de l'option pour la fonction IntersectionObserver
    // root :
    // ratio : % qui doit être visible de l'élement avant de déclencher l'action
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: ratio,
    };

    // https://developer.mozilla.org/fr/docs/Web/API/Intersection_Observer_API
    // https://grafikart.fr/tutoriels/scroll-reveal-1176#autoplay
    //  Initialisation de la fonction IntersectionObserver
    const observer = new IntersectionObserver(handleIntersect, options);

    // Activation des éléments que l'on va surveiller
    observer.observe(document.querySelector(".story"));
    observer.observe(document.querySelector(".studio"));
    observer.observe(document.querySelector(".oscars"));
    observer.observe(document.querySelector(".site-footer"));
    observer.observe(document.querySelector(".story__title"));
    observer.observe(document.querySelector(".studio__title"));
    observer.observe(document.querySelector(".characters__title"));
    observer.observe(document.querySelector(".place__title"));

    // Contrôle si on scroll sur la fenêtre
    window.addEventListener("scroll", () => {
        // Si on scroll, cela accélère la rotation des fleurs
        // https://www.toutjavascript.com/reference/ref-window.scrolly.php
        var vertical = -1;
        setInterval(function () {
            if (window.scrollY != vertical) {
                vertical = window.scrollY;
                root.style.setProperty("--rotate", "3s");
            } else {
                root.style.setProperty("--rotate", "15s");
            }
        }, 500);

        // On bouge les 2 nuages en fonction du scroll
        posX = Math.round(0 - (window.scrollY - place.offsetTop - 200));
        if (posX <= 0 && posX > -400) {
            root.style.setProperty("--posX", posX + "px");
        }
    });
}