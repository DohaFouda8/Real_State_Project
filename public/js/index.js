
let landingpage = document.querySelector('.landing-page');
let imgarray = ["house y.jpg", "2.jpg","house.jpg","about-banner-2.jpg","blog-3.jpg"];
setInterval(() => {
    let randomnumber = Math.floor(Math.random() * imgarray.length);
    landingpage.style.backgroundImage = 'url("images/' + imgarray[randomnumber] + '")';

}, 900);
// -------------------------------


// https://www.koby.dev
// Maximilian Kobus | koby.dev

(function () {
    document.addEventListener('DOMContentLoaded', function () {

        'use strict';

        Cards.init();
        conf.InfoBox();

    });
})();

const Cards = {

    init: () => {
        Cards.triggerCardChange();
        Cards.directlyClickOnCards();
        Cards.imageHoverPerspective();
    },

    //  Change the active Card on directly clicking on it
    // - - - - - - - - - - - - - - - - - - - - - - - - - -

    directlyClickOnCards: () => {
        let cards = conf.qSA('.card');
        if (cards.length) {
            cards.forEach(function (item) {
                item.onclick = () => {
                    if (!item.classList.contains('active')) {
                        // search the active card
                        for (let i = 0; i < cards.length; i++) {
                            if (cards[i].classList.contains('active')) {
                                let dataCard = cards[i];
                                dataCard.classList.add('inactive');
                                dataCard.classList.remove('active');
                                break;
                            }
                        }

                        conf.qS('.cards-wrapper').prepend(item);
                        item.classList.remove('inactive');
                        item.classList.add('active');
                    }
                };
            });
        }
    },

    //  Change the active Card
    // - - - - - - - - - - - - - - - - - - - - - - - - - -

    triggerCardChange: () => {

        let arrow = conf.qS('.slide-button'),
            cards = conf.qSA('.card');

        if (arrow) {
            arrow.onclick = () => {
                if (cards.length) {
                    for (let i = 0; i < cards.length; i++) {
                        if (cards[i].classList.contains('active')) {
                            let dataCard = cards[i];
                            getNextCard(dataCard);
                            break;
                        }
                    }
                }

                function getNextCard(prevCard) {

                    for (let i = 0; i < cards.length; i++) {
                        let dataCard = parseInt(prevCard.getAttribute('data-card'), 10),
                            nextCard = parseInt(cards[i].getAttribute('data-card'), 10);

                        if (dataCard + 1 === nextCard) {
                            prevCard.classList.add('inactive');
                            prevCard.classList.remove('active');
                            conf.qS('.cards-wrapper').prepend(cards[i]);
                            cards[i].classList.remove('inactive');
                            cards[i].classList.add('active');
                            break;
                        } else if (dataCard + 1 >= cards.length) {
                            prevCard.classList.add('inactive');
                            prevCard.classList.remove('active');
                            conf.qS('.cards-wrapper').prepend(cards[i]);
                            cards[0].classList.remove('inactive');
                            cards[0].classList.add('active');
                            break;
                        }
                    }
                }
            };
        }
    },

    //  Change the Image perspective on mouseover
    // - - - - - - - - - - - - - - - - - - - - - - - - - -

    imageHoverPerspective: () => {
        let cards = conf.qSA('.card');
        if (cards.length) {
            cards.forEach(function (card) {
                let image = conf.CqS(card, '.image-wrapper');
                image.onmousemove = e => {

                    let offset = image.getBoundingClientRect(),
                        elX = offset.left + document.body.scrollTop,
                        elY = offset.top + document.body.scrollTop,
                        elWidth = image.offsetWidth,
                        elHeight = image.offsetHeight,
                        intensity = 11,
                        mouseX = e.pageX,
                        mouseY = e.pageY,
                        rotateY = (elWidth / 2 - (mouseX - elX)) / (elWidth / 2) * intensity,
                        rotateX = (elHeight / 2 - (mouseY - elY)) / (elHeight / 2) * intensity;

                    let style = 'transform: rotateY(' + rotateY + 'deg) rotateX(' + rotateX + 'deg)';
                    image.setAttribute('style', style);
                };
                image.onmouseleave = () => {
                    image.removeAttribute('style');
                };
            });
        }
    }
};


//  Config Functions
// - - - - - - - - - - - - - - - - - - - - - - - - - -

const conf = {
    qS: selector => {
        return document.querySelector(selector);
    },
    qSA: selector => {
        return document.querySelectorAll(selector);
    },
    CqS: (container, selector) => {
        return container.querySelector(selector);
    },
    InfoBox: () => {
        let toggle = conf.qS('.infobox-container .infobox-toggle'),
            detail = conf.qS('.infobox-container .infobox-detail-container');

        if (toggle) {
            toggle.onclick = e => {
                e.preventDefault();
                detail.classList.toggle('active');
            };
        }
    }
};

/*--------------------
Vars
--------------------*/
let progress = 50
let startX = 0
let active = 0
let isDown = false

/*--------------------
Contants
--------------------*/
const speedWheel = 0.02
const speedDrag = -0.1

/*--------------------
Get Z
--------------------*/
const getZindex = (array, index) => (array.map((_, i) => (index === i) ? array.length : array.length - Math.abs(index - i)))

/*--------------------
Items
--------------------*/
const $items = document.querySelectorAll('.carousel-item')
const $cursors = document.querySelectorAll('.cursor')

const displayItems = (item, index, active) => {
    const zIndex = getZindex([...$items], active)[index]
    item.style.setProperty('--zIndex', zIndex)
    item.style.setProperty('--active', (index - active) / $items.length)
}

/*--------------------
Animate
--------------------*/
const animate = () => {
    progress = Math.max(0, Math.min(progress, 100))
    active = Math.floor(progress / 100 * ($items.length - 1))

    $items.forEach((item, index) => displayItems(item, index, active))
}
animate()

/*--------------------
Click on Items
--------------------*/
$items.forEach((item, i) => {
    item.addEventListener('click', () => {
        progress = (i / $items.length) * 100 + 10
        animate()
    })
})

/*--------------------
Handlers
--------------------*/
const handleWheel = e => {
    const wheelProgress = e.deltaY * speedWheel
    progress = progress + wheelProgress
    animate()
}

const handleMouseMove = (e) => {
    if (e.type === 'mousemove') {
        $cursors.forEach(($cursor) => {
            $cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`
        })
    }
    if (!isDown) return
    const x = e.clientX || (e.touches && e.touches[0].clientX) || 0
    const mouseProgress = (x - startX) * speedDrag
    progress = progress + mouseProgress
    startX = x
    animate()
}

const handleMouseDown = e => {
    isDown = true
    startX = e.clientX || (e.touches && e.touches[0].clientX) || 0
}

const handleMouseUp = () => {
    isDown = false
}

/*--------------------
Listeners
--------------------*/
document.addEventListener('mousewheel', handleWheel)
document.addEventListener('mousedown', handleMouseDown)
document.addEventListener('mousemove', handleMouseMove)
document.addEventListener('mouseup', handleMouseUp)
document.addEventListener('touchstart', handleMouseDown)
document.addEventListener('touchmove', handleMouseMove)
document.addEventListener('touchend', handleMouseUp)


