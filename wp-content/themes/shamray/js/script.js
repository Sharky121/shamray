'use strict';

const Node = {
    MAIN_NAV: document.querySelector(`.main-nav`),
    NAV_BUTTON_TOGGLE: document.querySelector(`.main-nav__toggle`)
}

const navButtonClickHandler = () => {
    if (Node.MAIN_NAV.classList.contains(`main-nav--closed`)) {
        Node.MAIN_NAV.classList.remove(`main-nav--closed`);
        Node.MAIN_NAV.classList.add(`main-nav--open`);
    } else {
        Node.MAIN_NAV.classList.add(`main-nav--closed`);
        Node.MAIN_NAV.classList.remove(`main-nav--open`);
    }
}

Node.MAIN_NAV.classList.remove(`main-nav--nojs`);

Node.NAV_BUTTON_TOGGLE.addEventListener(`click`, navButtonClickHandler);

$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  items: 1
})
