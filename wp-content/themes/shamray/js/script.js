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

$('.testimonials-carousel').owlCarousel({
  loop: true,
  autoplay: true,
  margin: 10,
  nav: true,
  dots: false,
  items: 1,
  navText: ["", ""],
  navContainerClass: "testimonials-carousel__nav",
  navClass:["btn btn--white testimonials-carousel__btn testimonials-carousel__btn--prev", "btn btn--white testimonials-carousel__btn testimonials-carousel__btn--next"]
});

$('#accordion').accordion({
  heightStyle: 'content'
});

$("#tabs").tabs();

$('a[data-rel^=lightcase]').lightcase();
